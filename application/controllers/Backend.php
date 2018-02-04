<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('backend_model');
    }

	public function index()
	{	
		if(!isset($_SESSION['logged_in'])) {
            redirect(base_url());
            
        } else {
        $this->backend_view();
			}
	}

	public function backend_view($data=null) {
		
        $this->load->library('pagination');

		$user_score = $this->backend_model->get_user_score($_SESSION['id']);
        $user_hours = $this->backend_model->get_user_hours($_SESSION['id']);
		$user_data = $this->backend_model->get_user_data($_SESSION['id']);
        $user_timer = $this->backend_model->get_timer($_SESSION['id']);
		
        $convert_to_hours = round($user_hours->time_entry/60);

		$calc = $user_score->score;

		if ($calc>=200 & $calc<300) {
                $hours_total=69;
            } else if ($calc>=300 & $calc<400) {
                $hours_total=81;
            } else if ($calc>=400 & $calc<450) {
                $hours_total=87;
            } else if ($calc>=450 & $calc<500) {
                $hours_total=92.5;
            } else if ($calc>=500 & $calc<550) {
                $hours_total=98;
            } else if ($calc>=550 & $calc<600) {
                $hours_total=102.5;
            } else if ($calc>=600 & $calc<650) {
                $hours_total=107;
            } else if ($calc>=650 & $calc<700) {
                $hours_total=114;
            } else if ($calc>=700 & $calc<750) {
                $hours_total=121;
            } else if ($calc>=750 & $calc<=800) {
                $hours_total=129.5;
            } else {
                $hours_total= "GMAT minimum score is 200";
            }

        $calc_progress = round((1 - (($hours_total - $convert_to_hours)/$hours_total))*100);
        $calc_proj_score = $calc*$calc_progress/100;
        if ($calc_proj_score<=200) {
            $data['score_message'] = "*GMAT minimum score is 200, study some more to break it!";
            $data['projected_score'] = 200;
        } else {
            $data['projected_score'] = $calc_proj_score;
        }
		      
   		$data['user_data'] =  $user_data;
   		$data['user_score'] = $hours_total;
        $data['hours_completed'] = $convert_to_hours;
        $data['progress_bar'] = $calc_progress;
        $data['user_timer'] = $user_timer;

        if($user_timer) {
            $data['action_link'] = 'stop_timer';
            $data['action_link2'] = 'complete_timer';
            $diff = $this->calc_diff();
            $data['timer_output'] =  $diff->format("%d days %h hours %i minutes %s seconds");
            $data['timer_class'] = 'fa fa-stop-circle  fa-2x';
            $data['timer_class2'] = 'fa fa-check-circle  fa-2x';
        } else {
            $data['action_link'] = 'start_timer';
            $data['timer_output'] = null;
            $data['timer_class'] = 'fa fa-play-circle fa-3x';
            $data['timer_class2'] = null;
            $data['action_link2'] = null;
        }

        
        
        $config = array();
        $config['base_url'] = base_url('dashboard');
        $config['total_rows'] = $this->backend_model->record_count();
        $config['per_page'] = 5;
        $config['uri_segment'] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data['user_entries'] = $this->backend_model->get_user_entries($_SESSION['id'], $config['per_page'], $page);
        $data['links'] = $this->pagination->create_links();

		$this->load->view('backend/header');
		$this->load->view('backend/dashboard', $data);
		$this->load->view('backend/footer');
	}

	public function logout() {
		session_destroy();
		redirect(base_url());
	}

	public function edit_score() {
		$this->form_validation->set_rules('score', 'Score', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = array('show' => 'alert alert-danger text-center validation-message');
            $this->backend_view($data);
        } else {
            $score = $this->input->post('score');
            $this->backend_model->edit_score($_SESSION['id'], $score);
            redirect(base_url());
            }
	}

    public function input_time() {
        $timeh = $this->input->post('time_h');
        $timem = $this->input->post('time_m');

        if ($timeh == 0 and $timem == 0) {
            $data = array(
                'show' => 'alert alert-danger text-center validation-message',
                'time_message' => 'Please input time'
            );

            $this->backend_view($data);
        } else {
            $this->backend_model->input_time($_SESSION['id'], $timeh, $timem);
            redirect(base_url());
        }
    }

    public function delete_time($entry_id) {
        $this->backend_model->delete_entry($entry_id);
        redirect(base_url());
    }

    public function start_timer() {
        $this->backend_model->start_timer($_SESSION['id']);
        redirect(base_url());
    }

    public function stop_timer() {
        $this->backend_model->stop_timer($_SESSION['id']);
        redirect(base_url());
    }

    public function complete_timer() {
        $diff = $this->calc_diff();
        $days = $diff->format("%d")*60*24;
        $hours = $diff->format("%h")*60;
        $minutes = $diff->format("%i");
        $seconds = $diff->format("%s")/60;
        $time_total = $days+$hours+$minutes+$seconds;

        $this->backend_model->complete_timer($_SESSION['id'], $time_total);
        redirect(base_url());
    }

    public function calc_diff() {
        $user_timer = $this->backend_model->get_timer($_SESSION['id']);

        $date1=date_create($user_timer->start);
        $date2=date_create(date('Y-m-d H:i:s'));
        return date_diff($date1, $date2);
    }
}

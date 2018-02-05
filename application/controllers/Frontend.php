<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{	

        if(isset($_SESSION['logged_in'])) {
            redirect(base_url('dashboard'));

        } else {

		$this->load->view('frontend/header');
		$this->load->view('frontend/navigation');
		$this->load->view('frontend/landing');
		$this->load->view('frontend/footer');
            }
    }

    public function login_view()
    {   
        if(isset($_SESSION['logged_in'])) {
            redirect(base_url('dashboard'));
            
        } else {
        $data['action'] = 'login';
        $this->load->view('loginsignup/header');
        $this->load->view('loginsignup/navigation', $data);
        $this->load->view('loginsignup/login');
        $this->load->view('loginsignup/footer');
            }  
    }

    public function signup_view()
    {   
        if(isset($_SESSION['logged_in'])) {
            redirect(base_url('dashboard'));
            
        } else {
        $data['action'] = 'signup';
        $this->load->view('loginsignup/header');
        $this->load->view('loginsignup/navigation', $data);
        $this->load->view('loginsignup/signup');
        $this->load->view('loginsignup/footer');
            }        
    }

	public function signup()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('score', 'Score', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]',
                array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
            $this->signup_view();
            } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $score = $this->input->post('score');

            $this->load->model('loginsignup_model');
            $this->loginsignup_model->create_user($email, $password, $score);
            redirect(base_url('dashboard'));
                }
	}

	public function login()
	{
		$this->form_validation->set_rules('login_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('login_password', 'Password', 'trim|required',
                array('required' => 'You must provide a %s.')
        );
            if ($this->form_validation->run() == FALSE) {
    		$this->login_view();
            } else {

            $email = $this->input->post('login_email');
            $password = $this->input->post('login_password');
                

            $this->load->model('loginsignup_model');

            $validation = $this->loginsignup_model->validate($email, $password);

            if ($validation) {
                redirect(base_url('dashboard'));
            } else {
                $this->session->set_flashdata('login_err', 'Email or Password are wrong');
                $this->login_view();
                    }
	            }
    }
}

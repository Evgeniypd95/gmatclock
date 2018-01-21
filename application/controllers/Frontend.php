<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{	
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/navigation');
		$this->load->view('frontend/landing');
		$this->load->view('frontend/footer');
	}

    public function login_view()
    {   
        $data['action'] = 'login';
        $this->load->view('loginsignup/header');
        $this->load->view('loginsignup/navigation', $data);
        $this->load->view('loginsignup/login');
        $this->load->view('loginsignup/footer');
    }

    public function signup_view()
    {   
        $data['action'] = 'signup';
        $this->load->view('loginsignup/header');
        $this->load->view('loginsignup/navigation', $data);
        $this->load->view('loginsignup/signup');
        $this->load->view('loginsignup/footer');
    }

	public function signup()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]',
                array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE)
        {
            $this->signup_view();
        }
        else
        {
            echo "success";
        }
	}

	public function login()
	{
		$this->form_validation->set_rules('login_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('login_password', 'Password', 'trim|required|min_length[3]',
                array('required' => 'You must provide a %s.')
        );
            if ($this->form_validation->run() == FALSE)
        {
    		$this->login_view();
        }
        else
        {
           $data = array(
                'email' => $this->input->post('login_email'),
                'password' => $this->input->post('login_password')
                );

           $this->db->where($data);
            $check = $this->db->count_all_results('users');
            if ($check==1) {
                echo "string";
        }
	}
}}

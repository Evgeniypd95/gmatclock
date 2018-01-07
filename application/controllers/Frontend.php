<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url');

		$this->load->view('frontend/header');
		$this->load->view('frontend/navigation');
		$this->load->view('frontend/landing');
		$this->load->view('frontend/footer');
	}

	public function signup()
	{

				$this->form_validation->set_rules('email', 'Username', 'trim|required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
                {
                        $this->index();
                }
                else
                {
                        echo "success";
                }
	}
}

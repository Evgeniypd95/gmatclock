<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function index()
	{	
		
		$this->load->view('backend/header');
		$this->load->view('backend/navigation');
		$this->load->view('backend/dashboard');
		$this->load->view('backend/footer');
	}

	public function logout() {
		session_destroy();
		redirect(base_url());
	}
}

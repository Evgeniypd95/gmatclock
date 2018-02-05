<?php

class Loginsignup_model extends CI_Model
{

	function __construct(){
  		parent::__construct();
 	}
 	
	public function validate($email, $password) {

		$login_data = array(
                'email' => $email,
                'password' => md5($password)
                );		

		$fetch_user_data = $this->db->get_where('users', $login_data);
		$user_data = $fetch_user_data->row_array();

            if (isset($user_data)) {

            	$this->start_session($user_data);
            	return true;

				} else {

				return false;
				
				}
	}

	public function create_user($email, $password, $score) {

		$signup_data = array(
                'email' => $email,
                'password' => md5($password),
                'date' => date('Y-m-d'),
                'score' => $score
                );		
		$this->db->insert('users', $signup_data);

		$login_data = array(
                'email' => $email,
                'password' => md5($password)
                );	

		$fetch_user_data = $this->db->get_where('users', $login_data);
		$user_data = $fetch_user_data->row_array();

		$this->start_session($user_data);

	}

	public function start_session($loginsignup_data) {

		$user_data = array(
		        'id'  => $loginsignup_data['id'],
		        'email'     => $loginsignup_data['email'],
		        'logged_in' => TRUE
				);

				$this->session->set_userdata($user_data);
	}	
}


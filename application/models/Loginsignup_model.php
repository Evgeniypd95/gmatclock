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

            	$user_data = array(
		        'id'  => $user_data['id'],
		        'email'     => $user_data['email'],
		        'logged_in' => TRUE
				);

				$this->session->set_userdata($user_data);

            	return true;

				} else {

				return false;
				
				}
	}

	public function create_user($email, $password) {

		$user_data = array(
                'email' => $email,
                'password' => md5($password)
                );		
		$this->db->insert('users', $user_data);

        redirect(base_url('dashboard'));
	}	
}


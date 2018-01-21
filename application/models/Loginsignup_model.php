<?php

class Loginsignup_model extends CI_Model
{

	function __construct(){

  		parent::__construct();
 	}
 	
	public function validate($email, $password) {

		$this->db->select('*');
  		$this->db->from('users');
	    $this->db->where('email', $email);
	    $this->db->where('password', $password);

	    $query = $this->query->get();
	    
	    if($query->num_rows() == 1) {

        	return true;

    	} else {

        	return false;

    	}
	}
}
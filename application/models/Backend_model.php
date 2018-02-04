<?php

class Backend_model extends CI_Model
{	

	function __construct(){
  		parent::__construct();
 	}

	public function get_user_data($id) {
	  $query = $this->db->get_where('users', array('id' => $id));
	  return $query->result();
	}

	public function get_user_score($id) {
      $this->db->select('score');
	  $query = $this->db->get_where('users', array('id' => $id));
	  return $query->row();
	}

	public function get_user_hours($id) {
      $this->db->select_sum('time_entry');
	  $query = $this->db->get_where('time_records', array('user_id' => $id));
	  return $query->row();
	}

	public function get_user_entries($id, $limit=null, $start=null) {
	  $this->db->limit($limit, $start);
	  $this->db->order_by('entry_id', 'DESC');
	  $query = $this->db->get_where('time_records', array('user_id' => $id));
	  return $query->result_array();
	}

	public function get_timer($id) {
	  $this->db->select('start');
	  $query = $this->db->get_where('timer', array('user_id' => $id));
	  return $query->row();
	}

	public function edit_score($id, $score) {
		$data = array(
        'score' => $score
		);
		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}

	public function input_time($id, $timeh, $timem) {
		$total_input = $timeh*60 + $timem;

		$data = array(
		'user_id' => $id,	
        'time_entry' => $total_input,
        'datetime' => date('Y-m-d')
		);
		$this->db->insert('time_records', $data);
	}

	public function delete_entry($id) {
		
		$this->db->delete('time_records', array('entry_id' => $id));
	}

	public function record_count() {
		return $this->db->count_all('time_records');
	}

	public function start_timer($id) {
		$data = array(
                'user_id' => $id,
                'start' => date('Y-m-d H:i:s')
                        );
        $this->db->insert('timer', $data);
	}

	public function stop_timer($id){
        $this->db->delete('timer', array('user_id' => $id));
	}

	public function complete_timer($id, $total){
        $this->db->delete('timer', array('user_id' => $id));
        
        $data = array(
		'user_id' => $id,	
        'time_entry' => $total,
        'datetime' => date('Y-m-d')
		);
		$this->db->insert('time_records', $data);
	}

}
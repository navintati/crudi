<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_add extends CI_Model {

	function __construct(){
		parent::__construct();

		ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
	}
	
	function insertUser($data)
	{
        $data = $this->db->insert('user', $data);
        return $this->db->insert_id();
     
  	}

	function get_alldata()
	{
		// $this->db->select('*');
		// $this->db->where(array('gender' => 'Male')); //'active' => 1,
		// $this->db->order_by('created_on', 'desc');
		// $this->db->limit(2);
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) {
			return $query->result();
		}

	}

	function userID($id)
	{
		// $query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
		$query = $this->db->get_where('user', array('id' => $id));

		if ($query->num_rows() == 1) {
			return $query->row_array();
		}

	}

	function userDelID($id)
	{
		// $query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
		$this->db->where('id', $id);
		$this->db->delete('user');

	}


	function userData($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('user', $data);
		return $query;

	}




}

?>
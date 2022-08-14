<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

	function check_user($username)
	{
		$this->db->select('*'); //select all
		$this->db->from('user'); // table name
		$this->db->where('username', $username); // where username is equal to $username
		$query = $this->db->get(); //get data from DB
		return $query;
	}
}

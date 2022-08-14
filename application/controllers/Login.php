<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index()
	{
		$this->load->view('login_view');
	}

	function auth()
	{
		$username  = $this->input->post('username', TRUE);
		$result    = $this->Login_model->check_user($username);
		if ($result->num_rows() > 0) {
			$data  = $result->row_array();
			$name  = $data['username'];
			$type = $data['type'];
			$sesdata = array(
				'username'  => $username,
				'type'     => $type,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if ($type === '1') {
				$this->Admin();
			} elseif ($type === '2') {
				$this->Content_Manager();
			} else {
				$this->Content_Writer();
			}
		} else {
			echo "<script>alert('access denied');history.go(-1);</script>";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
	function Contentmanager()
	{
		$this->load->view('manager');
	}
	function Contentwriter()
	{
		$this->load->view('writer');
	}
	function Admin()
	{
		if ($this->session->userdata('type') === '1') {
			$data['middle'] = 'admin_view';
			$this->load->view('Dashboard', $data);
		} else {
			echo "Access Denied!";
		}
	}
	function Content_Writer()
	{
		if ($this->session->userdata('type') === '3') {
			$data['middle'] = 'content_writer';
			$this->load->view('Dashboard', $data);
		} else {
			echo "Access Denied!";
		}
	}
	function Content_Manager()
	{
		if ($this->session->userdata('type') === '2') {
			$data['middle'] = 'content_manager';
			$this->load->view('Dashboard', $data);
		} else {
			echo "Access Denied!";
		}
	}
}

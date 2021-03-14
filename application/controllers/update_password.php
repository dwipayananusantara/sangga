<?php
class Update_password extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('front/v_update_password');
	}

	function update()
	{
		$password = $this->input->post('password');
		$id_user = $this->session->userdata('id_user');
		$this->db->query("UPDATE user SET password=md5('$password') where id_user=$id_user");
		redirect('update_password');
	}
}
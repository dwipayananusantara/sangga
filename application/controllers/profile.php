<?php
class Profile extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$id_user = $this->session->userdata('id_user');
		$x['data'] =$this->db->query("select * from user where id_user='$id_user'");
		$this->load->view('front/v_profile',$x);
	}

	function update()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$id_user = $this->session->userdata('id_user');
		$this->db->query("UPDATE user SET nama='$nama', phone=$phone, alamat='$alamat' where id_user=$id_user");
		redirect('profile');
	}
}
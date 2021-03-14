<?php
class Kontak extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('morders');
        $this->load->library('upload');
	}

	function index(){
		$x['bnk']=$this->morders->get_bank();
		$this->load->view('front/v_kontak',$x);
	}
}
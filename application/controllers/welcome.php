<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mproduct');
	}
	public function index()
	{
		$x['product'] = $this->mproduct->tampil_product(3);
		$this->load->view('front/home', $x);
	}
}

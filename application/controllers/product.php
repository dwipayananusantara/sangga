<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mproduct');
        $this->load->model('mlestari');
    }
    public function index()
    {
        $page = $this->uri->segment(3);
        $params = $this->input->get();
        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;
        $limit = 4;
        $config['base_url'] = base_url() . 'product/index/';
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $this->pagination->initialize($config);
        $x['page'] = $this->pagination->create_links();
        if ($params['harga'] != null) :
            $x['data_product'] = $this->mproduct->product('', $params['harga']);
        else :
            $x['data_product'] = $this->mproduct->product();
        endif;
        $x['product'] = $this->mproduct->product();
        $this->load->view('front/v_product', $x);
    }

    public function adat()
    {
        $params = $this->input->post();
        if ($params['pulau'] != null && $params['gender'] != null) :
            $x['product'] = $this->mproduct->product($params['gender'], $params['pulau'],2);
        elseif ($params['pulau'] != null) :
            $x['product'] = $this->mproduct->product('', $params['pulau'],2);
        elseif ($params['gender'] != null) :
            $x['product'] = $this->mproduct->product($params['gender'], '',2);
        else :
            $x['product'] = $this->mproduct->product('','',2);
        endif;

        $x['pulau'] = $this->mproduct->tampil_pulau();
        $this->load->view('front/v_product_adat', $x);
    }

    public function tari()
    {
        $params = $this->input->post();
        if ($params['pulau'] != null && $params['gender'] != null) :
            $x['product'] = $this->mproduct->product($params['gender'], $params['pulau'],1);
        elseif ($params['pulau'] != null) :
            $x['product'] = $this->mproduct->product('', $params['pulau'],1);
        elseif ($params['gender'] != null) :
            $x['product'] = $this->mproduct->product($params['gender'], '',1);
        else :
            $x['product'] = $this->mproduct->product('','',1);
        endif;

        $x['pulau'] = $this->mproduct->tampil_pulau();
        $this->load->view('front/v_product_tari', $x);
    }

    function detail_product(){
		$kode=$this->uri->segment(3);
		$x['get_product']=$this->mproduct->get_product($kode);
		$x['gambar_product']=$this->mproduct->getimgproduct($kode);
		$x['aksesoris_product']=$this->mproduct->getdtlproduct($kode, 'AKSESORIS');
		$x['kelengkapan_product']=$this->mproduct->getdtlproduct($kode, 'KELENGKAPAN');
		$x['id_product']=$kode;
		$this->load->view('front/v_detail_product',$x);
    }
    
    function les_tari(){
        $this->load->view('front/v_les_tari');
    }

    function pembayaran_les_tari(){

        $hasil_cek_no_registrasi = $this->mlestari->cari_no_registrasi_terdaftar($_GET['reg']);
        if($hasil_cek_no_registrasi->num_rows > 0){

            $data_row = $hasil_cek_no_registrasi->result_array();
            $data['data'] = [$data_row ,$this->session->flashdata('sudah_daftar')];
            $this->load->view('front/v_pembayaran_les_tari',$data);

        }else{

           redirect(base_url());

        }

        
    }
}

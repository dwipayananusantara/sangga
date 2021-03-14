<?php
class Review extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('upload');
	}

	function index(){
		$this->load->view('front/v_review');
	}

    function insert_review()
    {
        $config['upload_path'] = './front/images/review/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './front/images/review/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '80%';
                $config['width'] = 756;
                $config['height'] = 434;
                $config['new_image'] = './front/images/review/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $id_user = $this->session->userdata('id_user');
                $review = $this->input->post('review');
                $hasil = $this->db->query("INSERT INTO review(id_user, review,gambar_reivew,tanggal)VALUES('$id_user','$review','$gambar',CURDATE())");
                echo $this->session->set_flashdata('msg', 'success');
                redirect('review');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('review');
            }
        }
    }
}
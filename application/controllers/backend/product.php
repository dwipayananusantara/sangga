<?php
class Product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('mproduct');
		$this->load->library('upload');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$x['data'] = $this->mproduct->tampil_product();
			$x['detail'] = $this->mproduct->tampil_detail_product();
			$this->load->view('backend/v_product', $x);
		} else {
			echo "Halaman tidak ditemukan";
		}
	}

	function simpan_product()
	{
		$config['upload_path'] = './front/images/baju'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './front/images/baju' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 756;
				$config['height'] = 434;
				$config['new_image'] = './front/images/baju' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
				$nama_product = $this->input->post('nama_product');
				$deskripsi = $this->input->post('deskripsi');
				$harga_product = $this->input->post('harga_product');
				$id_jenis_product = $this->input->post('id_jenis_product');
				$provinsi = $this->input->post('provinsi');
				$s = $this->input->post('s');
				$m = $this->input->post('m');
				$l = $this->input->post('l');
				$xl = $this->input->post('xl');
				$gender = $this->input->post('gender');
				$pulau = $this->db->query("select id_pulau from provinsi WHERE id_provinsi='$provinsi'")->row_array()['id_pulau'];

				$kode_detail_product = $this->input->post('kode_detail_product');
				$nama_detail_product = $this->input->post('nama_detail_product');

				$data = array(
					'nama_product' => $nama_product,
					'deskripsi' => $deskripsi,
					'harga_product' => $harga_product,
					'harga_deposit' => $harga_product,
					'id_jenis_product' => $id_jenis_product,
					's' => $s,
					'm' => $m,
					'l' => $l,
					'xl' => $xl,
					'gender' => $gender,
					'id_pulau' => $pulau,
					'id_provinsi' => $provinsi
				);

				$this->db->insert('product', $data);
				$id = $this->db->insert_id();

				$data = array(
					'gambar' => $gambar,
					'id_product' => $id
				);
				$this->db->insert('gambar_product', $data);


				$i = 0;
				if ($nama_detail_product) {
					foreach ($nama_detail_product as $detail_product) {
						$data_detail_product = array(
							'id_product' => $id,
							'kode_detail_product' => $kode_detail_product[$i],
							'nama_detail_product' => $detail_product
						);

						$this->db->insert('detail_product', $data_detail_product);
						$i++;
					}
				}
				echo $this->session->set_flashdata('msg', 'success');
				redirect('backend/product');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('backend/product');
			}
		} else {
			redirect('backend/product');
		}
	}

	function update_product()
	{
		$config['upload_path'] = './front/images/baju'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './front/images/baju' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 756;
				$config['height'] = 434;
				$config['new_image'] = './front/images/baju' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$kode = $this->input->post('kode');
				$gambar = $gbr['file_name'];
				$nama_product = $this->input->post('nama_product');
				$deskripsi = $this->input->post('deskripsi');
				$harga_product = $this->input->post('harga_product');
				$id_jenis_product = $this->input->post('id_jenis_product');
				$s = $this->input->post('s');
				$m = $this->input->post('m');
				$l = $this->input->post('l');
				$xl = $this->input->post('xl');
				$gender = $this->input->post('gender');
				$provinsi = $this->input->post('provinsi');
				$pulau = $this->db->query("select id_pulau from provinsi WHERE id_provinsi='$provinsi'")->row_array()['id_pulau'];

				$kode_detail_product = $this->input->post('kode_detail_product');
				$nama_detail_product = $this->input->post('nama_detail_product');
				$this->db->query("UPDATE product SET 
				nama_product='$nama_product',
				deskripsi='$deskripsi',
				harga_product='$harga_product',
				harga_deposit='$harga_product',
				id_jenis_product='$id_jenis_product',
				s='$s', 
				m='$m', 
				l='$l', 
				xl='$xl', 
				gender='$gender', 
				id_pulau='$pulau',
				id_provinsi='$provinsi'
				WHERE id_product='$kode'");

				$this->db->where('id_product', $kode);
				$this->db->delete('gambar_product');

				$data = array(
					'gambar' => $gambar,
					'id_product' => $kode
				);
				$this->db->insert('gambar_product', $data);

				$this->db->where('id_product', $kode);
				$this->db->delete('detail_product');
				$i = 0;
				if (isset($nama_detail_product)) {
					foreach ($nama_detail_product as $detail_product) {
						$data_detail_product = array(
							'id_product' => $kode,
							'kode_detail_product' => $kode_detail_product[$i],
							'nama_detail_product' => $detail_product
						);

						$this->db->insert('detail_product', $data_detail_product);
						$i++;
					}
				}
				echo $this->session->set_flashdata('msg', 'info');
				redirect('backend/product');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('backend/product');
			}
		} else {
			$kode = $this->input->post('kode');
			$nama_product = $this->input->post('nama_product');
			$deskripsi = $this->input->post('deskripsi');
			$harga_product = $this->input->post('harga_product');
			$id_jenis_product = $this->input->post('id_jenis_product');
			$s = $this->input->post('s');
			$m = $this->input->post('m');
			$l = $this->input->post('l');
			$xl = $this->input->post('xl');
			$gender = $this->input->post('gender');
			$provinsi = $this->input->post('provinsi');
			$pulau = $this->db->query("select id_pulau from provinsi WHERE id_provinsi='$provinsi'")->row_array()['id_pulau'];

			$kode_detail_product = $this->input->post('kode_detail_product');
			$nama_detail_product = $this->input->post('nama_detail_product');

			$this->db->query("UPDATE product SET 
				nama_product='$nama_product',
				deskripsi='$deskripsi',
				harga_product='$harga_product',
				harga_deposit='$harga_product',
				s='$s', 
				m='$m', 
				l='$l', 
				xl='$xl', 
				gender='$gender',
				id_pulau='$pulau',
				id_provinsi='$provinsi'
				WHERE id_product='$kode'");
			$this->db->where('id_product', $kode);
			$this->db->delete('detail_product');
			$i = 0;
			if (isset($nama_detail_product)) {
				foreach ($nama_detail_product as $detail_product) {
					$data_detail_product = array(
						'id_product' => $kode,
						'kode_detail_product' => $kode_detail_product[$i],
						'nama_detail_product' => $detail_product
					);

					$this->db->insert('detail_product', $data_detail_product);
					$i++;
				}
			}
			echo $this->session->set_flashdata('msg', 'info');
			redirect('backend/product');
		}
	}

	function hapus_product()
	{
		if ($this->session->userdata('akses') == '1') {
			$id = $this->input->post('kode');
			$this->mproduct->hapus_product($id);
			echo $this->session->set_flashdata('msg', 'success-hapus');
			redirect('backend/product');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
}

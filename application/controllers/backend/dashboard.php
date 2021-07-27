<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('login');
			redirect($url);
		};;
	}

	function index()
	{
		$dataBajuAdat = $this->db->query("
		SELECT COUNT(id_order) as 'jumlah', MONTH(tanggal) as 'bulan' FROM `orders` 
		LEFT JOIN product ON orders.id_product = product.id_product WHERE product.id_jenis_product = 2
		GROUP BY MONTH(tanggal);
		");

		$dataKostumTari = $this->db->query("
		SELECT COUNT(id_order) as 'jumlah', MONTH(tanggal) as 'bulan' FROM `orders` 
		LEFT JOIN product ON orders.id_product = product.id_product WHERE product.id_jenis_product = 1
		GROUP BY MONTH(tanggal);
		");
		
		$param['dataBajuAdat'] = $dataBajuAdat->result();
		$param['dataKostumTari'] = $dataKostumTari->result();
		$this->load->view('backend/v_dashboard', $param);
	}

	function data_dashboard()
	{
		$tgl_dari = $this->input->post('tgl_dari');
		$tgl_sampai = $this->input->post('tgl_sampai');

		$data = $this->db->query("select 
		coalesce(count(case when status = 'BELUM LUNAS' then orders.id_order end), 0) as count_belum_lunas,
		coalesce(count(case when status = 'LUNAS' then orders.id_order end), 0) as count_lunas,
		coalesce(sum(case when status = 'LUNAS' then
		ceiling((kembali - ambil + 1) / 3) * harga_product end),0) as total_lunas,
		coalesce(count(case when is_kembali = 0 then 1 end), 0) as count_belum_dikembalikan
		from orders
		left join
		pembayaran
		on pembayaran.id_order = orders.id_order
		left join product on
		orders.id_product = product.id_product
		where tanggal >= '$tgl_dari'
		and tanggal <= '$tgl_sampai'");
		$data = $data->result_array();
										
		echo json_encode($data);
	}

	function data_dashboard_product()
	{
		$tgl_dari = $this->input->post('tgl_dari');
		$tgl_sampai = $this->input->post('tgl_sampai');

		$data = $this->db->query("select product.id_product, nama_product, COUNT(product.id_product) as jumlah_sewa
		from product
		left join orders
		on product.id_product = orders.id_product
		where status = 'LUNAS'
		and tanggal >= '$tgl_dari'
		and tanggal <= '$tgl_sampai'
		group by product.id_product
		order by COUNT(product.id_product) desc
		limit 5");
		$data = $data->result_array();
										
		echo json_encode($data);
	}

	function get_data_chart()
	{
		$data = $this->db->query("
			SELECT COUNT(id_order) as 'jumlah', MONTH(tanggal) as 'bulan' FROM `orders` 
			LEFT JOIN product ON orders.id_product = product.id_product
			LEFT JOIN jenis_product ON product.id_jenis_product = jenis_product.id_jenis_product
			GROUP BY MONTH(tanggal);
		");

		echo json_encode($data);
	}

}

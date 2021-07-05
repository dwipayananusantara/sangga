<?php
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        };
        $this->load->model('morders');
        $this->load->model('mpaket');
        $this->load->library('upload');
    }
    function index()
    {
        if ($this->session->userdata('akses') != '1') {
            $x['data'] = $this->morders->get_orders($this->session->userdata('id_user'));
        } else {
            $x['data'] = $this->morders->get_orders_v2();
        }
        $this->load->view('backend/v_laporan_order', $x);
    }
    function report_order()
    {
        $tgl_dari = $this->input->post('o_tgl_dari');
        $tgl_sampai = $this->input->post('o_tgl_sampai');
        $status = $this->input->post('status_order');
        $is_kembali = $this->input->post('is_kembali');

        if ($status == 'SEMUA') {
            if ($is_kembali == 'SEMUA') {
                $b['data'] = $this->db->query("select *, orders.id_order as id,
            ceiling((kembali - ambil + 1) / 3) * harga_product as harga_kostum, 
            ceiling((kembali - ambil + 1) / 3) * harga_deposit as harga_deposit,
            ((ceiling((kembali - ambil + 1) / 3) * harga_product) +
            (ceiling((kembali - ambil + 1) / 3) * harga_deposit)) * quantity as harga_total,
            bukti_transfer
            from orders
            left join product
            on product.id_product = orders.id_product
            left join user
            on user.id_user = orders.id_user
            left join pembayaran
            on orders.id_order = pembayaran.id_order
		    where tanggal >= '$tgl_dari'
            and tanggal <= '$tgl_sampai'");
            } else {
                $b['data'] = $this->db->query("select *, orders.id_order as id,
            ceiling((kembali - ambil + 1) / 3) * harga_product as harga_kostum, 
            ceiling((kembali - ambil + 1) / 3) * harga_deposit as harga_deposit,
            ((ceiling((kembali - ambil + 1) / 3) * harga_product) +
            (ceiling((kembali - ambil + 1) / 3) * harga_deposit)) * quantity as harga_total,
            bukti_transfer
            from orders
            left join product
            on product.id_product = orders.id_product
            left join user
            on user.id_user = orders.id_user
            left join pembayaran
            on orders.id_order = pembayaran.id_order
		    where tanggal >= '$tgl_dari'
            and tanggal <= '$tgl_sampai'
            and is_kembali = '$is_kembali'");
            }
        } else {
            if ($is_kembali == 'SEMUA') {
                $b['data'] = $this->db->query("select *, orders.id_order as id,
            ceiling((kembali - ambil + 1) / 3) * harga_product as harga_kostum, 
            ceiling((kembali - ambil + 1) / 3) * harga_deposit as harga_deposit,
            ((ceiling((kembali - ambil + 1) / 3) * harga_product) +
            (ceiling((kembali - ambil + 1) / 3) * harga_deposit)) * quantity as harga_total,
            bukti_transfer
            from orders
            left join product
            on product.id_product = orders.id_product
            left join user
            on user.id_user = orders.id_user
            left join pembayaran
            on orders.id_order = pembayaran.id_order
		    where tanggal >= '$tgl_dari'
            and tanggal <= '$tgl_sampai'
            and status = '$status'");
            } else {
                $b['data'] = $this->db->query("select *, orders.id_order as id,
            ceiling((kembali - ambil + 1) / 3) * harga_product as harga_kostum, 
            ceiling((kembali - ambil + 1) / 3) * harga_deposit as harga_deposit,
            ((ceiling((kembali - ambil + 1) / 3) * harga_product) +
            (ceiling((kembali - ambil + 1) / 3) * harga_deposit)) * quantity as harga_total,
            bukti_transfer
            from orders
            left join product
            on product.id_product = orders.id_product
            left join user
            on user.id_user = orders.id_user
            left join pembayaran
            on orders.id_order = pembayaran.id_order
		    where tanggal >= '$tgl_dari'
            and tanggal <= '$tgl_sampai'
            and status = '$status'
            and is_kembali = $is_kembali");
            }
        }


        $b['judul'] = "Laporan Data Order";
        $b['tgl_dari'] = $tgl_dari;
        $b['tgl_sampai'] = $tgl_sampai;
        $b['status'] = $status;
        $this->load->view('front/v_report_data_order', $b);
    }
}

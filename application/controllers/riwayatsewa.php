<?php
class Riwayatsewa extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$id_user = $this->session->userdata('id_user');
		$x['data'] = $this->db->query("select *, 
        case 
        when o.is_delete = 1
        then 'Cancel'
        when (select count(*) from pembayaran pb
        where pb.id_order = o.id_order ) = 0 
        then 'Menunggu Pembayaran'
        when o.tgl_pengembalian_user is not null and dikembalikan is null
        then 'Menunggu Konfirmasi Pengembalian'
        when o.tgl_pengembalian_user is null
        then 'Menunggu Pengembalian'
        when o.is_rusak = 1
        then 'Hilang/Rusak'
        when status = 'LUNAS' 
        then 'Selesai' 
        else 'Sedang Dipinjam'
        end as status_order,
        ceiling((kembali - ambil + 1) / 3) * harga_product as harga_kostum, 
        ceiling((kembali - ambil + 1) / 3) * harga_deposit as harga_deposit,
        ((ceiling((kembali - ambil + 1) / 3) * harga_product) +
        (ceiling((kembali - ambil + 1) / 3) * harga_deposit)) * o.quantity as harga_total,
        (kembali - ambil + 1) as durasi
        from orders o
        left join user u
        on o.id_user = u.id_user
        left join product p 
        on p.id_product = o.id_product
        where o.id_user = $id_user");
		$this->load->view('front/v_riwayatsewa',$x);
    }
    
	function booking_detail(){
		$id_order = $this->uri->segment(3);
		$x['data'] = $this->db->query("select *, 
        case 
        when o.is_delete = 1
        then 'Cancel'
        when (select count(*) from pembayaran pb
        where pb.id_order = o.id_order ) = 0 
        then 'Menunggu Pembayaran'
        when o.tgl_pengembalian_user is not null and dikembalikan is null
        then 'Menunggu Konfirmasi Pengembalian'
        when o.tgl_pengembalian_user is null
        then 'Menunggu Pengembalian'
        when o.is_rusak = 1
        then 'Hilang/Rusak'
        when status = 'LUNAS' 
        then 'Selesai' 
        else 'Sedang Dipinjam'
        end as status_order,
        ceiling((kembali - ambil + 1) / 3) * harga_product as harga_kostum, 
        ceiling((kembali - ambil + 1) / 3) * harga_deposit as harga_deposit,
        ((ceiling((kembali - ambil + 1) / 3) * harga_product) +
        (ceiling((kembali - ambil + 1) / 3) * harga_deposit)) * o.quantity harga_total,
        (kembali - ambil + 1) as durasi
        from orders o
        left join user u
        on o.id_user = u.id_user
        left join product p 
        on p.id_product = o.id_product
        where o.id_order = '$id_order'");
		$this->load->view('front/v_booking_detail',$x);
	}

    function booking_edit(){
        $id_order = $this->uri->segment(3);
        $x['tipe'] = $this->uri->segment(4);
		$x['data'] = $this->db->query("select *, 
        case 
        when o.is_delete = 1
        then 'Cancel'
        when (select count(*) from pembayaran pb
        where pb.id_order = o.id_order ) = 0 
        then 'Menunggu Pembayaran'
        when o.tgl_pengembalian_user is not null and dikembalikan is null
        then 'Menunggu Konfirmasi Pengembalian'
        when o.tgl_pengembalian_user is null
        then 'Menunggu Pengembalian'
        when o.is_rusak = 1
        then 'Hilang/Rusak'
        when status = 'LUNAS' 
        then 'Selesai' 
        else 'Sedang Dipinjam'
        end as status_order,
        ceiling((kembali - ambil + 1) / 3) * harga_product as harga_kostum, 
        ceiling((kembali - ambil + 1) / 3) * harga_deposit as harga_deposit,
        ((ceiling((kembali - ambil + 1) / 3) * harga_product) +
        (ceiling((kembali - ambil + 1) / 3) * harga_deposit)) * o.quantity as harga_total,
        (kembali - ambil + 1) as durasi
        from orders o
        left join user u
        on o.id_user = u.id_user
        left join product p 
        on p.id_product = o.id_product
        where o.id_order = '$id_order'");
		$this->load->view('front/v_booking_edit',$x);
	}
}
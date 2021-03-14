<?php
class Morders extends CI_Model
{

    function cek_invoice($kode)
    {
        $hasil = $this->db->query("SELECT * FROM orders WHERE id_order='$kode'");
        return $hasil;
    }
    function get_data_user($kode)
    {
        $hasil = $this->db->query("SELECT * FROM user WHERE id_user='$kode'");
        return $hasil;
    }
    function simpan_testimoni($nama, $email, $msg)
    {
        $hasil = $this->db->query("INSERT INTO testimoni(nama,email,pesan,status,tgl_post) VALUES ('$nama','$email','$msg','0',curdate())");
        return $hasil;
    }
    function get_pembayaran()
    {
        $hasil = $this->db->query("SELECT id_bayar,tgl_bayar,metode,bank,order_id,SUM(jumlah)AS total,jumlah,bukti_transfer,pengirim FROM pembayaran JOIN orders ON order_id=id_order JOIN metode_bayar ON orders.id_metode=metode_bayar.id_metode GROUP BY order_id");
        return $hasil;
    }
    function get_orders($iduser)
    {
        $hasil = $this->db->query("select *, orders.id_order as id,
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
        where user.id_user = '$iduser'
        and orders.is_delete = 0
        order by tanggal desc");
        return $hasil;
    }
    function get_orders_v2()
    {
        $hasil = $this->db->query("select *, orders.id_order as id,
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
        where orders.is_delete = 0
        order by tanggal desc");
        return $hasil;
    }
    function bayar_selesai($id)
    {
        $hasil = $this->db->query("UPDATE orders SET status='LUNAS' WHERE id_order='$id'");
        return $hasil;
    }
    function barang_kembali($id, $dikembalikan)
    {
        $hasil = $this->db->query("UPDATE orders SET is_kembali=1, dikembalikan = '$dikembalikan' WHERE id_order='$id'");
        return $hasil;
    }
    function hapus_orders($kode)
    {
        $ukuran = $this->db->query("select ukuran from orders WHERE id_order='$kode'")->row_array()['ukuran'];
        $hasil = $this->db->query("update product
                            set $ukuran = $ukuran + (select quantity from orders WHERE id_order='$kode')
                            where id_product = (select id_product from orders WHERE id_order='$kode')");
        $hasil = $this->db->query("update orders set is_delete = 1 WHERE id_order='$kode'");
        return $hasil;
    }
    function get_bank()
    {
        $hasil = $this->db->query("SELECT * FROM metode_bayar WHERE bank<>''");
        return $hasil;
    }
    function simpan_bukti($noinvoice, $nama, $bank, $jumlah, $gambar)
    {
        
        $hasil = $this->db->query("INSERT INTO pembayaran(tgl_bayar, id_metode,id_order,jumlah,pengirim,bukti_transfer)VALUES(CURDATE(),'$bank','$noinvoice','$jumlah','$nama','$gambar')");
        return $hasil;
    }
    function hapus_bayar($kode)
    {
        $hasil = $this->db->query("delete from pembayaran WHERE id_bayar='$kode'");
        return $hasil;
    }
    function get_no_order()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_order,6)) AS kd_max FROM orders");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return "INV" . date('dmy') . $kd;
    }

    function simpan_order($no_order, $ambil, $kembali, $id_product, $quantity, $id_user, $pengantaran, $ukuran)
    {
        $hasil = $this->db->query("INSERT INTO orders(id_order,ambil,kembali,id_product,quantity,tanggal,id_user,status,pengantaran,ukuran)
        VALUES('$no_order','$ambil','$kembali','$id_product','$quantity',CURDATE(),'$id_user','BELUM LUNAS','$pengantaran', '$ukuran')");

        $this->db->query("update product
                            set $ukuran = $ukuran - $quantity
                            where id_product = $id_product");
        return $hasil;
    }

    function deposit($inv){
		$hasil=$this->db->query("
		select *, 
		ceiling((kembali - ambil + 1) / 3) * harga_product * quantity as harga_kostum, 
		ceiling((kembali - ambil + 1) / 3) * harga_deposit * quantity as harga_deposit,
		((ceiling((kembali - ambil + 1) / 3) * harga_product) +
        (ceiling((kembali - ambil + 1) / 3) * harga_deposit)) * quantity as harga_total,
        ((ceiling((kembali - ambil + 1) / 3) * harga_deposit) - (((dikembalikan - kembali)) * 50000)) * quantity as deposit_kembali,
        (((dikembalikan - kembali)) * 50000) * quantity as denda_pengembalian
        from orders
		left join product
		on product.id_product = orders.id_product
		left join user
		on user.id_user = orders.id_user
		where orders.id_order = '$inv'
        order by tanggal desc");
		return $hasil;
	}
}

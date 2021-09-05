<?php
class Mpaket extends CI_Model{
	function get_metode_pembayaran(){
		$hasil=$this->db->query("SELECT * FROM metode_bayar GROUP BY metode");
		return $hasil;
	}
	
	function get_kategori(){
		$hasil=$this->db->query("select * from kategori_paket");
		return $hasil;
	}
	function get_product($product="", $harga=""){
		if($product!='' && $harga!=''):
			$hasil=$this->db->query("select * from product where id_product='$product' and harga_product='$harga' order by id_product");
		elseif($product!=''):
			$hasil=$this->db->query("select * from product where id_product='$product' order by id_product");
		elseif($harga!=''):
			$hasil=$this->db->query("select * from product where harga_product<=$harga order by id_product");
		else:
			$hasil=$this->db->query("select * from product order by id_product");
		endif;
		return $hasil;
	}
	function get_no_order(){
		$q = $this->db->query("SELECT MAX(RIGHT(id_order,6)) AS kd_max FROM orders where date(tanggal)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "INV".date('dmy').$kd;
	}
	function simpan_order($no_order,$nama,$alamat,$notelp,$email,$paket,$berangkat,$kembali,$dewasa,$anak2,$ket){
		$hasil=$this->db->query("INSERT INTO orders(id_order,nama,alamat,notelp,email,berangkat,kembali,adult,kids,paket_id_order,keterangan,tanggal)VALUES('$no_order','$nama','$alamat','$notelp','$email','$berangkat','$kembali','$dewasa','$anak2','$paket','$ket',CURDATE())");
		return $hasil;
	}
	function get_metode(){
		$hasil=$this->db->query("SELECT * FROM metode_bayar");
		return $hasil;
	}
	function set_bayar($no_invoice,$id){
		$hasil=$this->db->query("update orders set metode_id='$id' where id_order='$no_invoice'");
		return $hasil;
	}
	function faktur($inv){
		$hasil=$this->db->query("
		select *, 
		ceiling((kembali - ambil + 1) / 3) * harga_product as harga_kostum, 
		ceiling((kembali - ambil + 1) / 3) * harga_deposit as harga_deposit,
		(ceiling((kembali - ambil + 1) / 3) * harga_product) +
		(ceiling((kembali - ambil + 1) / 3) * harga_deposit) as harga_total,
		ceiling(datediff(kembali, ambil) + 1) as durasi
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
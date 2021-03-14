<?php
class Mproduct extends CI_Model
{

	function count_product()
	{
		$hasil = $this->db->query("select * from product where is_delete = 0");
		return $hasil;
	}

	/* function get_product($offset, $limit)
	{
		$hasil = $this->db->query("select *, 
		(select gambar from gambar_product
		where gambar_product.id_product = product.id_product
		limit 1) as gambar 
		from product order by id_provinsi, gender, id_product limit $offset,$limit");
		return $hasil;
	} */

	function get_product($product)
	{
		$hasil = $this->db->query("select *, 
		(select gambar from gambar_product
		where gambar_product.id_product = product.id_product
		limit 1) as gambar,
		(select nama_provinsi from provinsi 
		where provinsi.id_provinsi = product.id_provinsi ) as nama_provinsi,
		if(gender='L','Laki - Laki','Perempuan') as nama_gender
		from product where id_product='$product' and is_delete = 0 order by id_provinsi, gender, id_product");
		return $hasil;
	}

	/* function product($product = "", $harga = "", $jenis_product = "")
	{
		if ($product != '' && $harga != '') :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar 
			from product where id_product='$product' and harga_product='$harga' order by id_product");
		elseif ($product != '') :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar 
			from product where id_product='$product' order by id_product");
		elseif ($harga != '') :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar 
			from product where harga_product<=$harga order by id_product");
		elseif ($jenis_product != '') :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar 
			from product where id_jenis_product=$jenis_product order by id_product");
		else :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar 
			from product order by id_product");
		endif;
		return $hasil;
	} */

	function product($gender = "", $pulau = "", $jenis_product = 1)
	{
		if ($pulau != '' && $gender != '') :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar,
			(select nama_provinsi from provinsi 
			where provinsi.id_provinsi = product.id_provinsi ) as nama_provinsi,
			if(gender='L','Laki - Laki','Perempuan') as nama_gender
			from product where id_pulau='$pulau' and gender='$gender' and id_jenis_product=$jenis_product and is_delete = 0 order by id_product");
		elseif ($pulau != '') :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar,
			(select nama_provinsi from provinsi 
			where provinsi.id_provinsi = product.id_provinsi ) as nama_provinsi,
			if(gender='L','Laki - Laki','Perempuan') as nama_gender
			from product where id_pulau='$pulau' and id_jenis_product=$jenis_product and is_delete = 0 order by id_product");
		elseif ($gender != '') :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar,
			(select nama_provinsi from provinsi 
			where provinsi.id_provinsi = product.id_provinsi ) as nama_provinsi,
			if(gender='L','Laki - Laki','Perempuan') as nama_gender 
			from product where gender='$gender' and id_jenis_product=$jenis_product and is_delete = 0 order by id_product");
		else :
			$hasil = $this->db->query("select *, 
			(select gambar from gambar_product
			where gambar_product.id_product = product.id_product
			limit 1) as gambar,
			(select nama_provinsi from provinsi 
			where provinsi.id_provinsi = product.id_provinsi ) as nama_provinsi,
			if(gender='L','Laki - Laki','Perempuan') as nama_gender
			from product where id_jenis_product=$jenis_product and is_delete = 0 order by id_product");
		endif;
		return $hasil;
	}
	function tampil_product($limit = 0)
	{
		if ($limit == 0) :
			$hasil = $this->db->query("select *, 
		(select gambar from gambar_product
		where gambar_product.id_product = product.id_product
		limit 1) as gambar,
		(select nama_provinsi from provinsi 
		where provinsi.id_provinsi = product.id_provinsi ) as nama_provinsi,
		if(gender='L','Laki - Laki','Perempuan') as nama_gender
		from product where is_delete = 0 order by id_product DESC");
		else :
			$hasil = $this->db->query("select *, 
		(select gambar from gambar_product
		where gambar_product.id_product = product.id_product
		limit 1) as gambar,
		(select nama_provinsi from provinsi 
		where provinsi.id_provinsi = product.id_provinsi ) as nama_provinsi,
		if(gender='L','Laki - Laki','Perempuan') as nama_gender
		from product where is_delete = 0 order by id_product DESC limit $limit");
		endif;
		return $hasil;
	}
	function tampil_pulau()
	{
		$hasil = $this->db->query("select * from pulau where is_delete = 0 order by id_pulau ASC");
		return $hasil;
	}
	function tampil_detail_product()
	{
		$hasil = $this->db->query("select * from detail_product order by id_detail_product DESC");
		return $hasil;
	}
	function getdtlproduct($kode, $detail_product = "")
	{
		if ($detail_product != '') :
			$hasil = $this->db->query("select * from detail_product where id_product='$kode' and kode_detail_product = '$detail_product'");
		else :
			$hasil = $this->db->query("select * from detail_product where id_product='$kode'");
		endif;
		return $hasil;
	}
	function getimgproduct($kode)
	{
		$hasil = $this->db->query("select * from gambar_product where id_product='$kode'");
		return $hasil;
	}
	function hapus_product($id)
	{
		$hasil = $this->db->query("UPDATE product SET is_delete=1 where id_product='$id'");
		return $hasil;
	}
}

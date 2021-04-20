<?php
class Mlestari extends CI_Model{

	function daftar_les_tari($no_registrasi, $nama_lengkap, $tempat_tanggal_lahir, $jenis_kelamin, $alamat, $kategori, $no_telp, $email, $photo)
	{
		$hsl=$this->db->query("INSERT INTO `les_tari` (`id_less_tari`, `no_registrasi`, `nama_lengkap`, `tempat_tanggal_lahir`, `jenis_kelamin`, `alamat`, `kategori`, `no_telp`, `email`, `photo`, `bukti_pembayaran`, `status`) VALUES (NULL, '$no_registrasi', '$nama_lengkap', '$tempat_tanggal_lahir', '$jenis_kelamin', '$alamat', '$kategori', '$no_telp', '$email', '$photo', NULL, 'belum bayar');");
		return $hsl;
	}

	function update_les_tari($no_registrasi, $metode_pembayaran, $bukti_pembayaran, $tanggal_upload_bukti_pembayaran,$status ){
		// dalam ulasan
		$hasil= $this->db->query("UPDATE les_tari SET metode_pembayaran='$metode_pembayaran', bukti_pembayaran='$bukti_pembayaran', tanggal_upload_bukti_pembayaran='$tanggal_upload_bukti_pembayaran', status='$status' WHERE no_registrasi='$no_registrasi'");
		return $hasil;
	}

	function cari_email_terdaftar($email)
	{
		$hasil=$this->db->query("SELECT * FROM `les_tari` WHERE email='$email'");
		return $hasil;
	}
	
	function cari_no_registrasi_terdaftar($no_registrasi)
	{
		$hasil=$this->db->query("SELECT * FROM `les_tari` WHERE no_registrasi='$no_registrasi'");
		return $hasil;
	}

	function list_data_les_tari()
	{
		$hasil=$this->db->query("SELECT * FROM `les_tari` ORDER BY `kategori` ASC");
		return $hasil;
	}

	function sudah_bayar($no_registrasi)
	{
		$hasil=$this->db->query("UPDATE les_tari SET status = 'sudah bayar' WHERE no_registrasi = '$no_registrasi'");
		return $hasil;
	}

}
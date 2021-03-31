<?php
class Mlestari extends CI_Model{

	function simpan_rekening($no_registrasi, $nama_lengkap, $tempat_tanggal_lahir, $jenis_kelamin, $alamat, $kategori, $no_telp, $email, $photo){
		$hsl=$this->db->query("INSERT INTO `les_tari` (`id_less_tari`, `no_registrasi`, `nama_lengkap`, `tempat_tanggal_lahir`, `jenis_kelamin`, `alamat`, `kategori`, `no_telp`, `email`, `photo`, `bukti_pembayaran`, `status`) VALUES (NULL, $no_registrasi, $nama_lengkap, $tempat_tanggal_lahir, $jenis_kelamin, $alamat, $kategori, $no_telp, $email, $photo, NULL, 'belum bayar');");
		return $hsl;
	}

}
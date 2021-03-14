<?php
class Mpengguna extends CI_Model{

	function simpan_pass($id,$user,$pass){
        $query=$this->db->query("update user set username='$user',password=md5('$pass') where id_user='$id'");
        return $query;
    }
    function ganti_pass($u){
        $query=$this->db->query("select * from user where username='$u'");
        return $query;
    }

    function getusername($id){
        $query=$this->db->query("select * from user where id_user='$id'");
        return $query;
    }

    function resetpass($id,$pass){
        $query=$this->db->query("update user set password=md5('$pass') where id_user='$id'");
        return $query;
    }
    function hapus_user($id){
        $query=$this->db->query("delete from user where id_user='$id'");
        return $query;
    }

    function edit_user($id,$nama,$username,$password,$level){
        $query=$this->db->query("update user set nama='$nama',username='$username',password=md5('$password'),level='$level' where id_user='$id'");
        return $query;
    }

    function update_user_with_img($kode,$nama,$username,$password,$level,$gambar){
        $query=$this->db->query("update user set nama='$nama',username='$username',password=md5('$password'),level='$level',photo='$gambar' where id_user='$kode'");
        return $query;
    }

    /* function simpan_user($nama,$username,$password,$level,$gambar){
        $query=$this->db->query("insert into user(nama,username,password,level,photo)values('$nama','$username',md5('$password'),'$level','$gambar')");
        return $query;
    } */
    function simpan_user($nama,$username,$password,$level,$alamat){
        $query=$this->db->query("insert into user(nama,username,password,level,alamat)values('$nama','$username',md5('$password'),'$level','$alamat')");
        return $query;
    }
    function pengguna(){
        $query=$this->db->query("SELECT id_user,nama,username,password,IF(level='1','Admin','Operator') AS level,photo FROM user");
        return $query;
    }

}
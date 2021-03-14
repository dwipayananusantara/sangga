<?php
class Mregister extends CI_Model
{
    function cek_user($u)
    {
        $hasil = $this->db->query("select*from user where username='$u'");
        return $hasil;
    }

    function insert_user($nama, $username, $password, $phone, $email, $alamat)
    {
        $hsl = $this->db->query("INSERT INTO user(nama,username,password,level,phone,email,alamat) VALUES ('$nama','$username',md5('$password'),'5','$phone','$email','$alamat')");
        return $hsl;
    }
    
    function verifUser($username)
    {
        $hsl = $this->db->query("UPDATE user SET is_verif = 1 where username = '$username'");
        return $hsl;
    }
}

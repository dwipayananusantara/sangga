<?php
class Mlogin extends CI_Model{
    function cekadmin($u,$p){
        $hasil=$this->db->query("select*from user where username='$u'and password=md5('$p') and is_verif=1");
        return $hasil;
    }
  
}

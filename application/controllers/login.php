<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mlogin');
    }
    function index()
    {
        $x['ref'] = $this->input->post('ref');
        $this->load->view('backend/v_login', $x);
    }
    function auth()
    {
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));
        $ref = strip_tags(str_replace("'", "", $this->input->post('ref')));
        $u = $username;
        $p = $password;
        $cadmin = $this->mlogin->cekadmin($u, $p);
        if ($cadmin->num_rows > 0) {
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('user', $u);
            $xcadmin = $cadmin->row_array();

            $this->session->set_userdata('akses', $xcadmin['level']);
            $id_user = $xcadmin['id_user'];
            $user_nama = $xcadmin['nama'];
            $this->session->set_userdata('id_user', $id_user);
            $this->session->set_userdata('nama', $user_nama);
            $this->session->set_userdata('phone', $xcadmin['phone']);
            $this->session->set_userdata('email', $xcadmin['email']);
            $this->session->set_userdata('alamat', $xcadmin['alamat']);
        }

        if ($this->session->userdata('masuk') == true) {
            if ($ref != '') {
                if ($this->session->userdata('akses') === '1') {
                    redirect('backend/dashboard');
                } else {
                    redirect($ref);
                };
            } else {
                redirect('login/berhasillogin');
            };
        } else {
            redirect('login/gagallogin');
        }
    }
    function berhasillogin()
    {
        redirect('');
    }
    function gagallogin()
    {
        // var_dump(base_url())
        $url = base_url('login');
        echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
        redirect($url);
    }
    function logout()
    {
        $this->session->sess_destroy();
        // $url = base_url('login');
        redirect('');
    }
}

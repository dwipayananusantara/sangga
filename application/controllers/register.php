<?php
class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mregister');
    }
    function index()
    {
        $x['ref'] = $this->input->post('ref');
        $this->load->view('backend/v_register', $x);
    }
    function regist()
    {
        $params['user'] = strip_tags(str_replace("'", "", $this->input->post('name')));
        $params['username'] = strip_tags(str_replace("'", "", $this->input->post('username')));
        $params['email'] = strip_tags(str_replace("'", "", $this->input->post('email')));
        $params['alamat'] = strip_tags(str_replace("'", "", $this->input->post('alamat')));
        $params['password'] = strip_tags(str_replace("'", "", $this->input->post('password')));
        $params['phone'] = strip_tags(str_replace("'", "", $this->input->post('phone')));
        $params['ref'] = strip_tags(str_replace("'", "", $this->input->post('ref')));
        $cadmin = $this->mregister->cek_user($params['username']);
        if ($cadmin->num_rows > 0) {
            redirect('register/gagalregist');
        } else {
            $this->mregister->insert_user($params['user'], $params['username'], $params['password'], $params['phone'], $params['email'], $params['alamat']);
            /* $cadmin = $this->mregister->cek_user($params['username']);
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('user', $params['username']);
            $xcadmin = $cadmin->row_array();

            $this->session->set_userdata('akses', $xcadmin['level']);
            $id_user = $xcadmin['id_user'];
            $this->session->set_userdata('id_user', $id_user);
            $this->session->set_userdata('nama', $params['user']);
            $this->session->set_userdata('email', $params['email']);
            $this->session->set_userdata('phone', $params['phone']); */
            $responEmail = $this->send_email($params);
            /* echo $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Berhasil Dibuat Silahkan Verifikasi Terlebih Dahulu</div>');
            if ($params['ref'] != '') {
                redirect($params['ref']);
            } else */ 

            //handle check email 
            if($responEmail === "gagal"){
                $this->session->set_flashdata('gagal_daftar', true);
                redirect('register');
            }else{
                redirect('register/berhasilregist');
            }
        }
    }

    function send_email($params)
    {
        $config = array(
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://mail.dwipanusa.com',
            'smtp_user'     => 'cs@dwipanusa.com',
            'smtp_pass'     => 'Dwipanusa1234',
            'smtp_port'     => 465,
            'crlf'          => "\r\n",
            'newline'       => "\r\n"
        );

        $message = "Yang Terhormat,
        Sdr/sdri " . $params['user'] . "<br /><br />
        Terima kasih telah mendaftarkan diri anda pada Sanggar Seni Dwipayana Nusantara.<br /><br />
        Silahkan klik link berikut untuk verifikasi pendaftaran anda<br /><br />
        <a href=\""  . base_url() . 'register/verif?username=' . $params['username'] . "\">Klik Untuk Verifikasi</a><br /><br />
        Atas perhatian dan kerjasamanya saya ucapkan terima kasih.<br /><br />
        Salam hormat,<br /><br />
        DwipaNusa";
        $this->load->library('email', $config);
        $this->email->from('dwipayananusantara1234@gmail.com'); // change it to yours
        $this->email->to($params['email']); // change it to yours
        $this->email->subject('Registrasi');
        $this->email->message($message);
        if ($this->email->send()) {
            return "ok";
        } else {
            return "gagal";
            show_error($this->email->print_debugger());
        }
    }

    /* public function send_email($params)
    {
        $config = array(
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://smtp.googlemail.com',
            'smtp_port'     => 465,
            'smtp_user'     => 'dwipayananusantara1234@gmail.com',
            'smtp_pass'     => 'Dwipanusa1234',
            'mailtype'      => 'html',
            'charset'       => 'iso-8859-1',
            'wordwrap'      => TRUE
        );

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('dwipayananusantara1234@gmail.com', 'test Notif');

        // Email penerima
        $this->email->to(strtolower($params['email'])); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject('Registrasi');

        // Isi email
        $this->email->message("
                Yang Terhormat,
                Sdr/sdri " . $params['user'] . "<br /><br />
                Terima kasih telah mendaftarkan diri anda pada sanggar seni Dwi Payanan Nusantara.<br /><br />
                Silahkan klik link berikut untuk verifikasi pendaftaran anda<br /><br />
                <a href=\""  . base_url() . 'register/verif?username=' . $params['username'] . "\">Klik Untuk Verifikasi</a><br /><br />
                Atas perhatian dan kerjasamanya saya ucapkan terima kasih.<br /><br />
                Salam hormat,<br /><br />");

        // Tampilkan pesan sukses atau error
        show_error($this->email->print_debugger());
        die('test');
        if ($this->email->send()) {
            return (array('status' => 'Success'));
        } else {
            return (array('status' => 'Failed'));
        }
    } */

    public function verif()
    {
        $code = $this->input->get('username');

        $message = '<div style="background-color: lightblue;border: 2px outset black;text-align:center">';
        $message .= '<p><b>Terima kasih sudah mendaftar</b></p>';
        $message .= '</div>';

        $this->mregister->verifUser($code);
        return print_r($message);
    }

    function berhasilregist()
    {
        echo $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Berhasil Dibuat Silahkan Verifikasi Terlebih Dahulu</div>');
        redirect('login');
    }

    function gagalregist()
    {
        $url = base_url('register');
        echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Sudah Ada</div>');
        redirect($url);
    }
}

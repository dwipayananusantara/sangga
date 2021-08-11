<?php
class Notif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $hasil = $this->db->query("SELECT * FROM ORDERS
        LEFT JOIN USER
        ON ORDERS.ID_USER = USER.ID_USER
        WHERE CURDATE()+2 = KEMBALI
        AND IS_NOTIF = 0
        AND DIKEMBALIKAN IS NULL");
        foreach($hasil->result_array() as $params){
            $this->send_email($params);
            $this->db->query("UPDATE ORDERS SET IS_NOTIF = 1 WHERE id_order = '".$params['id_order']."'");
        }
    }
    public function send_email($params)
    {
        // Konfigurasi email
        $config = [
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://mail.dwipanusa.com',
            'smtp_user'     => 'cs@dwipanusa.com',
            'smtp_pass'     => 'Dwipanusa1234',
            'smtp_port'     => 465,
            'crlf'          => "\r\n",
            'newline'       => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('dwipayananusantara1234@gmail.com', 'Notif');

        // Email penerima
        $this->email->to(strtolower($params['email'])); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject('Notif');

        // Isi email
        $this->email->message("
                Yang Terhormat,
                Sdr/sdri " . $params['nama'] . "<br /><br />
                Terima kasih telah mendaftarkan diri anda pada sanggar seni Dwi Payanan Nusantara.<br /><br />
                Silahkan klik link berikut untuk verifikasi pendaftaran anda<br /><br />
                Atas perhatian dan kerjasamanya saya ucapkan terima kasih.<br /><br />
                Salam hormat,<br /><br />");

        // Tampilkan pesan sukses atau error

        if ($this->email->send()) {
            return (array('status' => 'Success'));
        } else {
            return (array('status' => 'Failed'));
        }
    }
}

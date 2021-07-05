<?php
class Mail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $id = $this->input->post('id_order');
        $hasil = $this->db->query("SELECT * FROM orders
        LEFT JOIN user
        ON orders.id_user = user.id_user
        WHERE id_order = '$id'
        AND dikembalikan IS NULL");
        foreach($hasil->result_array() as $params){
            $this->send_email($params);
        }
        $this->db->query("UPDATE orders SET is_notif = 1 WHERE id_order = '$id'");
        redirect("backend/orders");
    }
    public function send_email($params)
    {
        // Konfigurasi email
        $config = [
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://smtp.gmail.com',
            'smtp_user'     => 'dwipayananusantara1234@gmail.com',
            'smtp_pass'     => 'Dwipanusa1234',
            'smtp_port'     => 465,
            'crlf'          => "\r\n",
            'newline'       => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('dwipayananusantara1234@gmail.com', 'Notifikasi Pengembalian');

        // Email penerima
        $this->email->to(strtolower($params['email'])); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject('Notif');

        // Isi email
        $this->email->message("
                Yang Terhormat,
                Sdr/sdri " . $params['nama'] . "<br /><br />
                Masa sewa anda akan segera berakhir<br /><br />
                Mohon untuk melakukan pengembalian kostum tepat waktu pada tanggal " . $params['kembali'] . " dan pastikan kembali kelengkapan serta aksesoris kostum sesuai dengan ketentuan awal peminjaman.<br /><br />
                Berikut link untuk konfirmasi pengembalian:<br /><br />
                <a href=\""  . base_url() . 'riwayatsewa/booking_edit/' . $params['id_order'] . "/pengembalian \">Klik Untuk Pengembalian</a><br /><br />
                Terimakasih,<br /><br />
                Salam<br /><br />
                DwipaNusa");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            return (array('status' => 'Success'));
        } else {
            return (array('status' => 'Failed'));
        }
    }
}

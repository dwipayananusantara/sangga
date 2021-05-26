<?php
class Les_Tari extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mlestari');
        $this->load->model('morders');
        $this->load->library('upload');
    }

    function index()
    {
        if ($this->session->userdata('akses') != '1') {
            redirect("/");
        } else {
            $x['data'] = $this->mlestari->list_data_les_tari();
            $this->load->view('backend/v_les_tari', $x);
        }
        
    }

    function simpan()
    {
        if($_POST['email']){

            $hasil_cek_email = $this->mlestari->cari_email_terdaftar($_POST['email']);

            if($hasil_cek_email->num_rows > 0){

                $data_row = $hasil_cek_email->result_array();
                $this->session->set_flashdata('sudah_daftar',true);
                redirect('/product/pembayaran_les_tari?reg='. $data_row[0]['no_registrasi']);

            }else {

                $config['upload_path'] = './assets/les_tari/pas_photo'; //path folder
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

                $this->upload->initialize($config);

                if (!empty($_FILES['photo']['name'])) {
                    if ($this->upload->do_upload('photo')) {
                        $gbr = $this->upload->data();
                        
                        //Compress Image
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './assets/les_tari/pas_photo' . $gbr['file_name'];
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = TRUE;
                        $config['quality'] = '60%';
                        $config['width'] = 756;
                        $config['height'] = 434;
                        $config['new_image'] = './assets/les_tari/pas_photo' . $gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
    
                        $photo = $gbr['file_name'];
                        $regId = md5(uniqid($_POST['email'], true));
                        $hasil['data'] = $this->mlestari->daftar_les_tari(
                            $regId, 
                            $_POST['nama_lengkap'], 
                            $_POST['ttl'], 
                            $_POST['jenis_kelamin'], 
                            $_POST['alamat'], 
                            $_POST['kategori'], 
                            $_POST['no_telp'], 
                            $_POST['email'],
                            $photo
                        );
                
                        // arahin ke view pembayaran bila daftar selesai
                        $this->session->set_flashdata('sudah_daftar',false);
                        // redirect('/product/pembayaran_les_tari?reg='. $regId);
                    } else {
                        // echo $this->session->set_flashdata('msg', 'warning');
                        // redirect('');
                    }
                }else {
                    $regId = md5(uniqid($_POST['email'], true));
                    $hasil['data'] = $this->mlestari->daftar_les_tari(
                        $regId, 
                        $_POST['nama_lengkap'], 
                        $_POST['ttl'], 
                        $_POST['jenis_kelamin'], 
                        $_POST['alamat'], 
                        $_POST['kategori'], 
                        $_POST['no_telp'], 
                        $_POST['email'], 
                        $_POST['photo']
                    );
            
                    // arahin ke view pembayaran bila daftar selesai
                    $this->session->set_flashdata('sudah_daftar',false);
                    // redirect('/product/pembayaran_les_tari?reg='. $regId);
                }

                // send email
                // $params['message'] = "Yang Terhormat,
                // Sdr/sdri " . $_POST['nama_lengkap'] . "<br /><br />
                // Terima kasih telah mendaftarkan diri anda pada Les Tari Sanggar Seni Dwipayana Nusantara.<br /><br />
                // Silahkan klik link berikut untuk melakukan pembayaran anda<br /><br />
                // <a href=\""  . base_url() . 'product/pembayaran_les_tari?reg='. $regId . "\">Klik Untuk Pembayaran</a><br /><br />
                // Atas perhatian dan kerjasamanya saya ucapkan terima kasih.<br /><br />
                // Salam hormat,<br /><br />
                // DwipaNusa";
                // $params['email'] = $_POST['email'];
                // $this->send_email($params);

                redirect('/product/pembayaran_les_tari?reg='. $regId);
            }
        }
    }

    function memperbarui_bukti_pembayaran()
    {
        $config['upload_path'] = './assets/les_tari/bukti_pembayaran'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if (!empty($_FILES['bukti_pembayaran']['name'])) {
            if ($this->upload->do_upload('bukti_pembayaran')) {
                $gbr = $this->upload->data();
                
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/les_tari/bukti_pembayaran' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                $config['width'] = 756;
                $config['height'] = 434;
                $config['new_image'] = './assets/les_tari/bukti_pembayaran' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $bukti_pembayaran = $gbr['file_name'];
                $waktu_sekarang = date('Y-m-d H:i:s');

                $hasil['data'] = $this->mlestari->update_les_tari(
                    $_POST['no_registrasi'], 
                    $_POST['metode_pembayaran'],
                    $bukti_pembayaran,
                    $waktu_sekarang,
                    'dalam ulasan'
                );

                // send email
                $params['message'] = "
                Terima kasih telah melakukan pembayaran untuk Les Tari di Sanggar Seni Dwipayan Nusantar.<br /><br />
                Silahkan tunggu informasi selanjutnya dari kami<br /><br />
                Atas perhatian dan kerjasamanya saya ucapkan terima kasih.<br /><br />
                Salam hormat,<br /><br />
                DwipaNusa";
                $params['email'] = $_POST['email'];
                $this->send_email($params);
                
                $this->session->set_flashdata("sukses_daftar_les_tari", true);
                redirect('/');
            }
        } else {
            echo $this->session->set_flashdata('msg', 'warning');
            redirect('');
        }
    }

    function send_email($params)
    {
        $config = array(
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://smtp.gmail.com',
            'smtp_user'     => 'dwipayananusantara1234@gmail.com',
            'smtp_pass'     => 'Dwipa1234',
            'smtp_port'     => 465,
            'crlf'          => "\r\n",
            'newline'       => "\r\n"
        );

        $message = $params['message'];
        $this->load->library('email', $config);
        $this->email->from('dwipayananusantara1234@gmail.com'); // change it to yours
        $this->email->to($params['email']); // change it to yours
        $this->email->subject('Registrasi');
        $this->email->message($message);
        if ($this->email->send()) {
            // echo 'Email sent.';
        } else {
           return show_error($this->email->print_debugger());
        }
    }

    function update_lunas($no_registrasi)
    {
        if($no_registrasi){
            $this->mlestari->sudah_bayar($no_registrasi);
            redirect('/backend/les_tari');
        }
    }

    function update_ikut_kelas($no_registrasi)
    {
        if($no_registrasi){
            $this->mlestari->sudah_ikut($no_registrasi);
            redirect('/backend/les_tari');
        }
    }

    
    function batal($no_registrasi)
    {
        if($no_registrasi){
            $this->mlestari->batal_ikut($no_registrasi);
            redirect('/backend/les_tari');
        }
    }
    
}

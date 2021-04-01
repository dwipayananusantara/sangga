<?php
class Les_Tari extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mlestari');
        $this->load->library('upload');
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
                        redirect('/product/pembayaran_les_tari?reg='. $regId);
                    } else {
                        echo $this->session->set_flashdata('msg', 'warning');
                        redirect('');
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
                    redirect('/product/pembayaran_les_tari?reg='. $regId);
                }
            }
        }
    }

    function memperbarui_bukti_pembayaran()
    {

        var_dump($_POST);
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

                        
                
                        // arahin ke view pembayaran bila daftar selesai
                        // $this->session->set_flashdata('sudah_daftar',false);
                        redirect('/');
                    } else {
                        echo $this->session->set_flashdata('msg', 'warning');
                        redirect('');
                    }
    }
}
    
}

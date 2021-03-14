<?php
class Orders extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        };
        $this->load->model('morders');
        $this->load->model('mpaket');
        $this->load->library('upload');
    }
    function index()
    {
        if ($this->session->userdata('akses') != '1') {
            $x['data'] = $this->morders->get_orders($this->session->userdata('id_user'));
        } else {
            $x['data'] = $this->morders->get_orders_v2();
        }
        $this->load->view('backend/v_orders', $x);
    }
    function pembayaran_selesai()
    {
        $id = $this->uri->segment(4);
        $this->morders->bayar_selesai($id);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('backend/orders');
    }
    function barang_kembali()
    {
        $id = $this->input->post('kode');
        $dikembalikan = $this->input->post('dikembalikan');
        $this->morders->barang_kembali($id,$dikembalikan);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('backend/orders');
    }
    function add_orders()
    {
        $x['data'] = $this->morders->get_orders_v2();
        $data_user = $this->morders->get_data_user($this->session->userdata('id_user'));
        $this->load->view('backend/v_add_orders', $x);
    }
    function edit_orders()
    {
        $kode = $this->input->post('kode');
        $dewasa = $this->input->post('dewasa');
        $anaks = $this->input->post('anaks');
        $this->morders->edit_orders($kode, $dewasa, $anaks);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('backend/orders');
    }
    function pembayaran_orders()
    {
        if ($this->input->post('tipe') == 'pembayaran') {
            // var_dump($this->input-> post());
            // var_dump($_FILES['filefoto']);
            // die();
            $config['upload_path'] = './assets/bukti_transfer/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['filefoto']['name'])) {
                if ($this->upload->do_upload('filefoto')) {
                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/bukti_transfer/' . $gbr['file_name'];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = FALSE;
                    $config['quality'] = '60%';
                    $config['width'] = 756;
                    $config['height'] = 434;
                    $config['new_image'] = './assets/bukti_transfer/' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $gambar = $gbr['file_name'];
                    $kode = $this->input->post('kode');
                    $nama = $this->input->post('nama');
                    $jumlah = $this->input->post('jumlah');
                    $metode = $this->input->post('metode');
                    $this->morders->simpan_bukti($kode, $nama, $metode, $jumlah, $gambar);
                    echo $this->session->set_flashdata('msg', 'success');
                    redirect('');
                } else {
                    echo $this->session->set_flashdata('msg', 'warning');
                    redirect('');
                }
            } 
        } else {
            $config['upload_path'] = './front/images/review/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

            $this->upload->initialize($config);
            if (!empty($_FILES['filefoto']['name'])) {
                if ($this->upload->do_upload('filefoto')) {
                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './front/images/review/' . $gbr['file_name'];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = FALSE;
                    $config['quality'] = '80%';
                    $config['width'] = 756;
                    $config['height'] = 434;
                    $config['new_image'] = './front/images/review/' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $gambar = $gbr['file_name'];
                    $id_user = $this->session->userdata('id_user');
                    $kode = $this->input->post('kode');
                    $review = $this->input->post('review');
                    $tgl_pengembalian_user = $this->input->post('tgl_pengembalian_user');
                    $hasil = $this->db->query("INSERT INTO review(id_user, review,gambar_reivew,tanggal,id_order)VALUES('$id_user','$review','$gambar',CURDATE(),'$kode')");
                    $hasil = $this->db->query("UPDATE orders SET tgl_pengembalian_user = '$tgl_pengembalian_user' WHERE id_order = '$kode'");
                    echo $this->session->set_flashdata('msg', 'success');
                    redirect('');
                } else {
                    echo $this->session->set_flashdata('msg', 'warning');
                    redirect('');
                }
            }
        }
    }

    function cek_harga()
    {
        $id_product = $this->input->post('id_product');
        $quantity = $this->input->post('quantity');
        $ambil = $this->input->post('ambil');
        $kembali = $this->input->post('kembali');

        $q_harga = $this->db->query("select *,
                    ceiling((date('$kembali') - date('$ambil')+1) / 3) * harga_product as harga_kostum, 
                    ceiling((date('$kembali') - date('$ambil')+1) / 3) * harga_deposit as harga_deposit,
                    (ceiling((date('$kembali') - date('$ambil')+1) / 3) * harga_product) +
                    (ceiling((date('$kembali') - date('$ambil')+1) / 3) * harga_deposit) total_harga
                    from product
                    where id_product = $id_product");
        $q_harga = $q_harga->result_array();
        $data['total_harga'] = intval($q_harga[0]['total_harga']) * intval($quantity);
        $data['fmt_total_harga'] = "Rp. " . number_format($data['total_harga'], 0, ",", ".");

        echo json_encode($data);
    }

    function hapus_order()
    {
        $kode = $this->input->post('kode');
        $this->morders->hapus_orders($kode);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('backend/orders');
    }

    function update_rusak()
    {
        $id_order = $this->input->post('id_order');
        $keterangan = $this->input->post('keterangan');
        $ukuran = $this->db->query("select ukuran from orders WHERE id_order='$id_order'")->row_array()['ukuran'];
        $this->db->query("update product
                            set $ukuran = $ukuran - (select quantity from orders WHERE id_order='$id_order')
                            where id_product = (select id_product from orders WHERE id_order='$id_order')");
        $this->db->query("update orders set is_rusak = 1, keterangan_rusak = '$keterangan' WHERE id_order='$id_order'");
        echo $this->session->set_flashdata('msg', 'success-rusak');
        redirect('backend/orders');
    }

    function save_order()
    {
        $no_order = $this->morders->get_no_order();
        $ambil = $this->input->post('ambil');
        $kembali = $this->input->post('kembali');
        $id_product = $this->input->post('id_product');
        $quantity = $this->input->post('quantity');
        $pengantaran = $this->input->post('pengantaran');
        $ukuran = $this->input->post('ukuran');
        $data_user = $this->session->userdata('id_user');
        $this->morders->simpan_order($no_order, $ambil, $kembali, $id_product, $quantity, $data_user, $pengantaran, $ukuran);
        echo json_encode($no_order);
    }

    function get_invoice()
    {
        $inv = $this->uri->segment(4);
        $x['data'] = $this->mpaket->faktur($inv);
        $x['judul'] = "Invoice";
        $this->load->view('front/v_invoices_bank', $x);
    }

    function get_deposit()
    {
        $inv = $this->uri->segment(4);
        $x['data'] = $this->morders->deposit($inv);
        $x['judul'] = "Deposit";
        $this->load->view('front/v_deposit', $x);
    }

    function kurangi_stock()
    {
        //kurangi stock
        $queryKurangiStock = "UPDATE product SET $ukuran=((SELECT $ukuran from product WHERE id_product=$id_product)-$quantity) WHERE id_product=$id_product";
        $this->db->query($queryKurangiStock);
    }
}

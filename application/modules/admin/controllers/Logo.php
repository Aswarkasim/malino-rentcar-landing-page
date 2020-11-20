<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logo extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_user();
  }


  function index()
  {
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $data = [
      'title'     => 'Ubah Logo',
      'konfigurasi'      => $konfigurasi,
      'content'   => 'admin/konfigurasi/logo'
    ];

    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function upload()
  {
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    if (!empty($_FILES['logo']['name'])) {
      $config['upload_path']   = './assets/uploads/images/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('logo')) {
        $this->upload->display_errors();
        redirect('admin/logo');
      } else {

        if ($konfigurasi->logo != "") {
          unlink($konfigurasi->logo);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'logo'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
        $this->session->set_flashdata('msg', 'Logo diubah');
        redirect('admin/logo');
      }
    }
  }
}

/* End of file Controllername.php */

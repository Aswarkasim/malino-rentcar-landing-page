<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
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
      'title'     => 'Ubah Banner',
      'konfigurasi'      => $konfigurasi,
      'content'   => 'admin/konfigurasi/banner'
    ];

    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function upload()
  {
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    if (!empty($_FILES['banner']['name'])) {
      $config['upload_path']   = './assets/uploads/images/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('banner')) {
        $this->upload->display_errors();
        redirect('admin/banner');
      } else {

        if ($konfigurasi->banner != "") {
          unlink($konfigurasi->banner);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'warna_text'    => $this->input->post('warna_text'),
          'banner'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
        $this->session->set_flashdata('msg', 'Banner diubah');
        redirect('admin/banner');
      }
    } else {

      $data = [
        'warna_text'    => $this->input->post('warna_text')
      ];
      $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
      $this->session->set_flashdata('msg', 'Banner diubah');
      redirect('admin/banner');
    }
  }
}

/* End of file Controllername.php */

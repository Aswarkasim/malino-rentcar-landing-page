<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Penawaran extends CI_Controller
{

  // public function index()
  // {

  //   $data = [
  //     'content'  => 'home/home/list_penawaran'
  //   ];
  //   $this->load->view('home/layout/wrapper', $data, FALSE);
  // }


  function index()
  {
    $this->load->library('pagination');

    $mobil = $this->Crud_model->listing('tbl_mobil');

    $config['base_url']     = base_url('home/penawaran/index/');
    $config['total_rows']   = count($mobil);
    $config['per_page']     = 2;

    $from = $this->uri->segment(4);
    $this->pagination->initialize($config);
    $mobil = $this->Crud_model->listMobil($config['per_page'], $from);

    $data = [
      'from'      => $from,
      'mobil'     => $mobil,
      'konfigurasi' => $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1'),
      'pagination' => $this->pagination->create_links(),
      'content'   => 'home/home/list_mobil'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

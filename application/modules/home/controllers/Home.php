<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $banner = $this->Crud_model->listingOneAll('tbl_mobil', 'display_as', 'banner');
        $layanan = $this->Crud_model->listing('tbl_layanan');
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $mobil = $this->Crud_model->listing('tbl_mobil', '3');
        $data = [
            'banner'        => $banner,
            'layanan'       => $layanan,
            'mobil'       => $mobil,
            'konfigurasi'   => $konfigurasi,
            'content'       => 'home/home/index'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
    }
}

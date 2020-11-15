<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_user();
    }


    public function index()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'title'     => 'Dashboard',
            'konfigurasi'      => $konfigurasi,
            'content'   => 'admin/dashboard/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

/* End of file Dashboard.php */

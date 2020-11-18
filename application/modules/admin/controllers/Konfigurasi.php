<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_user();
    }


    public function index()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $valid = $this->form_validation;
        $valid->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required', array('required' => '%s tidak boleh kosong'));

        if ($valid->run() === FALSE) {
            $data = [
                'title'     => 'Profil ',
                'back'      => 'barang/konfigurasi',
                'konfigurasi'    => $konfigurasi,
                'content'   => 'admin/konfigurasi/edit'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'nama_perusahaan'   => $i->post('nama_perusahaan'),
                'nama_pimpinan'   => $i->post('nama_pimpinan'),
                'kontak_person'   => $i->post('kontak_person'),
                'email'   => $i->post('email'),
                'npwp'   => $i->post('npwp'),
                'nama_bank'   => $i->post('nama_bank'),
                'no_rekening'   => $i->post('no_rekening'),
                'atas_nama_rekening'   => $i->post('atas_nama_rekening'),
                'pesan_wa'   => $i->post('pesan_wa'),
                'deskripsi'   => $i->post('deskripsi'),
                'alamat'   => $i->post('alamat')
            ];
            $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
            $this->session->set_flashdata('msg', 'Konfigurasi diubah');
            redirect('admin/konfigurasi');
        }
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in_user();
    }


    public function index()
    {
        $mobil = $this->Crud_model->listing('tbl_mobil');
        $data = [
            'add'      => 'admin/mobil/add',
            'edit'      => 'admin/mobil/edit/',
            'delete'      => 'admin/mobil/delete/',
            'mobil'      => $mobil,
            'content'   => 'admin/mobil/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }


    public function add()
    {

        $this->load->helper('string');

        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('merk_mobil', 'Merk Mobil', 'required', ['required' => $required]);
        $valid->set_rules('harga', 'Harga', 'required', ['required' => $required]);
        if ($valid->run()) {
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path']   = './assets/uploads/images/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('gambar')) {
                    $data = [
                        'title'     => 'Tambah Mobil',
                        'add'       => 'admin/mobil/add',
                        'back'      => 'admin/mobil',
                        'error'     => $this->upload->display_error(),
                        'content'   => 'admin/mobil/add'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {
                    $upload_data = ['uploads' => $this->upload->data()];

                    $i = $this->input;
                    $data = [
                        'id_mobil'      => random_string(),
                        'merk_mobil'    => $i->post('merk_mobil'),
                        'deskripsi'     => $i->post('deskripsi'),
                        'rentan'        => $i->post('rentan'),
                        'harga'        => $i->post('harga'),
                        'display_as'        => $i->post('display_as'),
                        'driver'        => $i->post('driver'),
                        'seat'          => $i->post('seat'),
                        'type'          => $i->post('type'),
                        'bbm'          => $i->post('bbm'),
                        'parkir'          => $i->post('parkir'),
                        // 'tol'          => $i->post('tol'),
                        'makanan_driver'          => $i->post('makanan_driver'),
                        'is_active'     => $i->post('is_aktif'),
                        'gambar'          => $config['upload_path'] . $upload_data['uploads']['file_name']
                    ];
                    $this->Crud_model->add('tbl_mobil', $data);
                    $this->session->set_flashdata('msg', 'Mobil ditambahkan');
                    redirect('admin/mobil');
                }
            }
        }
        $data = [
            'title'     => 'Tambah Mobil',
            'add'       => 'admin/mobil/add',
            'back'      => 'admin/mobil',
            'content'   => 'admin/mobil/add'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }


    function edit($id_mobil)
    {
        $i = $this->input;
        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('merk_mobil', 'Merk Mobil', 'required', ['required' => $required]);
        $valid->set_rules('harga', 'Harga', 'required', ['required' => $required]);

        $mobil = $this->Crud_model->listingOne('tbl_mobil', 'id_mobil', $id_mobil);
        if ($valid->run()) {
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path']   = './assets/uploads/images/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '100000'; // KB 
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar')) {

                    $data = [
                        'title'     => 'Edit Mobil ' . $mobil->merk_mobil,
                        'edit'       => 'admin/mobil/edit/',
                        'back'      => 'admin/mobil',
                        'mobil'     => $mobil,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'admin/mobil/edit'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {

                    if ($mobil->gambar != "") {
                        unlink($mobil->gambar);
                    }
                    $upload_data = ['uploads' => $this->upload->data()];
                    $data = [
                        'id_mobil'      => $id_mobil,
                        'merk_mobil'    => $i->post('merk_mobil'),
                        'deskripsi'     => $i->post('deskripsi'),
                        'rentan'        => $i->post('rentan'),
                        'harga'         => $i->post('harga'),
                        'driver'        => $i->post('driver'),
                        'seat'          => $i->post('seat'),
                        'type'          => $i->post('type'),
                        'bbm'          => $i->post('bbm'),
                        'parkir'          => $i->post('parkir'),
                        // 'tol'          => $i->post('tol'),
                        'makanan_driver'          => $i->post('makanan_driver'),
                        'is_active'     => $i->post('is_aktif'),
                        'gambar'        => $config['upload_path'] . $upload_data['uploads']['file_name']
                    ];
                    $this->Crud_model->edit('tbl_mobil', 'id_mobil', $id_mobil, $data);
                    $this->session->set_flashdata('msg', 'Akta Cerai diupload');
                    redirect('admin/mobil/edit/' . $id_mobil);
                }
            } else {
                $data = [
                    'id_mobil'      => $id_mobil,
                    'merk_mobil'    => $i->post('merk_mobil'),
                    'deskripsi'     => $i->post('deskripsi'),
                    'rentan'        => $i->post('rentan'),
                    'harga'         => $i->post('harga'),
                    'driver'        => $i->post('driver'),
                    'seat'          => $i->post('seat'),
                    'type'          => $i->post('type'),
                    'bbm'          => $i->post('bbm'),
                    'parkir'          => $i->post('parkir'),
                    'tol'          => $i->post('tol'),
                    'makanan_driver'          => $i->post('makanan_driver'),
                    'is_active'     => $i->post('is_aktif')
                ];
                $this->Crud_model->edit('tbl_mobil', 'id_mobil', $id_mobil, $data);
                $this->session->set_flashdata('msg', 'Mobil Diedit');
                redirect('admin/mobil/edit/' . $id_mobil);
            }
        } else {
            $data = [
                'title'     => 'Edit Mobil ' . $mobil->merk_mobil,
                'edit'       => 'admin/mobil/edit/',
                'back'      => 'admin/mobil',
                'mobil'     => $mobil,
                'content'   => 'admin/mobil/edit'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }



    function delete($id_mobil)
    {
        $mobil = $this->Crud_model->listingOne('tbl_mobil', 'id_mobil', $id_mobil);
        if ($mobil->gambar != "") {
            unlink($mobil->gambar);
        }
        $this->Crud_model->delete('tbl_mobil', 'id_mobil', $id_mobil);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/mobil');
    }
}

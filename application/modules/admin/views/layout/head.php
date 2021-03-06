<?php $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="malinotransport" content="malino transport rental mobil">
  <meta name="malinotransport" content="malino transport rental mobil mobil">

  <title><?= 'Admin | ' . $konfigurasi->nama_perusahaan;
          if (isset($title)) {
            echo ' || ' . $title;
          } ?></title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/admin/') ?>css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url('assets/admin/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="<?= base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
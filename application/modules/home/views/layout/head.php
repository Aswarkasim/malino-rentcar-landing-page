<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $konfigurasi->nama_perusahaan;
          if (isset($title)) {
            echo ' || ' . $title;
          } ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/home/'); ?>css/bootstrap.css" rel="stylesheet">
  <link href="<?= base_url('assets/home/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/home/'); ?>css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">
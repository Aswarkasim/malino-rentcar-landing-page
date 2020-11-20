 <?php $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1'); ?>
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg bg-white fixed-top" id="mainNav" style="padding-top: 30px; padding-bottom: 30px;">
   <div class="container">
     <a class="navbar-brand js-scroll-trigger text-dark" href="#page-top">
       <img src="<?= base_url($konfigurasi->logo); ?>" width="150px" alt="">
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link text-dark js-scroll-trigger" href="<?= base_url(); ?>">Beranda</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-dark js-scroll-trigger" href="<?php if (!$this->uri->segment('2')) {
                                                                    echo '#layanan';
                                                                  } else {
                                                                    echo base_url() . '#layanan';
                                                                  } ?>">Layanan</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-dark js-scroll-trigger" href="<?php if (!$this->uri->segment('2')) {
                                                                    echo '#penawaran';
                                                                  } else {
                                                                    echo base_url() . '#penawaran';
                                                                  } ?>">Penawaran</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-dark js-scroll-trigger" href="<?php if (!$this->uri->segment('2')) {
                                                                    echo '#contact';
                                                                  } else {
                                                                    echo base_url() . '#contact';
                                                                  } ?>">Kontak Kami</a>
         </li>
       </ul>
       <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $konfigurasi->kontak_person ?>&text=<?= str_replace(' ', '%20', $konfigurasi->pesan_wa) ?>" class="btn btn-outline-danger">Pesan Sekarang <i class="fa fa-angle-right"></i></a>
     </div>
   </div>
 </nav>
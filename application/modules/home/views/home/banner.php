<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="container">
    <div class="carousel-inner">

      <?php
      foreach ($banner as $key => $row) { ?>

        <div class="carousel-item <?= $key == "0" ? "active" : "" ?>">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 col-12 order-md-4 order-2">
                  <h4 class="text-danger"><?= $row->merk_mobil; ?></h4>
                  <p class="text-dark"><?= character_limiter($row->deskripsi, '100'); ?></p> <br>
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $konfigurasi->kontak_person ?>&text=Hai%20Malinotransport.com">Pesan Sekarang</a>
                </div>
                <div class="col-md-5 col-12 order-md-2 order-1">
                  <img src="<?= base_url($row->gambar); ?>" width="100%" class="mx-auto" alt="slide"></div>
              </div>
            </div>
          </div>
        </div>

      <?php    } ?>

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
  </div>
</div>





<!-- <div class="carousel-item active">
  <div class="mask flex-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 col-12 order-md-4 order-2">
          <h4 class="text-danger">iPhone XS</h4>
          <p class="text-dark">This has many features that are simply awesome. The phone comes with a 3.50-inch display with a resolution of 320x480 pixels.</p> <br>
          <a href="#">Pesan Sekarang</a>
        </div>
        <div class="col-md-5 col-12 order-md-2 order-1">
          <img src="<?= base_url('assets/img/daihatsu.jpg'); ?>" class="mx-auto" alt="slide"></div>
      </div>
    </div>
  </div>
</div> -->
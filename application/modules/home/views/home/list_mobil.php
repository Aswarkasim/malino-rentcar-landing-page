<section>
  <div class="container" style="margin-top: 100px;">

    <?php foreach ($mobil as $row) { ?>
      <div class="row">
        <div class="col-md-5">
          <img src="<?= base_url($row->gambar); ?>" width="100%" alt="">
          <h4><strong>Rp. <?= $row->harga; ?> / Hari</strong></h4>
        </div>
        <div class="col-md-6">
          <h4><strong><?= $row->merk_mobil ?></strong></h4>
          <p><?= $row->deskripsi; ?></p>
          <div class="row">
            <div class="col-md-4 text-center"><img src="<?= base_url('assets/img/driver.svg'); ?>" width="20px" alt=""><br>driver <br> <?= $row->driver; ?></div>
            <div class="col-md-4 text-center"><img src="<?= base_url('assets/img/seat.svg'); ?>" width="20px" alt=""><br>Seat<br> <?= $row->seat; ?></div>
            <div class="col-md-4 text-center"><img src="<?= base_url('assets/img/perseneling.svg'); ?>" width="20px" alt=""><br>Tipe<br> <?= $row->type; ?></div>
          </div>

          <br>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $konfigurasi->kontak_person ?>&text=Hai%20Malinotransport.com" class="btn btn-danger">Pesan Sekarang <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <hr>
    <?php } ?>

    <div class="row">
      <div class="col-md-12">
        <center>
          <?php echo $pagination ?>
        </center>
      </div>
    </div>

  </div>

</section>
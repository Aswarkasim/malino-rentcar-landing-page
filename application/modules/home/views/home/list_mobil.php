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
            <table class="table">
              <tr align="text-center">
                <td align="center"><img src="<?= base_url('assets/img/driver.svg'); ?>" width="20px" alt=""><br>driver <br> <?= $row->driver; ?></td>
                <td align="center"><img src="<?= base_url('assets/img/seat.svg'); ?>" width="20px" alt=""><br>Seat<br> <?= $row->seat; ?></td>
                <td align="center"><img src="<?= base_url('assets/img/perseneling.svg'); ?>" width="20px" alt=""><br>Tipe<br> <?= $row->type; ?></td>
              </tr>


            </table>
            <table class="table">
              <tr>
                <td><i class="fa <?= $row->bbm == 1 ? "fa-check text-success" : "fa-times text-danger" ?>"></i> BBM</td>
                <td><i class="fa <?= $row->parkir == 1 ? "fa-check text-success" : "fa-times text-danger" ?>"></i> Parkir</td>
                <td><i class="fa <?= $row->tol == 1 ? "fa-check text-success" : "fa-times text-danger" ?>"></i> Tol</td>
                <td><i class="fa <?= $row->makanan_driver == 1 ? "fa-check text-success" : "fa-times text-danger" ?>"></i> Makanan Driver</td>
              </tr>
            </table>
          </div>

          <br>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $konfigurasi->kontak_person ?>&text=<?= str_replace(' ', '%20', $konfigurasi->pesan_wa) ?>" class="btn btn-danger">Pesan Sekarang <i class="fa fa-angle-right"></i></a>
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
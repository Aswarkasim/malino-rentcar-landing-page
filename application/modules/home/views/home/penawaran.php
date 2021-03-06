<section id="penawaran">
  <div class="container">
    <div class="row">
      <div class="">
        <center>
          <h2>PENAWARAN</h2>
        </center>
        <div class="row">

          <?php foreach ($mobil as $row) { ?>
            <div class="col-md-4">
              <div class="product-grid4">
                <div class="product-image4">
                  <a href="#">
                    <img class="pic-1" src="<?= base_url($row->gambar); ?>">
                    <img class="pic-2" src="<?= base_url($row->gambar); ?>">
                  </a>
                </div>
                <div class="product-content">
                  <h3 class="title"><strong><?= $row->merk_mobil; ?></strong></h3>
                  <div class="price">
                    Rp. <?= $row->harga . '/ ' . $row->rentan; ?>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table">
                        <tr>
                          <td><img src="<?= base_url('assets/img/driver.svg'); ?>" width="20px" alt=""><br><?= $row->driver; ?></td>
                          <td><img src="<?= base_url('assets/img/seat.svg'); ?>" width="20px" alt=""><br><?= $row->seat; ?></td>
                          <td><img src="<?= base_url('assets/img/perseneling.svg'); ?>" width="20px" alt=""><br><?= $row->type; ?></td>
                        </tr>
                      </table>
                      <table class="table">
                        <tr>
                          <td><i class="fa <?= $row->bbm == 1 ? "fa-check text-success" : "fa-times text-danger" ?>"></i><br> BBM</td>
                          <td><i class="fa <?= $row->parkir == 1 ? "fa-check text-success" : "fa-times text-danger" ?>"></i><br> Parkir & Tol</td>
                          <td><i class="fa <?= $row->makanan_driver == 1 ? "fa-check text-success" : "fa-times text-danger" ?>"></i><br> Lunch Driver</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <a class="add-to-cart" href="https://api.whatsapp.com/send?phone=<?= $konfigurasi->kontak_person ?>&text=<?= str_replace(' ', '%20', $konfigurasi->pesan_wa) ?>">Pesan Sekarang</a>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>


      </div>
    </div>

    <br><br>
    <center>
      <a href=" <?= base_url('home/penawaran'); ?>" class="btn btn-danger">Selengkapnya <i class="fa fa-angle-right"></i></a>
    </center>
  </div>
</section>
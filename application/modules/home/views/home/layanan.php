<section id="layanan" class="bg-dark py-5">
  <div class="container">
    <div class="row">
      <div class="">
        <center>
          <h2 class="text-white">LAYANAN</h2><br>
        </center>
        <div class="row">


          <?php foreach ($layanan as $row) { ?>

            <div class="col-md-4">
              <div class="row">
                <div class="col-md-3">
                  <img src="<?= base_url($row->icon); ?>" width="100%" alt="">
                </div>
                <div class="col-md-9">
                  <h4><strong class="text-danger"><?= $row->nama_layanan; ?></strong></h4>
                  <p class="text-white"><?= character_limiter($row->deskripsi, '200'); ?></p>
                </div>
              </div>
            </div>

          <?php } ?>


        </div>

      </div>
    </div>
  </div>
</section>
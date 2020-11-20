<section id="contact" class="bg-light">
  <div class="container">
    <div class="row">
      <center>
        <h2>Kontak Kami</h2>
      </center>
    </div>
    <img src="<?= base_url($konfigurasi->logo) ?>" width="300px" alt="">
    <hr>
    <div class="row">

      <div class="col-md-4">
        <p><strong><?= $konfigurasi->nama_perusahaan; ?></strong><br>
          NPWP. <?= $konfigurasi->npwp; ?> <br>
          Alamat : <?= $konfigurasi->alamat; ?> <br>
          Rekening : <?= 'Bank ' . $konfigurasi->nama_bank . ' <br>No. Rekening :' . $konfigurasi->no_rekening . '<br>A.N. ' . $konfigurasi->atas_nama_rekening; ?>
        </p>
      </div>
      <div class="col-md-4">
        Kontak Person : <?= $konfigurasi->kontak_person; ?> <br>
        Email : <?= $konfigurasi->email; ?> <br>
        <a href="<?= base_url('admin/auth'); ?>">Admin Log</a>
      </div>

      <div class="col-md-4">
        <?= $konfigurasi->deskripsi; ?>
      </div>

    </div>
  </div>
</section>
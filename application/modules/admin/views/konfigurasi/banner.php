<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">

      <div class="card shadow mb-4">
        <div class="card-header">
          <h3 class="card-title"><i class="fa fa-cogs"></i> <?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <?php
          echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
          ?>

          <?= form_open_multipart('admin/banner/upload') ?>
          <form action="" method="post">

            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  Banner
                </div>
                <div class="col-md-8">
                  <input type="file" class="form-control" name="banner" required><br>
                  <img src="<?= base_url($konfigurasi->banner); ?>" width="300px" alt="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </div>
            </div>

          </form>
          <?= form_close() ?>



        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
</div>


<script src="<?= base_url('assets/') ?>js/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script>
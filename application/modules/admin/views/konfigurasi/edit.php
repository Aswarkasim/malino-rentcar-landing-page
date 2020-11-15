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

                    <form action="<?= base_url('admin/konfigurasi') ?>" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">Nama Perusahaan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->nama_perusahaan ?>" name="nama_perusahaan" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">Nama Pimpinan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->nama_pimpinan ?>" name="nama_pimpinan" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">Kontak Person</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->kontak_person ?>" name="kontak_person" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->email ?>" name="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">NPWP</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->npwp ?>" name="npwp" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">Nomor Rekening</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->no_rekening ?>" name="no_rekening" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">Nama Bank</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->nama_bank ?>" name="nama_bank" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">Atas Nama Rekening</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->atas_nama_rekening ?>" name="atas_nama_rekening" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="pull-right">Alamat Lengkap</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?= $konfigurasi->alamat ?>" name="alamat" class="form-control">
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



                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
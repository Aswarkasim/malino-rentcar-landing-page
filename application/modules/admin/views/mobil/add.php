<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header">
            <h3 class="card-title"><?= $title ?></h3>
        </div>
        <?php
        echo form_open_multipart($add)
        ?>
        <div class="row">
            <div class="col-md-6">


                <!-- /.card-header -->
                <div class="card-body">
                    <?php
                    echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                    ?>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Merk Mobil</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="merk_mobil" value="<?= set_value('merk_mobil') ?>" placeholder="Merk Mobil" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Harga</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="harga" value="<?= set_value('harga') ?>" placeholder="Harga" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Jumlah Seat</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="seat" value="<?= set_value('seat') ?>" placeholder="Jumlah Seat" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Rentan</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="rentan" class="form-control">
                                    <option value="none">--Rentan--</option>
                                    <option value="Hari">Perhari</option>
                                    <option value="Pekan">Perpekan</option>
                                    <option value="Bulan">Perbulan</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Driver</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="driver" class="form-control">
                                    <option value="none">--Driver--</option>
                                    <option value="Include">Include</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Tipe</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="type" class="form-control">
                                    <option value="none">--Type--</option>
                                    <option value="Manual">Manual</option>
                                    <option value="Matic">Matic</option>
                                    <option value="Semi-matic">Semi-matic</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">BBM</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="bbm" class="form-control">
                                    <option value="none">--BBM--</option>
                                    <option value="1">Include</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Parkir</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="parkir" class="form-control">
                                    <option value="none">--Parkir--</option>
                                    <option value="1">Include</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Tol</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="tol" class="form-control">
                                    <option value="none">--Tol--</option>
                                    <option value="1">Include</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Makanan Driver</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="makanan_driver" class="form-control">
                                    <option value="none">--Makanan Driver--</option>
                                    <option value="1">Include</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>






                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Status</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="is_aktif" class="form-control">
                                    <option value="none">--Status--</option>
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Tampil Sebagai</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="display_as" class="form-control">
                                    <option value="none">--Tampil Sebagai--</option>
                                    <option value="post">Post</option>
                                    <option value="banner">Banner</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Deskripsi</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Gambar</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="file" name="gambar" class="form-control" id="">
                                <span class="">* Gunakan Gambar Latar Putih</span><br>
                                <span class="">* Jika digunakan untuk banner, gunakan gambar tanpa latar berformat png</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <div class="col-md-9">
                    <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambah</button>
                </div>
            </div>
        </div>
        <?= form_close() ?>

    </div>
</div>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<?= form_open_multipart('admin/mobil/edit/' . $mobil->id_mobil) ?>
<form action="" method="POST">

    <div class="container-fluid">
        <div class="car shadow mb-4">
            <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
            </div>


            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                        ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Merk Mobil</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="merk_mobil" value="<?= $mobil->merk_mobil ?>" placeholder="Merk Mobil" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Harga</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="harga" value="<?= $mobil->harga ?>" placeholder="Harga" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Jumlah Seat</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" name="seat" value="<?= $mobil->seat ?>" placeholder="Jumlah Seat" class="form-control">
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
                                        <option value="Hari" <?= ($mobil->rentan == "Hari" ? "selected" : ""); ?>>Perhari</option>
                                        <option value="Pekan" <?= $mobil->rentan == "Pekan" ? "selected" : "" ?>>Perpekan</option>
                                        <option value="Bulan" <?= $mobil->rentan == "Bulan" ? "selected" : ""; ?>>Perbulan</option>
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
                                        <option value="Include" <?= $mobil->driver == "Include" ? "selected" : ""; ?>>Include</option>
                                        <option value="Tidak <?= $mobil->driver == "Tidak" ? "selected" : ""; ?>">Tidak</option>
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
                                        <option value="Manual" <?= $mobil->type == "Manual" ? "selected" : ""; ?>>Manual</option>
                                        <option value="Matic" <?= $mobil->type == "Matic" ? "selected" : ""; ?>>Matic</option>
                                        <option value="Semi-matic" <?= $mobil->type == "Semi-matic" ? "selected" : ""; ?>>Semi-matic</option>
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
                                        <option value="1" <?= $mobil->bbm == "1" ? "selected" : ""; ?>>Include</option>
                                        <option value="0" <?= $mobil->bbm == "0" ? "selected" : ""; ?>>Tidak</option>
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
                                        <option value="1" <?= $mobil->parkir == "1" ? "selected" : ""; ?>>Include</option>
                                        <option value="0" <?= $mobil->parkir == "0" ? "selected" : ""; ?>>Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Tol</label>
                                </div>
                                <div class="col-md-9">
                                    <select required name="tol" class="form-control">
                                        <option value="none">--Tol--</option>
                                        <option value="1" <?= $mobil->tol == "1" ? "selected" : ""; ?>>Include</option>
                                        <option value="0" <?= $mobil->tol == "0" ? "selected" : ""; ?>>Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Lunch Driver</label>
                                </div>
                                <div class="col-md-9">
                                    <select required name="makanan_driver" class="form-control">
                                        <option value="none">--Lunch Driver--</option>
                                        <option value="1" <?= $mobil->makanan_driver == "1" ? "selected" : ""; ?>>Include</option>
                                        <option value="0" <?= $mobil->makanan_driver == "0" ? "selected" : ""; ?>>Tidak</option>
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
                                        <option value="post" <?= $mobil->display_as == "post" ? "selected" : ""; ?>>Post</option>
                                        <option value="banner" <?= $mobil->display_as == "banner" ? "selected" : ""; ?>>Banner</option>
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
                                        <option value="0" <?= $mobil->is_active == "0" ? "selected" : ""; ?>>Tidak Aktif</option>
                                        <option value="1" <?= $mobil->is_active == "1" ? "selected" : ""; ?>>Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Deskripsi</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" id="" cols="30" rows="10">
                                    <?= $mobil->deskripsi; ?>
                                </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Gambar</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="gambar" class="form-control" id="">
                                    <span class="">* Gunakan Gambar Latar Putih</span>
                                    <br>
                                    <img src="<?= base_url($mobil->gambar); ?>" width="150px" alt="">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

<?php form_close() ?>
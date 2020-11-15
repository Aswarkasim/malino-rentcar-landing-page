<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header">
            <h3 class="card-title">Manajemen Mobil</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <p>
                <a href="<?= base_url($add) ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            </p>

            <table class="table DataTable">
                <thead>
                    <tr>
                        <th width="40px">No</th>
                        <th>Nama Mobil</th>
                        <th>Harga</th>
                        <th width="100px">Status</th>
                        <th width="200px">Tindakan</th>
                    </tr>
                </thead>
                <tbody id="targetData">
                    <?php $no = 1;
                    foreach ($mobil as $row) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td>
                                <a href="<?= base_url('admin/mobil/edit/' . $row->id_mobil); ?>"><strong><?= $row->merk_mobil  ?></strong></a><br>
                            </td>
                            <td><?= "Rp. " . nominal($row->harga) . '/' . $row->rentan; ?></td>
                            <td><?php if ($row->is_active == 1) {
                                    echo '<div class="label label-success">Aktif</div>';
                                } else {
                                    echo '<div class="label label-danger">Tidak Aktif</div>';
                                } ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="<?= base_url($edit . $row->id_mobil)  ?>"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger tombol-hapus" href="<?= base_url($delete . $row->id_mobil)  ?>"><i class="fa fa-trash"></i> Hapus</a>


                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
    </div>
</div>


<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('.DataTable').DataTable();
    });
</script>
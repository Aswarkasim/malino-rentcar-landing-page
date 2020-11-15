<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header">
            <h3 class="card-title">Manajemen User</h3>
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
                        <th>Nama</th>
                        <th width="100px">Status</th>
                        <th width="200px">Tindakan</th>
                    </tr>
                </thead>
                <tbody id="targetData">
                    <?php $no = 1;
                    foreach ($user as $row) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td>
                                <strong><?= $row->nama_user ?></strong><br>
                                <p><?= $row->email ?> - <?= $row->role ?></p>
                            </td>
                            <td><?php if ($row->is_active == 1) {
                                    echo '<div class="label label-success">Aktif</div>';
                                } else {
                                    echo '<div class="label label-danger">Tidak Aktif</div>';
                                } ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="<?= base_url($edit . $row->id_user)  ?>"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger tombol-hapus" href="<?= base_url($delete . $row->id_user)  ?>"><i class="fa fa-trash"></i> Hapus</a>


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
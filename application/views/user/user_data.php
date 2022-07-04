<!-- Main content -->

<ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-users text-black-50"></i> Setting User</a></li>
       
        </li>
</ol>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 bg-white">
        
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-secondary">Data Users</h6>
    <a href="<?= site_url('user/add') ?>" class="d-none d-sm-inline-block btn btn-l btn-primary shadow-m radius"><i class="fas fa-plus fa-sm text-white-50"></i>  Tambah User</a>
</div>
    </div>
    <div class="card-body text-secondary">
        <div class="table-responsive">
            <?php $this->view('massage') ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Departemen</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->username ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->departemen ?></td>
                            <td><?= $data->level == 1 ? "Kepala Divisi" : "Kepala Seksi" ?></td>
                            <td class="text-center" width="180px">
                                <a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pen"></i> Edit
                                </a>
                                <a href="<?= site_url('user/del/' . $data->user_id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda Yakin untuk menghapus data ???')">
                                    <i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </section>
<?php if ($this->session->userdata('level') == 1) { ?>
    <section class="content-header">
        <div>
    <ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-book text-black-50"></i> Data Masuk</a></li>
       
        </li>
</ol>
        
    <!-- DataTales Example -->
    <div class="card shadow mb-4 radius">\
    <div class="card-header py-3 bg-white text-black-50">
        <div class="d-sm-flex justify-content-between mb-4">
        <h3>Pengunjung Data Center Peruri</h3>
        <a class="d-none d-sm-inline-block btn btn-outline-primary shadow-sm" data-toggle="modal" data-target="#cetakpdf">
            <i class="fa fa-print"></i> Cetak PDF
        </a>
    </div>
    </div>
        <div class="card-body bg-white text-black-50 rounded">
        <div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label>Pilih Status</label>
						<select class="form-control jenis_kelamin" name="status">
							<option>-- Pilih --</option>
							<option value="Menunggu Persetujuan Kadep">Menunggu Persetujuan Kadep</option>
							<option value="Tidak Setuju">Tidak Setuju</option>
                            <option value="Setuju">Setuju</option>
						</select>
					</div>
				</div>
			</div>
		</div>
            <div class="table-responsive">
                <?php $this->view('massage') ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Nama visitor</th>
                            <th>Unit Kerja</th>
                            <th>pendamping</th>
                            <th>Tujuan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_masuk_kadev as $dm) : ?>
                            <tr>
                                <td><?= $no++; ?>.</td>
                                <td><?php echo $dm->tanggal; ?></td>
                                <td><?php echo $dm->nama_visitor; ?></td>
                                <td><?php echo $dm->unit_kerja; ?></td>
                                <td><?php echo $dm->pendamping; ?></td>
                                <td><?php echo $dm->tujuan; ?></td>
                                <td>
                                    <?php echo $dm->status  == 0 ? '<button class="btn btn-warning btn-rounded" style="font-size:12px;">Menunggu Persetujuan Kadep</button>' : null ?>
                                    <?php echo $dm->status  == 1 ? '<button class="btn btn-success btn-rounded" style="font-size:12px;">Setuju</button>' : null ?>
                                    <?php echo $dm->status  == 2 ? '<button class="btn btn-danger btn-rounded" style="font-size:12px;">Tidak Setuju</button>' : null ?></td>
                                <td class="text-center" width=100>
                                    <a href="<?= site_url('Data_masuk/detail/' . $dm->id) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus">
                                        <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  text-gray-800">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are ready to Delete.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="<?= site_url('Data_masuk/del/' . $dm->id) ?>" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php } else if ($this->session->userdata('level') != 1) { ?>
    <!-- Main content -->
    <section class="content-header">
        <div>
    <ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-book text-black-50"></i>  Data Masuk </a></li>
       
        </li>
</ol>
        
    <!-- DataTales Example -->
    <div class="card shadow mb-4 radius">
    <div class="card-header py-3 bg-white text-black-50">
        <div class="d-sm-flex justify-content-between mb-4">
        <h3>Pengunjung Data Center Peruri</h3>
        <a class="d-none d-sm-inline-block btn btn-outline-primary shadow-sm" data-toggle="modal" data-target="#cetakpdf">
            <i class="fa fa-print"></i> Cetak PDF
        </a>
    </div>
    </div>
        <div class="card-body bg-white  text-black-50 rounded">
            <div class="table-responsive">
                <?php $this->view('massage') ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Nama visitor</th>
                            <th>Unit Kerja</th>
                            <th>pendamping</th>
                            <th>tujuan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_masuk as $dk) : ?>
                            <tr>
                                <td><?= $no++; ?>.</td>
                                <td><?php echo $dk->tanggal; ?></td>
                                <td><?php echo $dk->nama_visitor; ?></td>
                                <td><?php echo $dk->unit_kerja; ?></td>
                                <td><?php echo $dk->pendamping; ?></td>
                                <td><?php echo $dk->tujuan; ?></td>
                                <td>
                                    <?php echo $dk->status_kasek  == 0 ? '<button class="btn btn-warning btn-rounded" style="font-size:12px;">Menunggu Persetujuan Kasek</button>' : null ?>
                                    <?php echo $dk->status_kasek  == 1 ? '<button class="btn btn-success btn-rounded" style="font-size:12px;">Menunggu Persetujuan Kadep</button>' : null ?>
                                    <?php echo $dk->status_kasek  == 2 ? '<button class="btn btn-danger btn-rounded" style="font-size:12px;">Tidak Setuju</button>' : null ?></td>
                                <td class="text-center" width=100>
                                    <a href="<?= site_url('Data_masuk/detail/' . $dk->id) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapusModal">
                                        <i class="fa fa-trash"></i></a>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-gray-800">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are ready to Delete.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="<?= site_url('Data_masuk/del/' . $dk->id) ?>" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Ubah -->
<div id="cetakpdf" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content text-gray-800">
            <div class="modal-header">
                <h4 class="modal-title">Print Data Tamu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <div class="modal-body">
                <form action="<?= site_url('Data_masuk/pdf') ?>" method="post" target="_blank">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">Dari Tanggal</div>
                            </td>
                            <td align="center" width="5%">
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tgl_a" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">Sampai Tanggal</div>
                            </td>
                            <td align="center" width="5%">
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tgl_b" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="cetakpdf" class="btn btn-primary btn-sm" value="cetak">
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="modal-footer">
                    <a href="<?= site_url('Data_masuk/print') ?>" target="_blank" class="btn btn-primary btn-sm">Cetak Semua Data</a>
                </div>
            </div>
        </div>
    </div>

                        </div>
                        <script type="text/javascript">
	$(document).ready(function() {
	    $('#tabelData').DataTable();
	    function filterData () {
		    $('#tabelData').DataTable().search(
		        $('.status').val()
		    	).draw();
		}
		$('.status').on('change', function () {
	        filterData();
	    });
	});
</script>

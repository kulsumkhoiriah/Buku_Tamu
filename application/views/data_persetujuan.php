<?php if ($this->session->userdata('level') == 1) { ?>
    <section class="content-header">
    <ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-book text-black-50"></i> Data Persetujuan</a></li>
       
        </li>
</ol>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body bg-white text-black-50 rounded">
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
                            <th>Action</th>

                        </tr>
                    </thead><?php $no = 1;
                            $approvekdv = $this->db->query("SELECT * FROM form_tamu WHERE status_kasek='1'and status='0' ORDER BY tanggal DESC");
                            foreach ($approvekdv->result()  as $approve) {
                                $status = "<span style='font-size:10;' class='label label-success'>Telah Disetujui</span>";
                                if ($approve->status == '0') $status = "";
                                else if ($approve->status == '2') $status = "<span style='font-size:10;' class='label label-danger'>Ditolak</span>";
                            ?>
                        <tr>
                            <td><?= $no++; ?>.</td>
                            <td><?php echo $approve->tanggal ?></td>
                            <td><?php echo $approve->nama_visitor ?></td>
                            <td><?php echo $approve->unit_kerja ?></td>
                            <td><?php echo $approve->pendamping ?></td>
                            <td><?php echo $approve->tujuan ?></td>
                            <td align="center"><?php echo $status ?>
                            <a href='disetujui/$approve->id' class='btn btn-success' data-popup='tooltip' data-placement='top' title='Disetujui' data-toggle='modal' data-target='#setuju<?= $approve->id ?>'><i class='fa fa-check' aria-hidden='true'></i></a>
                    
                            <a href='' class='btn btn-danger'   data-popup='tooltip' data-placement='top' title='Ditolak' data-toggle='modal' data-target='#alasan<?= $approve->id ?>'><i class='fa fa-times' aria-hidden='true' ></i></a>
                    
                                <a href="<?= site_url('Data_masuk/detail/' . $approve->id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php
                            }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </div>
    </section>
    </div>
    <?php
                foreach ($approvekdv->result()  as $approve) { ?>
    <div class="modal fade" id="setuju<?= $approve->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  text-gray-800">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Approve?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda  yakin untuk setuju ???</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="<?= site_url('Data_masuk/disetujui/' .$approve->id) ?>" class="btn btn-primary">Setuju</a>
                </div>
            </div>
        </div>
    </div><?php
                }
                ?>
<?php } else if ($this->session->userdata('level') != 1) { ?>
    <section class="content-header">
    <ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-book text-black-50"></i> Data Persetujuan</a></li>
       
        </li>
</ol>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body bg-white text-black-50 rounded">
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
                            
                            <th>Action</th>
                        </tr>
                    </thead><?php $no = 1;
                            $approvekdv = $this->db->query("SELECT * FROM form_tamu WHERE status_kasek='0' ORDER BY tanggal DESC");
                            foreach ($approvekdv->result()  as $approve) {
                                $status = "<span style='font-size:10;' class='label label-success'>Telah Disetujui</span>";
                                if ($approve->status_kasek == '0') $status_kasek = "
                ";
                                else if ($approve->status_kasek == '2') $status_kasek = "<span style='font-size:10;' class='label label-danger'>Ditolak</span>";

                            ?>
                        
                        <tr>
                            <td><?= $no++; ?>.</td>
                            <td><?php echo $approve->tanggal ?></td>
                            <td><?php echo $approve->nama_visitor ?></td>
                            <td><?php echo $approve->unit_kerja ?></td>
                            <td><?php echo $approve->pendamping ?></td>
                            <td><?php echo $approve->tujuan ?></td>
                            <td><?php echo $status_kasek ?>
                            <a href='disetujui_kasek/$approve->id' class='btn btn-success ' data-popup='tooltip' data-placement='top' title='Disetujui' data-toggle='modal' data-target='#setuju_kasek<?= $approve->id ?>'><i class='fa fa-check' aria-hidden='true' capitalize></i></a>
                            <a href='' class='btn btn-danger '   data-popup='tooltip' data-placement='top' title='Ditolak'data-toggle='modal' data-target='#alasan_kasek<?= $approve->id ?>'><i class='fa fa-times' aria-hidden='true' ></i></a>
                                <a href="<?= site_url('Data_masuk/detail/' . $approve->id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-eye"></i></a>
                            </td>

                        </tr> 
                    <?php
                            }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </div>
    </section>
    </div>
<?php } ?>
<?php
                foreach ($approvekdv->result()  as $approve) { ?>
    <div class="modal fade" id="setuju_kasek<?= $approve->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  text-gray-800">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Approve?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda Yakin untuk Setuju ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="<?= site_url('Data_masuk/disetujui_kasek/' .$approve->id) ?>" class="btn btn-primary">Setuju</a>
                </div>
            </div>
        </div>
    </div><?php
                }
                ?>
<?php
                foreach ($approvekdv->result()  as $approve) { ?>
<div id="alasan<?= $approve->id ?>" class="modal fade" role="dialog">
    <div class="modal-dialog text-gray-800">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Note</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <form action="<?= site_url('Data_masuk/alasan') ?>" method="post">
                    <table>

                        <tr>
                            <td>
                                <div class="form-group">Alasan Ditolak</div>
                            </td>
                            <td align="center" width="5%">
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" value="<?= $approve->id ?>">
                                    <input type="text" class="form-control" name="alasan">
                                    <input type="hidden" class="form-control" name="status" value="2">
                                </div>
                            </td>
                        </tr>
                    </table>
               
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php
                }
                ?>
<?php
                foreach ($approvekdv->result()  as $approve) { ?>
<div id="alasan_kasek<?= $approve->id ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content text-gray-800">
            <div class="modal-header">
                <h4 class="modal-title">Note</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
            </div>
            
            <div class="modal-body">
                <form action="<?= site_url('Data_masuk/alasan_kasek') ?>" method="post">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">Alasan Ditolak</div>
                            </td>
                            <td align="center" width="5%">
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" value="<?= $approve->id ?>">
                                    <input type="text" class="form-control" name="alasan">
                                    <input type="hidden" class="form-control" name="status_kasek" value="2">
                                </div>
                            </td>
                        </tr>
                    </table>
               
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                </div>
            </div>
            </form>
        </div>
                </div></div><?php
                }
                ?>
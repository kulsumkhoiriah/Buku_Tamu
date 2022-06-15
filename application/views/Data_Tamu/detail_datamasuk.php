<?php if ($this->session->userdata('level') == 1) { ?>
    <section class="content-header">
    </section>
    <!-- Main content -->
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <center><h4 class="m-0 font-weight-bold text-primary">Detail Tamu</h4></center>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>Nama Visitor</td>
                        <td>:</td>
                        <td><?php echo $detail->nama_visitor ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><?php echo $detail->tanggal ?></td>
                    </tr>
                    <tr>
                        <td>Nomer Telepon</td>
                        <td>:</td>
                        <td><?php echo $detail->nomor_telepon ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $detail->email ?></td>
                    </tr>
                    <tr>
                        <td>Unit Kerja</td>
                        <td>:</td>
                        <td><?php echo $detail->unit_kerja ?></td>
                    </tr>
                    <tr>
                        <td>Pendamping</td>
                        <td>:</td>
                        <td><?php echo $detail->pendamping ?></td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><?php echo $detail->tujuan ?></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?php echo $detail->keterangan ?></td>
                    </tr>
                    <tr>
                        <td>Time in</td>
                        <td>:</td>
                        <td><?php echo $detail->time_in ?></td>
                    </tr>
                    <tr>
                        <td>Time Out</td>
                        <td>:</td>
                        <td><?php echo $detail->time_out ?></td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><img src="<?php echo $detail->foto ?>" width="150px" height="200px"/></td>
                    </tr>
                    <tr>
                        <td>Tanda Tangan</td>
                        <td>:</td>
                        <td><img src="<?php echo $detail->signed ?>" class="sign-priview" /></td>
                    </tr>
                    
                    <tr>
                        <td>Kartu Tanda Pengenal</td>
                        <td>:</td>
                        <td><img src="<?php echo base_url(); ?>assets/tanda_pengenal/<?php echo $detail->nik; ?>" width="200px" height="100px"></img></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            <?php echo $detail->status  == 0 ? '<button class="btn btn-warning btn-rounded" style="font-size:13px;">Menunggu Persetujuan</button>' : null ?>
                            <?php echo $detail->status  == 1 ? '<button class="btn btn-success btn-rounded" style="font-size:13px;">Setuju</button>' : null ?>
                            <?php echo $detail->status  == 2 ? '<button class="btn btn-danger btn-rounded" style="font-size:13px;">Tidak Setuju</button>' : null ?>
                    </tr>
                </table>
            </div>

            </section>
        <?php } else if ($this->session->userdata('level') != 1) { ?>
            <section class="content-header">
              

            </section>
            <!-- Main content -->
            <div class="card shadow mb-4">
                <div class="card-header py-4">
                <center><h4 class="m-0 font-weight-bold text-primary">Detail Tamu</h4></center>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Nama Visitor</td>
                                <td>:</td>
                                <td><?php echo $detail->nama_visitor ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><?php echo $detail->tanggal ?></td>
                            </tr>
                            <tr>
                                <td>Nomor Telepon</td>
                                <td>:</td>
                                <td><?php echo $detail->nomor_telepon ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $detail->email ?></td>
                            </tr>
                            <tr>
                                <td>Unit Kerja</td>
                                <td>:</td>
                                <td><?php echo $detail->unit_kerja ?></td>
                            </tr>
                            <tr>
                                <td>Pendamping</td>
                                <td>:</td>
                                <td><?php echo $detail->pendamping ?></td>
                            </tr>
                            <tr>
                                <td>Tujuan</td>
                                <td>:</td>
                                <td><?php echo $detail->tujuan ?></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>:</td>
                                <td><?php echo $detail->keterangan ?></td>
                            </tr>
                            <tr>
                                <td>Time In</td>
                                <td>:</td>
                                <td><?php echo $detail->time_in ?></td>
                            </tr>
                            <tr>
                                <td>Time Out</td>
                                <td>:</td>
                                <td><?php echo $detail->time_out ?></td>
                            </tr>
                            <tr>
                                <td>Tanda Tangan</td>
                                <td>:</td>
                                <td><img src="<?php echo $detail->signed ?>" class="sign-priview" /></td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td>:</td>
                                <td><img src="<?php echo $detail->foto ?>" width="150px" height="200px"/></td>
                            </tr>
                            <tr>
                                <td>Kartu Tanda Pengenal</td>
                                <td>:</td>
                                <td><img src="<?php echo base_url(); ?>assets/tanda_pengenal/<?php echo $detail->nik; ?>" width="200px" height="100px"></img></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    <?php echo $detail->status_kasek  == 0 ? '<button class="btn btn-warning btn-rounded" style="font-size:12px;">Menunggu Persetujuan</button>' : null ?>
                                    <?php echo $detail->status_kasek  == 1 ? '<button class="btn btn-success btn-rounded" style="font-size:12px;">Setuju</button>' : null ?>
                                    <?php echo $detail->status_kasek  == 2 ? '<button class="btn btn-danger btn-rounded" style="font-size:12px;">Tidak Setuju</button>' : null ?>
                            </tr>
                        </table>
                    </div>
                    </section>
                <?php } ?>
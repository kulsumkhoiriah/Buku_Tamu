<?php if ($this->session->userdata('level') == 1) { ?>
    <section class="content-header">
    </section>
    <!-- Main content -->
    <div class="card shadow mb-4">
        <div class="card-header py-4 bg-navy">
            <center>
                <h4 class="m-0 font-weight-bold text-white">Detail Tamu</h4>
            </center>
        </div>
        <div class="container">
        <div class="card-group">
            <div class="card text-dark ">
                <div class="card-body ml-5">
                    <table class="table table-borderless align-content-lg-center">
                        <tr>

                            <td align="center">
                                <h2><a class="text-gray-800"><i><?php echo $detail->nama_visitor ?></i></a></h2>
                            </td>
                        </tr>
                        <tr>
                            <td align="center"><img class="img-thumbnail" src="<?php echo $detail->foto ?>" width="150px" height="200px" /></td>
                        </tr>
                        <tr rowspan="3">
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><b>Nomer Telepon</b></td>

                        </tr>
                        <tr>
                            <td><input type="text" value="<?php echo $detail->nomor_telepon ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                        </tr>
                        <tr>
                            <td><input type="text" value="<?php echo $detail->email ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Unit Kerja</b></td>
                        </tr>
                        <tr>
                            <td><input type="text" value="<?php echo $detail->unit_kerja ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Kartu Tanda Pengenal</b></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo base_url(); ?>assets/tanda_pengenal/<?php echo $detail->nik; ?>" class="img-fluid"></img></td>
                        </tr>
                    </table>
                </div>
            </div></div>
            <div class="card">
                <div class="card-body text-dark ">
                    <table class="table table-borderless text-black-50">
                        <tr>
                            <td><b>Tanggal</b></td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="text" value="<?php echo $detail->tanggal ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Pendamping</b></td>

                        </tr>
                        <tr>
                            <td colspan="3"><input type="text" value="<?php echo $detail->pendamping ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Tujuan</b></td>

                        </tr>
                        <tr>
                            <td colspan="3"><input type="text" value="<?php echo $detail->tujuan ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Keterangan</b></td>

                        </tr>
                        <tr>
                            <td colspan="3"><input type="text" value="<?php echo $detail->keterangan ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Time in (Estimasi)</b></td>
                            <td>:</td>
                            <td><input type="text" value="<?php echo $detail->time_in ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Time Out (Estimasi)</b></td>
                            <td>:</td>
                            <td colspan="3"><input type="text" value="<?php echo $detail->time_out ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Time in (Aktual)</b></td>
                            <td>:</td>
                            <td><input type="text" value="<?php echo $detail->time_in_aktual ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Time Out (Aktual)</b></td>
                            <td>:</td>
                            <td colspan="3"><input type="text" value="<?php echo $detail->time_out_aktual ?>" class="form-control form-rounded" readonly></td>
                        </tr>
                        <tr>
                            <td><b>Tanda Tangan</td>
                            <td>:</td>
                            <td><img src="<?php echo $detail->signed ?>" class="sign-priview" /></td>
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
                    <div class="card-header py-4 bg-navy">
                        <center>
                            <h4 class="m-0 font-weight-bold text-white">Detail Tamu</h4>
                        </center>
                    </div>
                    <div class="card-group">
                        <div class="card text-dark ">
                            <div class="card-body ml-5">
                                <table class="table table-borderless ">
                                    <tr>

                                        <td colspan="3" align="center">
                                            <h2><a class="text-gray-800"><i><?php echo $detail->nama_visitor ?></i></a></h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="center"><img class="img-thumbnail" src="<?php echo $detail->foto ?>" width="150px" height="200px" /></td>
                                    </tr>
                                    <tr rowspan="3">
                                        <td colspan="3"><br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>Nomer Telepon</b></td>

                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->nomor_telepon ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>Email</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->email ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>Unit Kerja</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->unit_kerja ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Kartu Tanda Pengenal</b></td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo base_url(); ?>assets/tanda_pengenal/<?php echo $detail->nik; ?>" class="img-fluid"></img></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-dark ">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><b>Tanggal</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->tanggal ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Pendamping</b></td>

                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->pendamping ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Tujuan</b></td>

                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->tujuan ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Keterangan</b></td>

                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->keterangan ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Time in (Estimasi)</b></td>
                                        <td>:</td>
                                        <td><input type="text" value="<?php echo $detail->time_in ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Time Out (Estimasi)</b></td>
                                        <td>:</td>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->time_out ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Time in (Aktual)</b></td>
                                        <td>:</td>
                                        <td><input type="text" value="<?php echo $detail->time_in_aktual ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Time Out (Aktual)</b></td>
                                        <td>:</td>
                                        <td colspan="3"><input type="text" value="<?php echo $detail->time_out_aktual ?>" class="form-control form-rounded" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><b>Tanda Tangan</td>
                                        <td>:</td>
                                        <td><img src="<?php echo $detail->signed ?>" class="sign-priview" /></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            <?php echo $detail->status_kasek  == 0 ? '<button class="btn btn-warning btn-rounded" style="font-size:13px;">Menunggu Persetujuan</button>' : null ?>
                                            <?php echo $detail->status_kasek  == 1 ? '<button class="btn btn-success btn-rounded" style="font-size:13px;">Setuju</button>' : null ?>
                                            <?php echo $detail->status_kasek  == 2 ? '<button class="btn btn-danger btn-rounded" style="font-size:13px;">Tidak Setuju</button>' : null ?>
                                    </tr>
                                </table>
                            </div>
                            </section>
                        <?php } ?>
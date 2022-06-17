<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style_1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.signature.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.ui.touch-punch.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/jquery.signature.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

</head>

<body class="img" style="background-image: url('<?= base_url() ?>assets/img/bg.jpg');">
    <div class="container-fluid">
        <div class="row">
            <div class="card col-md-8 bg-white offset-md-2  rounded-lg ">
                <?php echo form_open_multipart('form_tamu/savedata') ?>
                <div>
                    <center>
                        <h3 class="mt-3" style="font-family: 'EB Garamond', serif;"> Form Kunjungan </h3>
                        <h5 style="font-family: 'EB Garamond', serif;">Data Center Peruri</h5>
                    </center>
                    <hr>
                    <br>

                </div>
                <?php $this->view('massage') ?>

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                            <input type="date" class="form_rounded" placeholder="Date" name="tanggal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Nama Visitor</label>
                        <div class="col-sm-7">
                            <input type="text" class="form_rounded" placeholder="Masukan Nama Visitor" name="nama_visitor">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-7">
                            <input type="text" class="form_rounded" placeholder="Masukan Nomor Telepon" name="nomor_telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form_rounded" placeholder="Masukan Email" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Perusahaan / Unit Kerja</label>
                        <div class="col-sm-7">
                            <input type="text" class="form_rounded" placeholder="Masukan Perusahaan / Unit Kerja" name="unit_kerja">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Pendamping</label>
                        <div class="col-sm-7">
                            <input type="text" class="form_rounded" placeholder="Masukan Nama Pendamping" name="pendamping">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Tujuan Kunjungan</label>
                        <div class="col-sm-7">
                            <textarea name="tujuan"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-7">
                            <textarea name="keterangan"></textarea>
                        </div>
                    </div>
                    <div class=" form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Time in</label>
                        <div class="col-sm-3">
                            <input type="time" class="form_rounded" name="time_in">
                        </div>
                    </div>
                    <div class=" form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Time out (Estimasi)</label>
                        <div class="col-sm-3">
                            <input type="time" class="form_rounded" name="time_out">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Tanda Tangan</label>
                        <div class="col-sm-7">
                            <div id="sig"></div><br><button id="clear" class="btn btn-outline-danger">Clear</button>
                            <textarea id="signature64" name="signed" style="display: none;"> </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Kartu Tanda Pengenal</label>
                        <div class="col-sm-7">
                            <input type="file" class="form_rounded" name="nik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-7">
                            <div id="live_camera"></div>
                            <hr />
                            <input type=button class="btn btn-outline-primary " value="Take Snapshot" onClick="capture_web_snapshot()"> <a class="btn btn-outline-danger" data-toggle="modal" data-target="#foto">Lihat Foto</a>

                            <input type="hidden" name="foto" class="foto-tag"><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-5">
                            <input type="submit" class="btn btn-primary" name="save" value="Save Data" />
                            <button type="reset" class="btn btn-secondary"> Cancel </button>
                        </div>
                    </div>
                </div>
            </div> <?php echo form_close(); ?>
        </div>
</body>

<div id="foto" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ambil Gambar </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">

                <table>
                    <tr>

                        <td>
                            <div id="preview">

                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    var sig = $('#sig').signature({
        syncField: '#signature64',
        syncFormat: 'PNG'
    });
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>

<script language="JavaScript">
    Webcam.set({
        width: 250,
        height: 300,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

    Webcam.attach('#live_camera');

    function capture_web_snapshot() {
        Webcam.snap(function(site_url) {
            $(".foto-tag").val(site_url);
            document.getElementById('preview').innerHTML = '<img src="' + site_url + '"/>';
        });
    }
</script>

</html>
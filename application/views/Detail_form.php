<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style_1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
</head>

<body class="bg-light">

    <?php if (empty($keyword)) { ?>
        <div class="container-fluid ">
            <div class=" row mt-5 mr-8">
                <div class="col-md-8  bg-gradient-primary text-white offset-md-2 rounded-lg  ">
                    <center>
                        <h3 class="mt-3" style="font-family: 'EB Garamond', serif;"> Detail Form Kunjungan </h3>
                        <h5 style="font-family: 'EB Garamond', serif;">Data Center Peruri</h5>
                    </center>
                    <br>
                    <hr color="white">

                    <div class="row">
                        <div class="col">
                            <div class="card-body text-white ">
                                <form action="<?= base_url('form_tamu/search') ?>" method="get">
                                    <div>
                                        <table class="table table-borderless text-white">
                                            <h5><b>Silahkan Masukan Nama dan Tanggal ..... !!!</b></h5>
                                            </p>
                                            <tr>
                                                <td>Masukan Nama</td>
                                                <td>:</td>
                                                <td> <input type="text" class="form_rounded" name="keyword" placeholder="Masukan Kata Nama..." required></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal</td>
                                                <td>:</td>
                                                <td><input type="date" class="form_rounded" name="keyword2" required></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td align="right"><button class="btn btn-outline-danger" type="submit"><i class="fa fa-search"> Cari</i></button></td>
                                            </tr>
                                            </center>
                                        </table>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php } else if (!empty($keyword)) { ?>
            <?php foreach ($data as $detail) { ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 d-flex justify-content-center rounded-lg  ">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body">
                                        <table class="table table-borderless text-black ">
                                            <tr>

                                                <td align="center" colspan="3">
                                                    <h2><a class="text-black"><i><?php echo $detail->nama_visitor ?></i></a></h2>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="3"><img class="img-thumbnail" src="<?php echo $detail->foto ?>" width="150px" height="200px" /></td>
                                            </tr>
                                            <tr rowspan="3">
                                                <td><br></td>
                                            </tr>
                                            <tr>
                                                <td><b>Nomer Telepon</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->nomor_telepon ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Email</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->email ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Unit Kerja</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->unit_kerja ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Tanggal</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->tanggal ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Pendamping</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->pendamping ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Tujuan</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->tujuan ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Keterangan</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->keterangan ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Time in (Estmasi)</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->time_in ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Time Out (Estimasi)</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->time_out ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Time in (Aktual)</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->time_in_aktual ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Time Out (Aktual)</b></td>
                                                <td>:</td>
                                                <td><input type="text" value="<?php echo $detail->time_out_aktual ?>" class="form_rounded" readonly></td>
                                            </tr>
                                            <tr>
                                                <td><b>Tanda Tangan</td>
                                                <td>:</td>
                                                <td><img src="<?php echo $detail->signed ?>" class=" img-thumbnail" /></td>
                                            </tr>
                                            <tr>
                                                <td><b>QR Code</td>
                                                <td>:</td>
                                                <td><img src="<?php
                                                                $kode = "$detail->id";
                                                                $folder = "././assets/code/";
                                                                require_once('assets/qrcode/qrlib.php');
                                                                QRcode::png("$kode", "$folder" . $detail->id . ".png", "l", 4.4);
                                                                ?>">
                                                    <img src="<?= base_url() ?>assets/code/<?= $detail->id ?>.png" alt=""></img>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Kartu Tanda Pengenal</b></td>
                                                <td>:</td>
                                                <td><img src="<?php echo base_url(); ?>assets/tanda_pengenal/<?php echo $detail->nik; ?>" class="img-thumbnail" width="200" height="100"></img></td>

                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>
                                                    <?php
                                                    if ($detail->status_kasek  == 1 && $detail->status  == 0) {
                                                        echo '<mark style="background-color:Orange;">Menunggu Persetujuan Kadep</mark>';
                                                    } else if ($detail->status_kasek  == 2) {
                                                        echo '<mark style="background-color:red"> Tidak Disetujui</mark>   Note : ';
                                                        echo $detail->alasan;
                                                    } elseif ($detail->status_kasek  == 1 && $detail->status  == 1) {
                                                        echo '<mark style="background-color:green;">Setuju</mark>';
                                                    } elseif ($detail->status_kasek  == 1 && $detail->status  == 2) {
                                                        echo '<mark style="background-color:red;">Tidak Disetujui</mark>   Note : ';
                                                        echo $detail->alasan;
                                                    } else {
                                                        echo '<mark style="background-color:yellow;">Menunggu Persetujuan Kasek</mark>';
                                                    }
                                                    ?>
                                            </tr>
                                        </table>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            </table>
                            </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>
</form>

</html>
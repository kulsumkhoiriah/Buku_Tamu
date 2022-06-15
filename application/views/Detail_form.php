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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
</head>

<body class="img" style="background-image: url('<?= base_url() ?>assets/img/bg.jpg');">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 bg-white offset-md-2  rounded-lg ">
                <div>
                    <center>
                        <h3 class="mt-3" style="font-family: 'EB Garamond', serif;"> Detail Form Kunjungan </h3>
                        <h5 style="font-family: 'EB Garamond', serif;">Data Center Peruri</h5>
                    </center>
                    <br>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <form action="<?= base_url('form_tamu/search') ?>" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keyword" placeholder="Masukan Kata Nama...">
                                    <input type="date" class="form-control" name="keyword2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Cari</button>
                                    </span>
                                    <br><br>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <center>
                                        <br><br>
                                        <h3>Data Tamu</h3><br>
                                        <?php if (!empty($keyword)) { ?>
                                            <p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>" dan "<?= $keyword2; ?>"</b></p>
                                            <?php foreach ($data as $detail) { ?>
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
                                                    <td>Departemen</td>
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
                                                    <td>Tanda Tangan</td>
                                                    <td>:</td>
                                                    <td><img src="<?php echo $detail->signed ?>" class="sign-priview" width="100px" height="100px" /></td>
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
                                                    <td>NIK</td>
                                                    <td>:</td>
                                                    <td><img src="<?php echo base_url(); ?>assets/tanda_pengenal/<?php echo $detail->nik; ?>" width="100px" height="100px"></img></td>
                                                </tr>
                                                <tr>
                                                    <td>Foto diri</td>
                                                    <td>:</td>
                                                    <td><img src="<?php echo $detail->foto ?>" class="priview" width="100px" height="100px" /></td>
                                                </tr>
                                                <tr></tr>
                                                <td>QR Code</td>
                                                <td>:</td>
                                                <td>
                                                    <?php
                                                    $kode = "$detail->id";
                                                    require_once('assets/qrcode/qrlib.php');
                                                    QRcode::png("$kode", "kode" . $detail->id . ".png", "l", 4.4);
                                                    ?>
                                                    <img src="<?= base_url() ?>kode<?= $detail->id ?>.png" alt=""></img>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>:</td>
                                                    <td><?php
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
                                            <?php } ?>
                                </table>
                            <?php } else if (empty($keyword)) { ?>
                                <p style="color:red"><b>Silahkan Masukan Nama dan Tanggal</b></p>
                            <?php } ?>
                            </center>
                            </div>
                        </div>
                    </div>
</body>
</form>

</html>
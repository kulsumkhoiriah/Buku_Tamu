<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
    <style>
        table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            font-size: 9px;
            align-items: center;
        }

        table td,
        #table th {
            border: 1px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            text-align: left;
            background-color: black;
            color: white;
        }

        p {
            text-align: center;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php if ($this->session->userdata('level') == 1) { ?>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <body>

        <div class="box-header">
            
                <p align="center">Perum Percetakan Uang Republik Indonesia <br>
                    Laporan Pengunjung Data Center<br>
                </p>
            <hr>
        </div>
        <table class="table" cellspacing=0 cellpadding=0>
            <thead class="text-center">
                <th>#</th>
                <th>Tanggal</th>
                <th>Nama visitor</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Unit Kerja</th>
                <th>Pendamping</th>
                <th>Tujuan</th>
                <th>Tanda Tangan</th>
                <th>Keterangan</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data_masuk_kadev as $dk) : ?>
                    <tr>
                        <td><?= $no++; ?>.</td>
                        <td><?php echo $dk->tanggal; ?></td>
                        <td><?php echo $dk->nama_visitor; ?></td>
                        <td><?php echo $dk->nomor_telepon; ?></td>
                        <td><?php echo $dk->email; ?></td>
                        <td><?php echo $dk->unit_kerja; ?></td>
                        <td><?php echo $dk->pendamping; ?></td>
                        <td><?php echo $dk->tujuan; ?></td>
                        <td><?php echo $dk->keterangan; ?></td>
                        <td><?php echo $dk->time_in; ?></td>
                        <td><?php echo $dk->time_out; ?></td>
                        <td><img src="<?php echo $dk->signed ?>" class="sign-priview" width="70" /></td>
                        <td>
                            <?php echo $dk->status  == 0 ? '<button class="btn btn-warning btn-rounded" style="font-size:9px;">Menunggu Persetujuan</button>' : null ?>
                            <?php echo $dk->status  == 1 ? '<button class="btn btn-success btn-rounded" style="font-size:9px;">Setuju</button>' : null ?>
                            <?php echo $dk->status  == 2 ? '<button class="btn btn-danger btn-rounded" style="font-size:9px;">Tidak Setuju</button>' : null ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </body>

    </html>
<?php } else if ($this->session->userdata('level') != 1) { ?>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <body>
        <div class="box-header">
                <p align="center">Perum Percetakan Uang Republik Indonesia <br>
                    Laporan Pengunjung Data Center<br>
                </p>
            <hr>
        </div>
        <table class="table" cellspacing=0 cellpadding=0>
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>Tanggal</th>
                    <th>Nama visitor</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Unit Kerja</th>
                    <th>Pendamping</th>
                    <th>Tujuan</th>
                    <th>Keterangan</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                    <th>Tanda Tangan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data_masuk as $dk) : ?>
                    <tr>
                        <td><?= $no++; ?>.</td>
                        <td><?php echo $dk->tanggal; ?></td>
                        <td><?php echo $dk->nama_visitor; ?></td>
                        <td><?php echo $dk->nomor_telepon; ?></td>
                        <td><?php echo $dk->email; ?></td>
                        <td><?php echo $dk->unit_kerja; ?></td>
                        <td><?php echo $dk->pendamping; ?></td>
                        <td><?php echo $dk->tujuan; ?></td>
                        <td><?php echo $dk->keterangan; ?></td>
                        <td><?php echo $dk->time_in; ?></td>
                        <td><?php echo $dk->time_out; ?></td>
                        <td><img src="<?php echo $dk->signed ?>" class="sign-priview" width="70" /></td>
                        <td>
                            <?php echo $dk->status_kasek  == 0 ? '<button class="btn btn-warning btn-rounded" style="font-size:9px;">Menunggu Persetujuan</button>' : null ?>
                            <?php echo $dk->status_kasek  == 1 ? '<button class="btn btn-success btn-rounded" style="font-size:9px;">Setuju</button>' : null ?>
                            <?php echo $dk->status_kasek  == 2 ? '<button class="btn btn-danger btn-rounded" style="font-size:9px;">Tidak Setuju</button>' : null ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </center>
    </body>

    </html>
<?php } ?>
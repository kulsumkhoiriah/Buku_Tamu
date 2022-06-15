<script src="<?= base_url() ?>assets/js/instascan.min.js"></script>
<!-- Main content -->
<section class="content">
<br><br>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active"> <center>Scan Time Out</center></li>
        </li>
    </ol>
</section>

    <div class="card-header bg-transparent mb-0">
        <div class="card-body">
            <center> <video id="priview" width="70%" height="70%"></video></center>
        </div>

        <div class="box-body table-responsive">
            <div class="row">
                <div class="col-md-12 col-md-offset-2">
                    <table class="table table-bordered table-striped">
                        <form action="<?= site_url('scan/ubah') ?>" method="post" name="form1">
                            <tr>
                                <td>ID</td>
                                <td>
                                    <input type="text" id="id" class="form-control" name="id" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Time Out</td>
                                <td>
                                    <input type="teks" class="form-control" name="time_out" value="<?php
                                                                                                    date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                                                                                                    echo date('h:i:s a'); ?>" readonly>
                                </td>
                            </tr>

                    </table>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                <button type="reset" class="btn  btn-flat">Reset</button>
            </div>

</section>

<script type="text/javascript">
    let scanner = new Instascan.Scanner({
        video: document.getElementById('priview')
    });
    scanner.addListener('scan', function(content) {
        $("#id").val(content);
    });

    Instascan.Camera.getCameras().then(function(Cameras) {
        if (Cameras.length > 0) {
            scanner.start(Cameras[0]);
        } else {
            console.error('No cameras found');
        }
    }).catch(function(e) {
        console.error(e);
    });
</script>

<script src="<?= base_url() ?>assets/js/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
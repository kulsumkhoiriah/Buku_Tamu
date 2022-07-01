<script src="<?= base_url() ?>assets/js/instascan.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<section class="content-header">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary">Scan QR Code</h1>
        <div>
            <a class="btn btn-outline-primary shadow-sm" href="<?= site_url('scan') ?>">
                <i class="fa fa-sign-in-alt"></i> Time in
            </a>
            <a class="btn btn-outline-danger " href="<?= site_url('scan/scan_out') ?>">
                <i class="fa fa-sign-out-alt"></i> Time Out
            </a>
        </div>
    </div>
    
    <ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-camera text-black-50"></i> Scan QR code  Time Out</a></li>
       
        </li>
</ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="card-header bg-transparent mb-0">
        <div class="card-body">
            <center> <video id="priview" width="70%" height="70%"></video></center>
        </div>

        <div class="box-body table-responsive">
            <div class="row text-gray-800">
                <div class="col col-md-offset-2">
                    <table class="table table-bordered table-striped" width="100%">
                        <form action="<?= site_url('scan/ubah_out') ?>" method="post" name="form1">
                            <tr>
                                <td>ID</td>
                                <td>
                                    <input type="text" id="id" class="form-control form-rounded " name="id" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Time Out</td>
                                <td>
                                    <input type="teks" class="form-control form-rounded " name="time_out_aktual" value="<?php
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
        </div>
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
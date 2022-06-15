<script src="<?= base_url() ?>assets/js/instascan.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<section class="content-header">

<nav class="navbar navbar-expand-sm navbar-light text-black">
		
			<a class="navbar-brand">
				<h4>Scan QR Code</h3>
			</a>
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item ">
					<a class="nav-link menu active" id="menuIn" href="<?= site_url('scan/time_in') ?>"><i class="fa fa-sign-in-alt"></i>   Time In</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu" id="menuOut"  href="<?= site_url('scan/time_out') ?>"><i class="fa fa-sign-out-alt"></i>  Time Out </a>
				</li>
			</ul>
		
	</nav>
    <div id="content">

    </div>


    <script type="text/javascript"> 
    $(document).ready(function () {
        $('#content').load('<?php echo base_url('scan_in.php/scan/time_in')?>');
        $('.menu').click(function (e) { 
        e.preventDefault();

        var menu = $this(this).attr('id');

        if(menu == "menuIn"){
            $('.nav_link').removeClass('active');
            $(this).addClass('active');
            $('#content').load('scan_in.php');
        }else if(menu == "menuOut"){
            $('.nav_link').removeClass('active');
            $(this).addClass('active');
            $('#content').load('scan_out.php');
        }
        }); 
    });
    </script>
    <script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
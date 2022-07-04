<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu | Login</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">  
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/sweetalert/animate.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #overlay {
            margin-top:40px;
            left: 0;
            top: 0;
            width: 100%;
            height: 70%;
            z-index: 1;
            color: rgba(209, 206, 209, 0.1);
            line-height: 10px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.7);
            background: rgba(255, 255, 255, 0.6);
            border-radius: 15px;
            }
            #boxlogin {
              margin-right:120px;
            }
            @media only screen and (max-width: 600px) {
              #boxlogin {
                margin-right:0px;
              }
              #btn-submit {
                  width: 50%!important;
                  margin-bottom: 10px;
              }
}
        </style>
</head>
<body style="background-image: url('<?= base_url() ?>assets/img/peruri.jpg'); background-size: cover; background-position: bottom;">

	<div class="container">
    
		<div class="img">
			
		</div>
        <div id="overlay">
            <div class="content content-full overflow-hidden" >
                <div class="py-30 text-center mt-4">
                    <img style="width: 60%;" src="<?= base_url() ?>assets/img/logo-peruri-3.png">">
                    <h1 class="h3 text-black mt-10 mb-10">Buku Tamu</h1>
                    <h2 class="h5 font-w400 text-muted mb-0"><b><i>(Sistem Informasi Buku Tamu Data Center)</i></b></h2>
                </div>
                <br><br>
                    <div class="login-content">
        <form action="<?= site_url('auth/process') ?>" method="post">
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <input type="text" class="input" name="username" placeholder="Username">
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <input type="password" class="input" name="password" placeholder="Password">
                    </div>
                    </div>
                        <button type="submit" name="login" class="btn btn-primary btn-block btn-rounded">Sign In</button>
            </form>
            
        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
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
</head>
<body>
	<img class="wave" src="<?= base_url() ?>assets/img/wave.png">
	<div class="container">
    
		<div class="img">
			<img src="<?= base_url() ?>assets/img/undraw_books_re_8gea.svg">
		</div>
		<div class="login-content">
        <form action="<?= site_url('auth/process') ?>" method="post">
				<img src="<?= base_url() ?>assets/img/peruri.png"><br><br>
				<h3 font="comic sans ms">Sistem Informasi Buku Tamu</h3><br>
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
</body>
</html>
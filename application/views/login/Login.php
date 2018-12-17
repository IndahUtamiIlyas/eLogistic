<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to eLogistic</title>

  <!-- Memangil link style untuk bootstrap, css, dan fonts google =========================================================-->
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/login.css" rel="stylesheet">
  <!-- ====================================================================================================================-->
</head>

<body>
	<div class="container col-md-12">
		<div class="row">
		
		<div class="welcome-control col-md-7">
			<div class="col-md-10 offset-md-1" id="about-view">
				<img src="<?php echo base_url(); ?>/assets/img/logo.png">
				<h2>Welcome to eLogistic</h2>
				<hr class="hr-custom">
				<span>Layanan Pendistribusian Logistik untuk Lokasi Bencana</span><br>
				<span>Memudahkan anda mengatur pendataan dan pendistribusian logistik</span><br><br>
				<span>&#9971 &nbsp&nbsp Jl. Kaliurang KM 14, Umbulmartani, Sleman, Yogyakarta</span><br>
				<span>&#9742 &nbsp 0852 1414 1212</span>
				
			</div>
		</div>

		<div class="sign-control col-md-5">
			<div class="col-md-8 offset-md-2" id="login-view">
				<?php echo form_open('Login/ceklogin'); ?>
					<h3 class="text-primary" style="text-align:center;margin-bottom:3vh;padding-top: 20vh">SIGN IN</h3>
					<input class="form-control col-md-10 offset-md-1" type="text" name="username" placeholder="Username" required autocomplete="off">
					<input class="form-control col-md-10 offset-md-1" type="password" name="password" placeholder="Password" required autocomplete="off">
					<input class="form-control col-md-10 offset-md-1" type="submit" name="login" value="LOGIN">
					<!-- <button type="submit" class="btn btn-success btn-block col-md-10 offset-md-1">Login</button> -->
					<div class="offset-md-1 question-login" >
					<a href="<?php echo site_url('Login/forgot_password') ?>">Forgot Password</a><br>
					<span >Create a new account<a href="<?php echo site_url('Login/register') ?>"> in here </a></span>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
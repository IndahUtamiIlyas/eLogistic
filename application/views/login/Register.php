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
			<div class="col-md-4 offset-md-4" id="regis-view">
				<form action="" id="">
					<h2><img class="branding" src="<?php echo base_url(); ?>/assets/img/logo.png" alt=""></h2>
					<h3 class="text-primary">SIGN UP</h3>
					<input class="form-control col-md-10 offset-md-1" type="text" name="name" placeholder="Name" required autocomplete="off">
					<input class="form-control col-md-10 offset-md-1" type="text" name="email" placeholder="Email" required autocomplete="off">
					<input class="form-control col-md-10 offset-md-1" type="text" name="username" placeholder="Username" required autocomplete="off">
					<input class="form-control col-md-10 offset-md-1" type="password" name="password" placeholder="Password" required autocomplete="off">
					<input class="form-control col-md-10 offset-md-1" type="password" name="retype" placeholder="Retype your Password" required autocomplete="off">
					<button type="submit" class="btn btn-success btn-block col-md-10 offset-md-1">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
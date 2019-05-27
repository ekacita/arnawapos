
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.ico">

    <title>POS - Log in </title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/master_style.css">

	<!-- Fab Admin skins -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition login-page">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-lg-3 col-md-8 col-12 d-none d-lg-block">
				<div class="box mb-0 b-0 bg-transparent">
					<div class="box-body login-slider p-0">
						<div id="carousel-example-generic-captions" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic-captions" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic-captions" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic-captions" data-slide-to="2"></li>
						  </ol>
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
							  <img src="<?php echo base_url()?>assets/images/slider/slide-1.jpg" class="img-fluid" alt="slide-1">
							  <div class="carousel-caption">
								<h3>First here</h3>
								<p>this is the subcontent you can use this</p>
							  </div>
							</div>
							<div class="carousel-item">
							  <img src="<?php echo base_url()?>assets/images/slider/slide-2.jpg" class="img-fluid" alt="slide-2">
							  <div class="carousel-caption">
								<h3>Second here</h3>
								<p>this is the subcontent you can use this</p>
							  </div>
							</div>
							<div class="carousel-item">
							  <img src="<?php echo base_url()?>assets/images/slider/slide-3.jpg" class="img-fluid" alt="slide-3">
							  <div class="carousel-caption">
								<h3>Third here</h3>
								<p>this is the subcontent you can use this</p>
							  </div>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-8 col-12">
				<div class="login-box">
				  <div class="login-box-body">
					<h3 class="text-center">Get started with Us</h3>
					<p class="login-box-msg">Sign in to start your session</p>

					<form action="<?php echo base_url()?>assets/index.html" method="post">
					  <div class="form-group has-feedback">
						<input type="email" class="form-control rounded" placeholder="Email">
						<span class="ion ion-email form-control-feedback"></span>
					  </div>
					  <div class="form-group has-feedback">
						<input type="password" class="form-control rounded" placeholder="Password">
						<span class="ion ion-locked form-control-feedback"></span>
					  </div>
					  <div class="row">
						<div class="col-6">
						  <div class="checkbox">
							<input type="checkbox" id="basic_checkbox_1" >
							<label for="basic_checkbox_1">Remember Me</label>
						  </div>
						</div>
						<!-- /.col -->
						<div class="col-6">
						 <div class="fog-pwd text-right">
							<a href="javascript:void(0)" class="text-danger"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
						  </div>
						</div>
						<!-- /.col -->
						<div class="col-12 text-center">
						  <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN IN</button>
						</div>
						<!-- /.col -->
					  </div>
					</form>

					<div class="social-auth-links text-center">
					  <p>- OR -</p>
					  <a href="#" class="btn btn-outline btn-light btn-social-icon"><i class="fa fa-facebook"></i></a>
					  <a href="#" class="btn btn-outline btn-light btn-social-icon"><i class="fa fa-google-plus"></i></a>
					  <a href="#" class="btn btn-outline btn-light btn-social-icon"><i class="fa fa-twitter"></i></a>
					  <a href="#" class="btn btn-outline btn-light btn-social-icon"><i class="fa fa-instagram"></i></a>
					</div>
					<!-- /.social-auth-links -->

					<div class="margin-top-30 text-center">
						<p>Don't have an account? <a href="register.html" class="text-warning ml-5">Sign Up</a></p>
					</div>

				  </div>
				  <!-- /.login-box-body -->
				</div>
				<!-- /.login-box -->

			</div>
		</div>
	</div>


	<!-- jQuery 3 -->
	<script src="<?php echo base_url()?>assets/assets/vendor_components/jquery/dist/jquery.min.js"></script>

	<!-- popper -->
	<script src="<?php echo base_url()?>assets/assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url()?>assets/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>

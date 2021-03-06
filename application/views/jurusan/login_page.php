<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets_deskapp/vendors/images/apple-touch-icon.png')?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets_deskapp/vendors/images/favicon-32x32.png')?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets_deskapp/vendors/images/favicon-16x16.png')?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_deskapp/vendors/styles/core.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_deskapp/vendors/styles/icon-font.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_deskapp/vendors/styles/style.css')?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="<?php echo base_url('assets_deskapp/vendors/images/deskapp-logo.svg')?>" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="<?php echo base_url('assets_deskapp/register.html')?>">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?php echo base_url('assets_deskapp/vendors/images/login-page-img.png')?>" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login Simahun</h2>
						</div>
						<form action="<?= site_url('jurusan/login') ?>" method="post">
							<?php if (isset($error_msg)) {
								echo $error_msg;
							} ?>
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn active">
										<input type="radio" name="options" id="admin">
										<div class="icon"><img src="<?php echo base_url('assets_deskapp/vendors/images/briefcase.svg') ?>" class="svg" alt=""></div>
										<span>I'm</span>
										Manager
									</label>
									<label class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon"><img src="<?php echo base_url('assets_deskapp/vendors/images/person.svg') ?>" class="svg" alt=""></div>
										<span>I'm</span>
										Employee
									</label>
								</div>
							</div>
							<div class="input-group custom">
								<input type="username" class="form-control form-control-lg" placeholder="Username" name="username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="**********" name="password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<?php if ($this->session->flashdata('message_login_error')) : ?>
								<div class="invalid-feedback">
									<?= $this->session->flashdata('message_login_error') ?>
								</div>
							<?php endif ?>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In" data-toggle="modal" data-target="#success-modal">
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a>
									</div>
								</div>
							</div>
						</form>
						<?php if(isset($script)){ echo $script; } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/core.js')?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/script.min.js')?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/process.js')?>"></script>
	<script src="<?php echo base_url('assets_deskapp/vendors/scripts/layout-settings.js')?>"></script>

	 <!-- Login Succes  -->
	 <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
         <div class="modal-content">
             <div class="modal-body text-center font-18">
                 <h3 class="mb-20">Login Sukses</h3>
                 <div class="mb-30 text-center"><img src="<?php echo base_url('assets_deskapp/vendors/images/success.png') ?>"></div>
             </div>
         </div>
     </div>
 </div>
</body>
</html>
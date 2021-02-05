<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>/assets/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendors/styles/style.css">

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
				<a href="login">
					<img src="<?php echo base_url(); ?>/assets/vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?php echo base_url(); ?>/assets/vendors/images/register-page-img.png" alt="">
				</div>
				<?php if(isset($validation)): ?>
				<div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
				<div class="register-box bg-white box-shadow border-radius-10">
					<form action="<?php echo base_url('public/register/save') ?>" method="post">
						<div class="form-wrap max-width-600 mx-auto">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Username*</label>
								<div class="col-sm-8">
									<input name="username" required id="username" type="text" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Email Address*</label>
								<div class="col-sm-8">
									<input type="email" id="email" name="email" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Password*</label>
								<div class="col-sm-8">
									<input name="password" id="password" required type="password" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Confirm Password*</label>
								<div class="col-sm-8">
									<input name="confirm_password" required id="confirm_password" type="password" class="form-control">
								</div>
							</div>
							<input class="btn btn-primary btn-lg btn-block" type="submit" value="Register">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/core.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/script.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/process.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/layout-settings.js"></script>
	<script src="<?php echo base_url(); ?>/assets/src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/steps-setting.js"></script>
</body>
</html>
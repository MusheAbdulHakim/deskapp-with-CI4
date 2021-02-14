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
				<a href="<?php echo base_url('deskapp/login'); ?>">
					<img src="<?php echo base_url(); ?>/assets/vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="<?php echo base_url('deskapp/login'); ?>">Login</a></li>
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
				<?php if(isset($validation)):?>
                    <div class="alert alert-danger">
                    	<?= $validation->listErrors() ?></div>
                <?php endif;?>
				<div class="col-md-6 col-lg-5">
					<div class="register-box container-fluid pt-4 pb-4 bg-white box-shadow border-radius-10">
						<form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>/deskapp/register/save" >
							<?= csrf_field() ?>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">First Name*</label>
                                <div class="col-sm-8">
                                    <input required name="firstname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Last Name*</label>
                                <div class="col-sm-8">
                                    <input required name="lastname" type="text" class="form-control">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Username*</label>
                            <div class="col-sm-8">
                                <input required name="username" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Email Address*</label>
                            <div class="col-sm-8">
                                <input required name="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Avatar</label>
                                <div class="col-sm-8">
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Telephone</label>
                                <div class="col-sm-8">
                                    <input type="tel" name="phone" class="form-control">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Password*</label>
                            <div class="col-sm-8">
                                <input required name="password" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Confirm Password*</label>
                            <div class="col-sm-8">
                                <input required name="confirm_password" type="password" class="form-control">
                            </div>
                        </div>
                          
                        <div class="col-sm-12">
                        <div class="input-group mb-0">
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Register">
                        </div>
						</form>
					</div>
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
<!-- success Popup html Start -->
<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
		<div class="modal-content">
			<div class="modal-body text-center font-18">
				<h3 class="mb-20">Form Submitted!</h3>
				<div class="mb-30 text-center"><img src="<?php echo base_url(); ?>/assets/vendors/images/success.png"></div>
				Your account has been registered successfully. Please go and login
			</div>
			<div class="modal-footer justify-content-center">
				<a href="<?php echo base_url('deskapp/login'); ?>" class="btn btn-primary">Done</a>
				<input type="hidden" name="submit">
			</div>
		</div>
	</div>
</div>
<!-- success Popup html End -->
</html>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/src/plugins/sweetalert2/sweetalert2.css">
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
<body>
	<!-- echo header,rightsidebar,leftsidebar and loader -->
	<?php 
		echo view('deskapp/includes/_header');
		echo view('deskapp/includes/_sidebar');
	?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Sweet Alert</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Sweet Alert</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A basic message</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-basic">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A title with a text under</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-title">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A success message!</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-success">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A error message!</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-error">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A warning message, with a function attached to the "Confirm"-button...</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-warning">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A custom positioned dialog</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-custom-position">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">By passing a parameter, you can execute something else for "Cancel".</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-params">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A message with custom Image Header</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-image">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A message with auto close timer</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-close">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Custom HTML description and buttons</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="custom-html-alert">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A message with custom width, padding and background</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="custom-padding-width-alert">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Ajax request example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="ajax-alert">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Chaining modals (queue) example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="chaining-alert">Click me</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Dynamic queue example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="dynamic-alert">Click me</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer -->
			<?php echo view('deskapp/includes/_footer'); ?>
		</div>
	</div>
	<!-- js -->
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/core.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/script.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/process.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/layout-settings.js"></script>

	<!-- add sweet alert js & css in footer -->
	<script src="<?php echo base_url(); ?>/assets/src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="<?php echo base_url(); ?>/assets/src/plugins/sweetalert2/sweet-alert.init.js"></script>

</body>
</html>
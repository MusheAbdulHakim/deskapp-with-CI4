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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/src/plugins/fancybox/dist/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<!-- fancybox Popup css -->
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
								<h4>Gallery</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Gallery</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="gallery-wrap">
					<ul class="row">
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img2.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img2.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img3.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img3.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img4.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img4.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img2.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img2.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img3.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img3.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img4.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img4.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="<?php echo base_url(); ?>/assets/vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
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
	<!-- fancybox Popup Js -->
	<script src="<?php echo base_url(); ?>/assets/src/plugins/fancybox/dist/jquery.fancybox.js"></script>
</body>
</html>
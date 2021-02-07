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
								<h4>pricing Table</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">pricing Table</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="container px-0">
					<h4 class="mb-30 text-blue h4">Pricing Table Style 1</h4>
					<div class="row">
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card mt-30 mb-30">
								<div class="pricing-icon">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/icon-Cash.png" alt="">
								</div>
								<div class="price-title">
									Beginner
								</div>
								<div class="pricing-price">
									<sup>$</sup>49<sub>/mo</sub>
								</div>
								<div class="text">
									Card servicing<br> for 1month
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Order Now</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card mt-30 mb-30">
								<div class="pricing-icon">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/icon-debit.png" alt="">
								</div>
								<div class="price-title">
									expert
								</div>
								<div class="pricing-price">
									<sup>$</sup>199<sub>/mo</sub>
								</div>
								<div class="text">
									Card servicing<br> for 6month
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Order Now</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card mt-30 mb-30">
								<div class="pricing-icon">
									<img src="<?php echo base_url(); ?>/assets/vendors/images/icon-online-wallet.png" alt="">
								</div>
								<div class="price-title">
									experience
								</div>
								<div class="pricing-price">
									<sup>$</sup>599<sub>/yr</sub>
								</div>
								<div class="text">
									Card servicing<br> for 1year
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Order Now</a>
								</div>
							</div>
						</div>
					</div>

					<h4 class="mb-30 mt-30 text-blue h4">Pricing Table Style 2</h4>
					<div class="row">
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card-style2">
								<div class="pricing-card-header">
									<div class="left">
										<h5>Standard</h5>
										<p>For small businesses</p>
									</div>
									<div class="right">
										<div class="pricing-price">
											€10<span>/month</span>
										</div>
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul>
											<li>2 TB of space</li>
											<li>120 days of file recovery</li>
											<li>Smart Sync</li>
											<li>Dropbox Paper admin tools</li>
											<li>Granular sharing permissions</li>
											<li>User and company-managed groups</li>
											<li>Live chat support</li>
										</ul>
									</div>
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card-style2">
								<div class="pricing-card-header">
									<div class="left">
										<h5>Advanced</h5>
										<p>For big businesses</p>
									</div>
									<div class="right">
										<div class="pricing-price">
											€15<span>/month</span>
										</div>
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul>
											<li>Everything in Standard</li>
											<li>As much space as needed</li>
											<li>Advanced admin controls</li>
											<li>Dropbox Showcase</li>
											<li>Tiered admin roles</li>
											<li>Advanced user management tools</li>
											<li>Domain verification</li>
										</ul>
									</div>
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card-style2">
								<div class="pricing-card-header">
									<div class="left">
										<h5>Enterprise</h5>
										<p>For enterprises</p>
									</div>
									<div class="right">
										<div class="pricing-price">
											€25<span>/month</span>
										</div>
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul>
											<li>Everything in Advanced</li>
											<li>Account Capture</li>
											<li>Network control</li>
											<li>Enterprise management support</li>
											<li>Domain Insights</li>
											<li>Advanced training for end users</li>
											<li>24/7 phone support</li>
										</ul>
									</div>
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- footer -->
				<?php echo view('deskapp/includes/_footer'); ?>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/core.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/script.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/process.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/layout-settings.js"></script>
</body>
</html>
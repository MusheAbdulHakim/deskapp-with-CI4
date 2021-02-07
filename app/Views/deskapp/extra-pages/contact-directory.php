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
				<div class="container pd-0">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Contact Directory</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Contact Directory</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="contact-directory-list">
						<ul class="row">
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" alt="">
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success"><i class="ion-android-person"></i> Freelancer</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
						</ul>
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
</body>
</html>
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
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Introduction</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url('deskapp/dashboard'); ?>">Home</a></li>
									<li class="breadcrumb-item"><a href="javascript:;">Documentation</a></li>
									<li class="breadcrumb-item active" aria-current="page">introduction</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Menu
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="<?php echo base_url('deskapp/docs/introduction'); ?>">Introduction</a>
									<a class="dropdown-item active" href="<?php echo base_url('deskapp/docs/getting_started'); ?>">Getting Started</a>
									<a class="dropdown-item" href="<?php echo base_url('deskapp/docs/color_settings'); ?>">Color Settings</a>
									<a class="dropdown-item" href="<?php echo base_url('deskapp/docs/third_party_plugins'); ?>">Third Party Plugins</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue mb-10">Introduction</h4>
					<p>DeskApp admin is a popular open source WebApp template for admin dashboards and control panels. DeskApp is fully responsive HTML template, which is based on the CSS framework Bootstrap 4. It utilizes all of the Bootstrap components in its design and re-styles many commonly used plugins to create a consistent design that can be used as a user interface for backend applications. DeskApp is based on a modular design, which allows it to be easily customized and built upon. This documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p>
					<p>We put a lot of love and effort to make DeskApp Admin a useful template for everyone and now It comes with New Ui. We are keen to release continuous long term updates and lots of new features will be coming soon in the future releases</p>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue mb-10">Support</h4>
					<p>For others, you can explore the component pages in the template, and you can get the code structure of the component.</p>
					<p>Also, you can make component requests or new features and we will consider them.</p>
					<p>If you find a bug or think of something cool to make Stisa better, please <a href="https://github.com/dropways/deskapp/issues" target="_blank" class="text-primary">create an issue.</a></p>
				</div>
				<h4 class="h4 text-blue mb-10">Note</h4>
				<div class="pd-20 card-box mb-30" data-bgcolor="#ff4747" data-color="#fdfdfd">
					<ul>
						<li class="d-flex pb-20"><i class="dw dw-edit-file font-20 mr-2"></i> We have used our name and brand as credit in CSS / Js we have created, you need to change / remove that if you want while using in your personal or client projects.</li>
						<li class="d-flex pb-20"><i class="dw dw-edit-file font-20 mr-2"></i> You will find name and brand of each third-party tools we have used, as credit in their respective css / js, you can remove or change as per your need.</li>
						<li class="d-flex pb-20"><i class="dw dw-edit-file font-20 mr-2"></i> We have used third-party tools / plugins in our templates, you will find links from left navigation (menu) as Third Party Tools and you can find their documentation from their respective websites link we have given.</li>
						<li class="d-flex pb-20"><i class="dw dw-edit-file font-20 mr-2"></i> We do not offer support on any third-party plugins / tools we have used.</li>
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
</body>
</html>
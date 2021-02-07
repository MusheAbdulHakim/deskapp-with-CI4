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
								<h4>Color Settings</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url('deskapp/dashboard'); ?>">Home</a></li>
									<li class="breadcrumb-item"><a href="javascript:;">Documentation</a></li>
									<li class="breadcrumb-item active" aria-current="page">Color Settings</li>
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
					<h4 class="h4 text-blue mb-15">How to Change Sidebar Background Color ?</h4>
					<div class="row">
						<div class="col-md-5">
							<p>Default sidebar color is dark</p>
							<p><img src="<?php echo base_url(); ?>/assets/vendors/images/layout/sidebar-dark.png" class="box-shadow" alt=""></p>
						</div>
						<div class="col-md-7">
							<p>Change sidebar color for white add class in <code>body class="sidebar-light"</code></p>
							<p><img src="<?php echo base_url(); ?>/assets/vendors/images/layout/sidebar-white.png" class="box-shadow" alt=""></p>
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue mb-15">How to Change Header Background Color ?</h4>
					<div class="row">
						<div class="col-md-12 mb-20">
							<p>Default header color is white</p>
							<p><img src="<?php echo base_url(); ?>/assets/vendors/images/layout/header-white.png" class="box-shadow" alt=""></p>
						</div>
						<div class="col-md-12">
							<p>Change headedr color for dark add class in <code>body class="header-dark"</code></p>
							<p><img src="<?php echo base_url(); ?>/assets/vendors/images/layout/header-dark.png" class="box-shadow" alt=""></p>
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue mb-15">Change Menu Dropdown icon</h4>
					<p class="pb-20">add class in <code>sidebar-menu</code> for change icon</p>
					<div class="d-flex flex-wrap pl-20 pr-20 justify-content-center">
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3><i class="fa fa-angle-down"></i></h3>
							</div>
							<div class="pt-10"><code>icon-style-1</code></div>
						</div>
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3><i class="ion-plus-round"></i></h3>
							</div>
							<div class="pt-10"><code>icon-style-2</code></div>
						</div>
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3><i class="fa fa-angle-double-right"></i></h3>
							</div>
							<div class="pt-10"><code>icon-style-3</code></div>
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue mb-15">Change Menu Dropdown List icon</h4>
					<p class="pb-20">add class in <code>sidebar-menu</code> for change icon</p>
					<div class="d-flex flex-wrap pl-20 pr-20 justify-content-center">
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3 class="h4 mb-0"><i class="ion-minus-round"></i></h3>
							</div>
							<div class="pt-10"><code>icon-list-style-1</code></div>
						</div>
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3 class="h4 mb-0"><i class="fa fa-circle-o"></i></h3>
							</div>
							<div class="pt-10"><code>icon-list-style-2</code></div>
						</div>
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3 class="h4 mb-0"><i class="dw dw-check"></i></h3>
							</div>
							<div class="pt-10"><code>icon-list-style-3</code></div>
						</div>
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3 class="h4 mb-0"><i class="dw dw-next-2"></i></h3>
							</div>
							<div class="pt-10"><code>icon-list-style-4</code></div>
						</div>
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3 class="h4 mb-0"><i class="dw dw-fast-forward-1"></i></h3>
							</div>
							<div class="pt-10"><code>icon-list-style-5</code></div>
						</div>
						<div class="pr-30 pb-20 text-center">
							<div class="width-box mx-auto box-shadow d-flex align-items-center justify-content-center">
								<h3 class="h4 mb-0"><i class="dw dw-next"></i></h3>
							</div>
							<div class="pt-10"><code>icon-list-style-6</code></div>
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
</body>
</html>
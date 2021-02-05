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
								<h4>Ionicons Icons</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Icons</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2020
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="icon-list pd-20 card-box mb-30">
					<h5 class="h5 text-blue">General Icons</h5>
					<ul class="fontawesome-icon-list ionicons-list d-flex flex-wrap">
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ionic"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-up-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-right-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-down-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-left-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-up-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-right-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-down-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-left-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-up-c"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-right-c"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-down-c"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-left-c"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-return-right"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-return-left"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-swap"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-shrink"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-expand"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-move"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-resize"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chevron-up"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chevron-right"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chevron-down"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chevron-left"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-navicon-round"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-navicon"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-drag"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-log-in"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-log-out"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-checkmark-round"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-checkmark"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-checkmark-circled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-close-round"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-close"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-close-circled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-plus-round"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-plus"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-plus-circled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-minus-round"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-minus"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-minus-circled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-information"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-information-circled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-help"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-help-circled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-backspace-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-backspace"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-help-buoy"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-asterisk"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-alert"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-alert-circled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-refresh"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-loop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-shuffle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-home"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-search"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-flag"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-star"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-heart"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-heart-broken"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-gear-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-gear-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-toggle-filled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-toggle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-settings"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-wrench"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-hammer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-edit"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-trash-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-trash-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-document"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-document-text"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-clipboard"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-scissors"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-funnel"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-bookmark"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-email"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-email-unread"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-folder"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-filing"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-archive"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-reply"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-reply-all"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-forward"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-share"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-paper-airplane"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-link"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-paperclip"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-compose"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-briefcase"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-medkit"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-at"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pound"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-quote"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-cloud"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-upload"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-more"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-grid"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-calendar"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-clock"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-compass"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pinpoint"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pin"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-navigate"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-location"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-map"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-lock-combination"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-locked"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-unlocked"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-key"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-graph-up-right"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-graph-down-right"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-graph-up-left"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-arrow-graph-down-left"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-stats-bars"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-connection-bars"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pie-graph"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chatbubble"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chatbubble-working"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chatbubbles"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chatbox"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chatbox-working"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-chatboxes"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-person"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-person-add"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-person-stalker"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-woman"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-man"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-female"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-male"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-transgender"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-fork"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-knife"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-spoon"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-soup-can-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-soup-can"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-beer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-wineglass"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-coffee"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-icecream"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pizza"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-power"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-mouse"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-battery-full"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-battery-half"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-battery-low"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-battery-empty"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-battery-charging"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-wifi"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-bluetooth"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-calculator"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-camera"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-eye"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-eye-disabled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-flash"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-flash-off"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-qr-scanner"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-image"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-images"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-wand"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-contrast"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-aperture"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-crop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-easel"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-paintbrush"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-paintbucket"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-monitor"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-laptop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ipad"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-iphone"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ipod"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-printer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-usb"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-outlet"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-bug"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-code"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-code-working"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-code-download"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-fork-repo"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-network"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pull-request"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-merge"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-xbox"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-playstation"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-steam"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-closed-captioning"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-videocamera"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-film-marker"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-disc"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-headphone"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-music-note"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-radio-waves"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-speakerphone"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-mic-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-mic-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-mic-c"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-volume-high"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-volume-medium"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-volume-low"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-volume-mute"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-levels"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-play"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pause"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-stop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-record"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-skip-forward"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-skip-backward"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-eject"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-bag"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-card"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-cash"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pricetag"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-pricetags"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-thumbsup"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-thumbsdown"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-happy-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-happy"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-sad-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-sad"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-bowtie"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-tshirt-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-tshirt"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-trophy"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-podium"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ribbon-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ribbon-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-university"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-magnet"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-beaker"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-erlenmeyer-flask"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-egg"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-earth"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-planet"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-lightbulb"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-cube"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-leaf"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-waterdrop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-flame"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-fireball"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-bonfire"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-umbrella"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-nuclear"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-no-smoking"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-thermometer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-speedometer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-model-s"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-plane"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-jet"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-load-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-load-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-load-c"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-load-d"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-ionic-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-back"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-forward"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-up"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-right"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-down"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-left"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-thin-up"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-thin-right"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-thin-down"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-arrow-thin-left"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-circle-filled"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-circle-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-checkmark-empty"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-checkmark-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-checkmark"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-plus-empty"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-plus-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-plus"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-close-empty"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-close-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-close"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-minus-empty"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-minus-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-minus"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-information-empty"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-information-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-information"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-help-empty"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-help-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-help"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-search"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-search-strong"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-star"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-star-half"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-star-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-heart"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-heart-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-more"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-more-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-home"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-home-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloud"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloud-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloud-upload"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloud-upload-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloud-download"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloud-download-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-upload"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-upload-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-download"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-download-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-refresh"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-refresh-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-refresh-empty"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-reload"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-loop-strong"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-loop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-bookmarks"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-bookmarks-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-book"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-book-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-flag"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-flag-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-glasses"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-glasses-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-browsers"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-browsers-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-at"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-at-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pricetag"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pricetag-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pricetags"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pricetags-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cart"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cart-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-chatboxes"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-chatboxes-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-chatbubble"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-chatbubble-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cog"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cog-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-gear"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-gear-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-settings"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-settings-strong"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-toggle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-toggle-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-analytics"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-analytics-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pie"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pie-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pulse"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pulse-strong"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-filing"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-filing-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-box"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-box-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-compose"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-compose-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-trash"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-trash-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-copy"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-copy-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-email"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-email-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-undo"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-undo-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-redo"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-redo-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-paperplane"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-paperplane-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-folder"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-folder-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-paper"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-paper-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-list"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-list-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-world"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-world-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-alarm"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-alarm-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-speedometer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-speedometer-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-stopwatch"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-stopwatch-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-timer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-timer-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-clock"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-clock-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-time"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-time-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-calendar"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-calendar-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-photos"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-photos-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-albums"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-albums-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-camera"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-camera-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-reverse-camera"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-reverse-camera-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-eye"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-eye-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-bolt"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-bolt-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-color-wand"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-color-wand-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-color-filter"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-color-filter-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-grid-view"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-grid-view-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-crop-strong"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-crop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-barcode"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-barcode-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-briefcase"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-briefcase-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-medkit"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-medkit-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-medical"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-medical-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-infinite"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-infinite-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-calculator"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-calculator-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-keypad"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-keypad-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-telephone"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-telephone-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-drag"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-location"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-location-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-navigate"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-navigate-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-locked"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-locked-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-unlocked"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-unlocked-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-monitor"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-monitor-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-printer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-printer-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-game-controller-a"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-game-controller-a-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-game-controller-b"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-game-controller-b-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-americanfootball"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-americanfootball-outline"</a>></i></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-baseball"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-baseball-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-basketball"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-basketball-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-tennisball"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-tennisball-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-football"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-football-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-body"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-body-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-person"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-person-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-personadd"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-personadd-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-people"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-people-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-musical-notes"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-musical-note"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-bell"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-bell-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-mic"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-mic-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-mic-off"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-volume-high"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-volume-low"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-play"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-play-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pause"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pause-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-recording"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-recording-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-fastforward"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-fastforward-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-rewind"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-rewind-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-skipbackward"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-skipbackward-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-skipforward"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-skipforward-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-shuffle-strong"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-shuffle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-videocam"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-videocam-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-film"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-film-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-flask"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-flask-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-lightbulb"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-lightbulb-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-wineglass"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-wineglass-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pint"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-pint-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-nutrition"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-nutrition-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-flower"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-flower-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-rose"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-rose-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-paw"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-paw-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-flame"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-flame-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-sunny"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-sunny-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-partlysunny"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-partlysunny-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloudy"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloudy-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-rainy"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-rainy-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-thunderstorm"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-thunderstorm-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-snowy"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-moon"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-moon-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloudy-night"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-ios-cloudy-night-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-up"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-forward"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-down"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-back"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-dropup"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-dropup-circle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-dropright"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-dropright-circle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-dropdown"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-dropdown-circle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-dropleft"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-arrow-dropleft-circle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-add"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-add-circle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-remove"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-remove-circle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-close"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-cancel"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-radio-button-off"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-radio-button-on"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-checkmark-circle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-checkbox-outline-blank"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-checkbox-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-checkbox-blank"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-checkbox"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-done"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-done-all"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-menu"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-more-horizontal"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-more-vertical"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-refresh"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-sync"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-wifi"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-call"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-apps"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-settings"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-options"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-funnel"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-search"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-home"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-cloud-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-cloud"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-download"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-upload"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-cloud-done"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-cloud-circle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-favorite-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-favorite"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-star-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-star-half"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-star"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-calendar"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-alarm-clock"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-time"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-stopwatch"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-watch"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-locate"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-navigate"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-pin"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-compass"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-map"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-walk"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-bicycle"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-car"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-bus"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-subway"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-train"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-boat"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-plane"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-restaurant"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-bar"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-cart"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-camera"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-image"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-film"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-color-palette"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-create"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-mail"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-drafts"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-send"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-archive"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-delete"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-attach"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-share"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-share-alt"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-bookmark"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-document"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-clipboard"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-list"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-folder-open"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-folder"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-print"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-open"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-exit"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-contract"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-expand"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-globe"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-chat"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-textsms"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-hangout"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-happy"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-sad"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-person"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-people"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-person-add"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-contact"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-contacts"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-playstore"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-lock"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-unlock"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-microphone"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-microphone-off"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-notifications-none"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-notifications"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-notifications-off"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-volume-mute"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-volume-down"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-volume-up"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-volume-off"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-hand"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-desktop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-laptop"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-phone-portrait"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-phone-landscape"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-bulb"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-sunny"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-alert"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-android-warning"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-twitter"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-twitter-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-facebook"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-facebook-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-googleplus"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-googleplus-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-google"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-google-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-dribbble"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-dribbble-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-octocat"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-github"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-github-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-instagram"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-instagram-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-whatsapp"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-whatsapp-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-snapchat"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-snapchat-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-foursquare"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-foursquare-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-pinterest"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-pinterest-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-rss"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-rss-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-tumblr"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-tumblr-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-wordpress"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-wordpress-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-reddit"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-reddit-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-hackernews"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-hackernews-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-designernews"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-designernews-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-yahoo"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-yahoo-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-buffer"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-buffer-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-skype"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-skype-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-linkedin"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-linkedin-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-vimeo"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-vimeo-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-twitch"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-twitch-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-youtube"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-youtube-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-dropbox"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-dropbox-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-apple"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-apple-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-android"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-android-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-windows"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-windows-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-html5"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-html5-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-css3"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-css3-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-javascript"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-javascript-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-angular"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-angular-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-nodejs"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-sass"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-python"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-chrome"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-chrome-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-codepen"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-codepen-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-markdown"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-tux"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-freebsd-devil"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-usd"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-usd-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-bitcoin"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-bitcoin-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-yen"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-yen-outline"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-euro"></i></a></li>
						<li class="fa-hover" data-toggle="tooltip" data-placement="bottom" title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy ion-social-euro-outline"></i></a></li>
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
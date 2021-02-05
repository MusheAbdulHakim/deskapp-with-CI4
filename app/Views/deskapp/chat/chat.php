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
								<h4>Chat</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Chat</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="bg-white border-radius-4 box-shadow mb-30">
					<div class="row no-gutters">
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div class="chat-list bg-light-gray">
								<div class="chat-search">
									<span class="ti-search"></span>
									<input type="text" placeholder="Search Contact">
								</div>
								<div class="notification-list chat-notification-list customscroll">
									<ul>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-green"></i> online</p>
											</a>
										</li>
										<li class="active">
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-green"></i> online</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-green"></i> online</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-warning"></i> active 5 min</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-warning"></i> active 4 min</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-warning"></i> active 3 min</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-orange"></i> offline</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-orange"></i> offline</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-orange"></i> offline</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-orange"></i> offline</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-orange"></i> offline</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/img.jpg" alt="">
												<h3 class="clearfix">John Doe</h3>
												<p><i class="fa fa-circle text-light-orange"></i> offline</p>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-12">
							<div class="chat-detail">
								<div class="chat-profile-header clearfix">
									<div class="left">
										<div class="clearfix">
											<div class="chat-profile-photo">
												<img src="<?php echo base_url(); ?>/assets/vendors/images/profile-photo.jpg" alt="">
											</div>
											<div class="chat-profile-name">
												<h3>Rachel Curtis</h3>
												<span>New York, USA</span>
											</div>
										</div>
									</div>
									<div class="right text-right">
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												Setting
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Export Chat</a>
												<a class="dropdown-item" href="#">Search</a>
												<a class="dropdown-item text-light-orange" href="#">Delete Chat</a>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-box">
									<div class="chat-desc customscroll">
										<ul>
											<li class="clearfix admin_chat">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img2.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<p>Maybe you already have additional info?</p>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix admin_chat">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img2.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<p>It is to early to provide some kind of estimation here. We need user stories.</p>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img1.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<p>We are just writing up the user stories now so will have requirements for you next week. We are just writing up the user stories now so will have requirements for you next week.</p>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img1.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<p>Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have requirements prepared. Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have.</p>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix admin_chat">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img2.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<p>Maybe you already have additional info?</p>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix admin_chat">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img2.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<p>It is to early to provide some kind of estimation here. We need user stories.</p>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img1.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<p>We are just writing up the user stories now so will have requirements for you next week. We are just writing up the user stories now so will have requirements for you next week.</p>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img1.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<p>Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have requirements prepared. Essentially the brief is for you guys to build an iOS and android app. We will do backend and web app. We have a version one mockup of the UI, please see it attached. As mentioned before, we would simply hand you all the assets for the UI and you guys code. If you have any early questions please do send them on to myself. Ill be in touch in coming days when we have.</p>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix upload-file">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img1.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<div class="upload-file-box clearfix">
														<div class="left">
															<img src="<?php echo base_url(); ?>/assets/vendors/images/upload-file-img.jpg" alt="">
															<div class="overlay">
																<a href="#">
																	<span><i class="fa fa-angle-down"></i></span>
																</a>
															</div>
														</div>
														<div class="right">
															<h3>Big room.jpg</h3>
															<a href="#">Download</a>
														</div>
													</div>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
											<li class="clearfix upload-file admin_chat">
												<span class="chat-img">
													<img src="<?php echo base_url(); ?>/assets/vendors/images/chat-img2.jpg" alt="">
												</span>
												<div class="chat-body clearfix">
													<div class="upload-file-box clearfix">
														<div class="left">
															<img src="<?php echo base_url(); ?>/assets/vendors/images/upload-file-img.jpg" alt="">
															<div class="overlay">
																<a href="#">
																	<span><i class="fa fa-angle-down"></i></span>
																</a>
															</div>
														</div>
														<div class="right">
															<h3>Big room.jpg</h3>
															<a href="#">Download</a>
														</div>
													</div>
													<div class="chat_time">09:40PM</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="chat-footer">
										<div class="file-upload"><a href="#"><i class="fa fa-paperclip"></i></a></div>
										<div class="chat_text_area">
											<textarea placeholder="Type your message…"></textarea>
										</div>
										<div class="chat_send">
											<button class="btn btn-link" type="submit"><i class="icon-copy ion-paper-airplane"></i></button>
										</div>
									</div>
								</div>
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
</body>
</html>
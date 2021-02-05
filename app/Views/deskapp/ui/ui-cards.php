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
								<h4>Cards</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cards</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box">
							<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img2.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box">
							<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img3.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box">
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
							<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img1.jpg" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="card-link text-primary">Card link</a>
								<a href="#" class="card-link text-primary">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box">
							<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img4.jpg" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<h5 class="card-header weight-500">Featured</h5>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
							<div class="card-footer text-muted">
								2 days ago
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<div class="card-header">
								Quote
							</div>
							<div class="card-body">
								<blockquote class="blockquote mb-0">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<div class="card-header">
								Featured
							</div>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
						<div class="card card-box">
							<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img4.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
						<div class="card bg-dark card-box">
							<img class="card-img" src="<?php echo base_url(); ?>/assets/vendors/images/img1.jpg" alt="Card image">
							<div class="card-img-overlay">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in.</p>
								<p class="card-text">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
						<div class="card card-box">
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<img class="card-img-bottom" src="<?php echo base_url(); ?>/assets/vendors/images/img5.jpg" alt="Card image cap">
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box text-center">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box text-right">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Navigation</h4>
				<div class="row clearfix">
					<div class="col-sm-12 col-md-6 mb-30">
						<div class="card card-box text-center">
							<div class="card-header">
								<ul class="nav nav-tabs card-header-tabs">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#">Disabled</a>
									</li>
								</ul>
							</div>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 mb-30">
						<div class="card card-box">
							<div class="card-header">
								<ul class="nav nav-pills card-header-pills">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#">Disabled</a>
									</li>
								</ul>
							</div>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Background and color</h4>
				<div class="row clearfix">
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-primary card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Primary card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-secondary card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Secondary card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-success card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Success card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-black bg-warning card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title">Warning card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-info card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Info card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-dark card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Dark card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Card groups</h4>
				<div class="card-group mb-30">
					<div class="card card-box">
						<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img3.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card card-box">
						<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img4.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card card-box">
						<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img2.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Card decks</h4>
				<div class="card-deck mb-30">
					<div class="card">
						<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img2.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img3.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img4.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Card columns</h4>
				<div class="card-columns mb-30">
					<div class="card card-box">
						<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title that wraps to a new line</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
					<div class="card card-box p-3">
						<blockquote class="blockquote mb-0 card-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							<footer class="blockquote-footer">
								<small class="text-muted">
									Someone famous in <cite title="Source Title">Source Title</cite>
								</small>
							</footer>
						</blockquote>
					</div>
					<div class="card card-box">
						<img class="card-img-top" src="<?php echo base_url(); ?>/assets/vendors/images/img2.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card card-box bg-primary text-white text-center p-3">
						<blockquote class="blockquote mb-0">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
							<footer class="blockquote-footer">
								<small class="text-white">
									Someone famous in <cite title="Source Title">Source Title</cite>
								</small>
							</footer>
						</blockquote>
					</div>
					<div class="card card-box text-center">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card card-box">
						<img class="card-img" src="<?php echo base_url(); ?>/assets/vendors/images/img3.jpg" alt="Card image">
					</div>
					<div class="card card-box p-3 text-right">
						<blockquote class="blockquote mb-0">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							<footer class="blockquote-footer">
								<small class="text-muted">
									Someone famous in <cite title="Source Title">Source Title</cite>
								</small>
							</footer>
						</blockquote>
					</div>
					<div class="card card-box">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
			</div>
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
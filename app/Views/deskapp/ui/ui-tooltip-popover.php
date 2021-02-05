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
								<h4>Tooltip &amp; Popover</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">UI Tooltip &amp; Popover</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Tooltips</h4>
					<p class="pb-20">you can use <code>data-toggle="tooltip" title="Tooltip on top"</code></p>
					<div class="pb-20">
						<button type="button" class="btn btn-primary margin-5" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
							Tooltip on top
						</button>
						<button type="button" class="btn btn-primary margin-5" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
							Tooltip on right
						</button>
						<button type="button" class="btn btn-primary margin-5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
							Tooltip on bottom
						</button>
						<button type="button" class="btn btn-primary margin-5" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
							Tooltip on left
						</button>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Popovers</h4>
					<p class="pb-20">you can use <code>data-container="body" data-toggle="popover" data-content=""</code></p>
					<div class="pb-20">
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on top
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on right
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus	sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on bottom
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on left
						</button>
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
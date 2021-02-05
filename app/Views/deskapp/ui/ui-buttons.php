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
								<h4>Buttons</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php base_url('public/dashboard') ?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Buttons</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Examples</h4>
							<p>Bootstrap includes several predefined button styles, each serving its own semantic purpose.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-primary">Primary</button>
								<button type="button" class="btn btn-secondary">Secondary</button>
								<button type="button" class="btn btn-success">Success</button>
								<button type="button" class="btn btn-danger">Danger</button>
								<button type="button" class="btn btn-warning">Warning</button>
								<button type="button" class="btn btn-info">Info</button>
								<button type="button" class="btn btn-light">Light</button>
								<button type="button" class="btn btn-dark">Dark</button>
								<button type="button" class="btn btn-link">Link</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Outline buttons</h4>
							<p>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-outline-primary">Primary</button>
								<button type="button" class="btn btn-outline-secondary">Secondary</button>
								<button type="button" class="btn btn-outline-success">Success</button>
								<button type="button" class="btn btn-outline-danger">Danger</button>
								<button type="button" class="btn btn-outline-warning">Warning</button>
								<button type="button" class="btn btn-outline-info">Info</button>
								<button type="button" class="btn btn-outline-light">Light</button>
								<button type="button" class="btn btn-outline-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Button tags</h4>
							<p>The <code>.btn</code> classes are designed to be used with the <code>&lt;button&gt;</code> element. However, you can also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>
							<div class="btn-list">
								<a class="btn btn-primary" href="#" role="button">Link</a>
								<button class="btn btn-secondary" type="submit">Button</button>
								<input class="btn btn-success" type="button" value="Input">
								<input class="btn btn-primary" type="submit" value="Submit">
								<input class="btn btn-info" type="reset" value="Reset">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Sizes</h4>
							<p>Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-primary btn-lg">Large button</button>
								<button type="button" class="btn btn-secondary btn-lg">Large button</button>
								<button type="button" class="btn btn-primary btn-sm">Small button</button>
								<button type="button" class="btn btn-secondary btn-sm">Small button</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Disabled Buttons</h4>
							<p>Make buttons look inactive by adding the disabled boolean attribute to any <code>&lt;button&gt;</code> element.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
								<button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Disabled Links</h4>
							<p><code>&lt;a&gt;</code>s don’t support the disabled attribute, so you must add the <code>.disabled</code> class to make it visually appear disabled.</p>
							<div class="btn-list">
								<a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
								<a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Block Buttons</h4>
							<p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-success btn-lg btn-block">Block level button</button>
								<button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Toggle states</h4>
							<p>Add <code>data-toggle="button"</code> to toggle a button’s <code>active</code> state. If you’re pre-toggling a button, you must manually add the <code>.active</code> class and <code>aria-pressed="true"</code> to the <code>&lt;button&gt;</code>.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Single toggle</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Checkbox buttons</h4>
							<p>Bootstrap’s <code>.button</code> styles can be applied to other elements, such as <code>&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code>data-toggle="buttons"</code> to a <code>.btn-group</code> containing those modified buttons to enable toggling in their respective styles.</p>
							<div class="btn-group-toggle btn-group" data-toggle="buttons">
								<label class="btn btn btn-outline-primary active">
									<input type="checkbox" checked autocomplete="off"> Checked
								</label>
								<label class="btn btn btn-outline-primary">
									<input type="checkbox" checked autocomplete="on"> Check
								</label>
								<label class="btn btn btn-outline-primary">
									<input type="checkbox" checked autocomplete="on"> Check
								</label>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">radio buttons</h4>
							<p>Bootstrap’s <code>.button</code> styles can be applied to other elements, such as <code>&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code>data-toggle="buttons"</code> to a <code>.btn-group</code> containing those modified buttons to enable toggling in their respective styles.</p>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-outline-secondary active">
									<input type="radio" name="options" id="option1" autocomplete="off" checked> Active
								</label>
								<label class="btn btn-outline-secondary">
									<input type="radio" name="options" id="option2" autocomplete="off"> Radio
								</label>
								<label class="btn btn-outline-secondary">
									<input type="radio" name="options" id="option3" autocomplete="off"> Radio
								</label>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Input With Button Groups</h4>
							<p>Feel free to mix input groups with button groups in your toolbars. Similar to the example above, you’ll likely need some utilities though to space things properly..</p>
							<div class="btn-toolbar mb-15" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group mr-2" role="group" aria-label="First group">
									<button type="button" class="btn btn-outline-primary">1</button>
									<button type="button" class="btn btn-outline-primary">2</button>
									<button type="button" class="btn btn-outline-primary">3</button>
									<button type="button" class="btn btn-outline-primary">4</button>
								</div>
							</div>
							<div class="input-group custom">
								<div class="input-group-prepend custom">
									<div class="input-group-text" id="btnGroupAddon">@</div>
								</div>
								<input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Button Groups</h4>
							<p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.Make a set of buttons appear vertically stacked rather than horizontally.</p>
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-12 mb-15">
									<div class="btn-group-vertical">
										<button type="button" class="btn btn-light">Top</button>
										<button type="button" class="btn btn-light">Middle</button>
										<button type="button" class="btn btn-light">Bottom</button>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12 mb-15">
									<div class="btn-group-vertical">
										<button type="button" class="btn btn-light">Button 1</button>
										<button type="button" class="btn btn-light">Button 2</button>
										<button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#">Dropdown link</a>
											<a class="dropdown-item" href="#">Dropdown link</a>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="btn-group mb-15">
										<button type="button" class="btn btn-light">1</button>
										<button type="button" class="btn btn-light">2</button>
										<button type="button" class="btn btn-success ">3</button>
										<button type="button" class="btn btn-light">4</button>
									</div>
									<div class="btn-group mb-15">
										<button type="button" class="btn btn-light">5</button>
										<button type="button" class="btn btn-success ">6</button>
										<button type="button" class="btn btn-light">7</button>
									</div>
									<div class="btn-group mb-15">
										<button type="button" class="btn btn-light">8</button>
									</div>
									<div class="btn-group">
										<button type="button" class="btn btn-light">1</button>
										<button type="button" class="btn btn-dark">2</button>
										<button type="button" class="btn btn-light">3</button>
										<div class="btn-group dropdown">
											<button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Dropdown link</a>
												<a class="dropdown-item" href="#">Dropdown link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Icon With Label Buttons</h4>
							<p>button using icon with label. </p>
							<div class="btn-list">
								<button type="button" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i> facebook</button>
								<button type="button" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i> twitter</button>
								<button type="button" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i> linkedin</button>
								<button type="button" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i> instagram</button>
								<button type="button" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i> dribbble</button>
								<button type="button" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i> dropbox</button>
								<button type="button" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i> google-plus</button>
								<button type="button" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i> pinterest</button>
								<button type="button" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i> skype</button>
								<button type="button" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i> vine</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Icon Buttons</h4>
							<p>button using icon.</p>
							<div class="btn-list">
								<button type="button" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></button>
								<button type="button" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></button>
								<button type="button" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></button>
								<button type="button" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></button>
								<button type="button" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></button>
								<button type="button" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i></button>
								<button type="button" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i></button>
								<button type="button" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i></button>
								<button type="button" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i></button>
								<button type="button" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i></button>
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
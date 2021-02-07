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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
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
		<div class="xs-pd-20-10 pd-ltr-20">

			<div class="title pb-20">
				<h2 class="h3 mb-0">Hospital Overview</h2>
			</div>

			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">75</div>
								<div class="font-14 text-secondary weight-500">Appointment</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">124,551</div>
								<div class="font-14 text-secondary weight-500">Total Patient</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">400+</div>
								<div class="font-14 text-secondary weight-500">Total Doctor</div>
							</div>
							<div class="widget-icon">
								<div class="icon"><i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">$50,000</div>
								<div class="font-14 text-secondary weight-500">Earning</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row pb-10">
				<div class="col-md-8 mb-20">
					<div class="card-box height-100-p pd-20">
						<div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
							<div class="h5 mb-md-0">Hospital Activities</div>
							<div class="form-group mb-md-0">
								<select class="form-control form-control-sm selectpicker">
									<option value="">Last Week</option>
									<option value="">Last Month</option>
									<option value="">Last 6 Month</option>
									<option value="">Last 1 year</option>
								</select>
							</div>
						</div>
						<div id="activities-chart"></div>
					</div>
				</div>
				<div class="col-md-4 mb-20">
					<div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
						<div class="d-flex justify-content-between pb-20 text-white">
							<div class="icon h1 text-white">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
							</div>
							<div class="font-14 text-right">
								<div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
								<div class="font-12">Since last month</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-end">
							<div class="text-white">
								<div class="font-14">Appointment</div>
								<div class="font-24 weight-500">1865</div>
							</div>
							<div class="max-width-150">
								<div id="appointment-chart"></div>
							</div>
						</div>
					</div>
					<div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
						<div class="d-flex justify-content-between pb-20 text-white">
							<div class="icon h1 text-white">
								<i class="fa fa-stethoscope" aria-hidden="true"></i>
							</div>
							<div class="font-14 text-right">
								<div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
								<div class="font-12">Since last month</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-end">
							<div class="text-white">
								<div class="font-14">Surgery</div>
								<div class="font-24 weight-500">250</div>
							</div>
							<div class="max-width-150">
								<div id="surgery-chart"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-20">
					<div class="card-box height-100-p pd-20 min-height-200px">
						<div class="d-flex justify-content-between pb-10">
							<div class="h5 mb-0">Top Doctors</div>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</div>
						<div class="user-list">
							<ul>
								<li class="d-flex align-items-center justify-content-between">
									<div class="name-avatar d-flex align-items-center pr-2">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="<?php echo base_url(); ?>/assets/vendors/images/photo1.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="">
										</div>
										<div class="txt">
											<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">4.9</span>
											<div class="font-14 weight-600">Dr. Neil Wagner</div>
											<div class="font-12 weight-500" data-color="#b2b1b6">Pediatrician</div>
										</div>
									</div>
									<div class="cta flex-shrink-0">
										<a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
									</div>
								</li>
								<li class="d-flex align-items-center justify-content-between">
									<div class="name-avatar d-flex align-items-center pr-2">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="">
										</div>
										<div class="txt">
											<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">4.9</span>
											<div class="font-14 weight-600">Dr. Ren Delan</div>
											<div class="font-12 weight-500" data-color="#b2b1b6">Pediatrician</div>
										</div>
									</div>
									<div class="cta flex-shrink-0">
										<a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
									</div>
								</li>
								<li class="d-flex align-items-center justify-content-between">
									<div class="name-avatar d-flex align-items-center pr-2">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="<?php echo base_url(); ?>/assets/vendors/images/photo3.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="">
										</div>
										<div class="txt">
											<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">4.9</span>
											<div class="font-14 weight-600">Dr. Garrett Kincy</div>
											<div class="font-12 weight-500" data-color="#b2b1b6">Pediatrician</div>
										</div>
									</div>
									<div class="cta flex-shrink-0">
										<a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
									</div>
								</li>
								<li class="d-flex align-items-center justify-content-between">
									<div class="name-avatar d-flex align-items-center pr-2">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="<?php echo base_url(); ?>/assets/vendors/images/photo4.jpg" class="border-radius-100 box-shadow" width="50" height="50" alt="">
										</div>
										<div class="txt">
											<span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7">4.9</span>
											<div class="font-14 weight-600">Dr. Callie Reed</div>
											<div class="font-12 weight-500" data-color="#b2b1b6">Pediatrician</div>
										</div>
									</div>
									<div class="cta flex-shrink-0">
										<a href="#" class="btn btn-sm btn-outline-primary">Schedule</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-20">
					<div class="card-box height-100-p pd-20 min-height-200px">
						<div class="d-flex justify-content-between">
							<div class="h5 mb-0">Diseases Report</div>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
								</div>
							</div>
						</div>

						<div id="diseases-chart"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 mb-20">
					<div class="card-box height-100-p pd-20 min-height-200px">
						<div class="max-width-300 mx-auto">
							<img src="<?php echo base_url(); ?>/assets/vendors/images/upgrade.svg" alt="">
						</div>
						<div class="text-center">
							<div class="h5 mb-1">Upgrade to Pro</div>
							<div class="font-14 weight-500 max-width-200 mx-auto pb-20" data-color="#a6a6a7">
								You can enjoy all our features by upgrading to pro.
							</div>
							<a href="#" class="btn btn-primary btn-lg">Upgrade</a>
						</div>
					</div>
				</div>
			</div>

			<div class="card-box pb-10">
				<div class="h5 pd-20 mb-0">Recent Patient</div>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus">Name</th>
							<th>Gender</th>
							<th>Weight</th>
							<th>Assigned Doctor</th>
							<th>Admit Date</th>
							<th>Disease</th>
							<th class="datatable-nosort">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo base_url(); ?>/assets/vendors/images/photo4.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600">Jennifer O. Oster</div>
									</div>
								</div>
							</td>
							<td>Female</td>
							<td>45 kg</td>
							<td>Dr. Callie Reed</td>
							<td>19 Oct 2020</td>
							<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Typhoid</span></td>
							<td>
								<div class="table-actions">
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo base_url(); ?>/assets/vendors/images/photo5.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600">Doris L. Larson</div>
									</div>
								</div>
							</td>
							<td>Male</td>
							<td>76 kg</td>
							<td>Dr. Ren Delan</td>
							<td>22 Jul 2020</td>
							<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Dengue</span></td>
							<td>
								<div class="table-actions">
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo base_url(); ?>/assets/vendors/images/photo6.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600">Joseph	Powell</div>
									</div>
								</div>
							</td>
							<td>Male</td>
							<td>90 kg</td>
							<td>Dr. Allen Hannagan</td>
							<td>15 Nov 2020</td>
							<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Infection</span></td>
							<td>
								<div class="table-actions">
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo base_url(); ?>/assets/vendors/images/photo9.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600">Jake Springer</div>
									</div>
								</div>
							</td>
							<td>Female</td>
							<td>45 kg</td>
							<td>Dr. Garrett Kincy</td>
							<td>08 Oct 2020</td>
							<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Covid 19</span></td>
							<td>
								<div class="table-actions">
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo base_url(); ?>/assets/vendors/images/photo1.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600">Paul Buckland</div>
									</div>
								</div>
							</td>
							<td>Male</td>
							<td>76 kg</td>
							<td>Dr. Maxwell Soltes</td>
							<td>12 Dec 2020</td>
							<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Asthma</span></td>
							<td>
								<div class="table-actions">
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo base_url(); ?>/assets/vendors/images/photo2.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600">Neil Arnold</div>
									</div>
								</div>
							</td>
							<td>Male</td>
							<td>60 kg</td>
							<td>Dr. Sebastian Tandon</td>
							<td>30 Oct 2020</td>
							<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Diabetes</span></td>
							<td>
								<div class="table-actions">
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo base_url(); ?>/assets/vendors/images/photo8.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600">Christian Dyer</div>
									</div>
								</div>
							</td>
							<td>Male</td>
							<td>80 kg</td>
							<td>Dr. Sebastian Tandon</td>
							<td>15 Jun 2020</td>
							<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Diabetes</span></td>
							<td>
								<div class="table-actions">
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<div class="name-avatar d-flex align-items-center">
									<div class="avatar mr-2 flex-shrink-0">
										<img src="<?php echo base_url(); ?>/assets/vendors/images/photo1.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
									</div>
									<div class="txt">
										<div class="weight-600">Doris L. Larson</div>
									</div>
								</div>
							</td>
							<td>Male</td>
							<td>76 kg</td>
							<td>Dr. Ren Delan</td>
							<td>22 Jul 2020</td>
							<td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Dengue</span></td>
							<td>
								<div class="table-actions">
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="title pb-20 pt-20">
				<h2 class="h3 mb-0">Quick Start</h2>
			</div>

			<div class="row">
				<div class="col-md-4 mb-20">
					<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
						<div class="img pb-30">
							<img src="<?php echo base_url(); ?>/assets/vendors/images/medicine-bro.svg" alt="">
						</div>
						<div class="content">
							<h3 class="h4">Services</h3>
							<p class="max-width-200 ">We provide superior health care in a compassionate maner</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-20">
					<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
						<div class="img pb-30">
							<img src="<?php echo base_url(); ?>/assets/vendors/images/remedy-amico.svg" alt="">
						</div>
						<div class="content">
							<h3 class="h4">Medications</h3>
							<p class="max-width-200 ">Look for prescription and over-the-counter drug information.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-20">
					<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
						<div class="img pb-30">
							<img src="<?php echo base_url(); ?>/assets/vendors/images/paper-map-cuate.svg" alt="">
						</div>
						<div class="content">
							<h3 class="h4">Locations</h3>
							<p class="max-width-200 ">Convenient locations when and where you need them.</p>
						</div>
					</a>
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
	<script src="<?php echo base_url(); ?>/assets/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendors/scripts/dashboard3.js"></script>
</body>
</html>
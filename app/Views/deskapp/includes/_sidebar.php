<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?php echo base_url('public/dashboard'); ?>">
				<img src="<?php echo base_url(); ?>/assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="<?php echo base_url(); ?>/assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('public/dashboard'); ?>">Dashboard style 1</a></li>
							<li><a href="<?php echo base_url('public/dashboard/one'); ?>">Dashboard style 2</a></li>
							<li><a href="<?php echo base_url('public/dashboard/two'); ?>">Dashboard style 3</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('public/forms/basic'); ?>">Form Basic</a></li>
							<li><a href="<?php echo base_url('public/forms/advance'); ?>">Advanced Components</a></li>
							<li><a href="<?php echo base_url('public/forms/wizard') ?>">Form Wizard</a></li>
							<li><a href="<?php echo base_url('public/forms/html5Editor'); ?>">HTML5 Editor</a></li>
							<li><a href="<?php echo base_url('public/forms/pickers'); ?>">Form Pickers</a></li>
							<li><a href="<?php echo base_url('public/forms/imageCropper'); ?>">Image Cropper</a></li>
							<li><a href="<?php echo base_url('public/forms/imageDropZone'); ?>">Image Dropzone</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tables</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('public/tables/basic'); ?>">Basic Tables</a></li>
							<li><a href="<?php echo base_url('public/tables/datatable'); ?>">DataTables</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url('public/calendar'); ?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('public/ui/buttons'); ?>">Buttons</a></li>
							<li><a href="<?php echo base_url('public/ui/cards'); ?>">Cards</a></li>
							<li><a href="<?php echo base_url('public/ui/cardsHover'); ?>">Cards Hover</a></li>
							<li><a href="<?php echo base_url('public/ui/modals'); ?>">Modals</a></li>
							<li><a href="<?php echo base_url('public/ui/tabs'); ?>">Tabs</a></li>
							<li><a href="<?php echo base_url('public/ui/tooltip') ?>">Tooltip &amp; Popover</a></li>
							
							<li><a href="<?php echo base_url('public/ui/sweetAlert'); ?>">Sweet Alert</a></li>
							<li><a href="<?php echo base_url('public/ui/notification'); ?>">Notification</a></li>
							<li><a href="<?php echo base_url('public/ui/timeline'); ?>">Timeline</a></li>
							<li><a href="<?php echo base_url('public/ui/progressbar'); ?>">Progressbar</a></li>
							<li><a href="<?php echo base_url('public/ui/typography'); ?>">Typography</a></li>
							<li><a href="<?php echo base_url('public/ui/listgroup'); ?>">List group</a></li>
							<li><a href="<?php echo base_url('public/ui/rangeSlider'); ?>">Range slider</a></li>
							<li><a href="<?php echo base_url('public/ui/carousel'); ?>">Carousel</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('public/icons/fontawesome'); ?>">FontAwesome Icons</a></li>
							<li><a href="<?php echo base_url('public/icons/foundation'); ?>">Foundation Icons</a></li>
							<li><a href="<?php echo base_url('public/icons/ionicons'); ?>">Ionicons Icons</a></li>
							<li><a href="<?php echo base_url('public/icons/themify'); ?>">Themify Icons</a></li>
							<li><a href="<?php echo base_url('public/icons/custom'); ?>">Custom Icons</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('public/charts/highchart'); ?>">Highchart</a></li>
							<li><a href="<?php echo base_url('public/charts/knobchart'); ?>">jQuery Knob</a></li>
							<li><a href="<?php echo base_url('public/charts/jvectormap'); ?>">jvectormap</a></li>
							<li><a href="<?php echo base_url('public/charts/apexcharts'); ?>">Apexcharts</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('public/Additionalpages/videoplayer'); ?>">Video Player</a></li>
							<li><a href="<?php echo base_url('public/Additionalpages/login'); ?>">Login</a></li>
							<li><a href="<?php echo base_url('public/Additionalpages/forgot_password'); ?>">Forgot Password</a></li>
							<li><a href="<?php echo base_url('public/Additionalpages/reset_password'); ?>">Reset Password</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('public/error/error_400'); ?>">400</a></li>
							<li><a href="<?php echo base_url('public/error/error_403'); ?>">403</a></li>
							<li><a href="<?php echo base_url('public/error/error_404'); ?>">404</a></li>
							<li><a href="<?php echo base_url('public/error/error_500'); ?>">500</a></li>
							<li><a href="<?php echo base_url('public/error/error_503'); ?>">503</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="blank.html">Blank</a></li>
							<li><a href="contact-directory.html">Contact Directory</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="blog-detail.html">Blog Detail</a></li>
							<li><a href="product.html">Product</a></li>
							<li><a href="product-detail.html">Product Detail</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="profile.html">Profile</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="pricing-table.html">Pricing Tables</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
						</a>
						<ul class="submenu">
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
								</a>
								<ul class="submenu child">
									<li><a href="javascript:;">Level 2</a></li>
									<li><a href="javascript:;">Level 2</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url('public/sitemap'); ?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('public/chat/'); ?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('public/invoice/'); ?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Getting Started</a></li>
							<li><a href="color-settings.html">Color Settings</a></li>
							<li><a href="third-party-plugins.html">Third Party Plugins</a></li>
						</ul>
					</li>
					<li>
						<a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-paper-plane1"></span>
							<span class="mtext">Landing Page <img src="<?php echo base_url(); ?>/assets/vendors/images/coming-soon.png" alt="" width="25"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   

<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<!-- <link href="../../../fonts.googleapis.com/css2f851.css?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet"> -->

<!--Color Switcher Mockup-->
<link href="assets/css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <header class="main-header header-style-one">
    
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
					<!-- Logo Box -->
					<div class="pull-left logo-box">
						<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
					</div>
					
                    <div class="pull-right upper-right clearfix">
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-phone"></span></div>
                            <ul>
								<li>Requesting a Call:</li>
                                <li><strong><a href="tel:+301-357-1234">(301) 357 1234</a></strong></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-clock-1"></span></div>
                            <ul>
                                <li>Sunday - Friday:</li>
								<li><strong>9am - 8pm</strong></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-location-1"></span></div>
                            <ul>
								<li>1428 Callison Laney Building</li>
								<li><strong>California</strong></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            
            <div class="auto-container">
				<div class="clearfix">

					<div class="nav-outer clearfix">
						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
                                <li><a href="/">Home </a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/properties">Properties</a></li>
                                <li><a href="/projects">Projects</a></li>
                                <li><a href="/contact">Contact </a></li>
									<!-- <li class="current dropdown"><a href="#">Home</a>
										<ul>
											<li><a href="index.html">Homepage One</a></li>
											<li><a href="index-2.html">Homepage Two</a></li>
											<li><a href="index-3.html">Homepage Three</a></li>
											<li class="updates">New Updates</li>
											<li class="dropdown"><a href="#">One Pager Style</a>
												<ul>
													<li><a href="index-4.html">HomePage One</a></li>
													<li><a href="index-5.html">HomePage Two</a></li>
													<li><a href="index-6.html">HomePage Three</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="#">Header Styles</a>
												<ul>
													<li><a href="index.html">Header Style One</a></li>
													<li><a href="index-2.html">Header Style Two</a></li>
													<li><a href="index-3.html">Header Style Three</a></li>
												</ul>
											</li>
										</ul>
									</li> -->
									<!-- <li class="dropdown"><a href="#">About us</a>
										<ul>
											<li><a href="about.html">About us</a></li>
											<li><a href="faq.html">Faq's</a></li>
											<li><a href="price.html">Price</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="team-detail.html">Team Detail</a></li>
											<li><a href="testimonial.html">Testimonial</a></li>
											<li><a href="comming-soon.html">Comming Soon</a></li>
											<li><a href="terms.html">Terms & Condition</a></li>
											<li><a href="privacy.html">Privacy & Policy</a></li>
										</ul>
									</li> -->
									<!-- <li class="dropdown"><a href="#">Services</a>
										<ul>
											<li><a href="services.html">Services</a></li>
											<li><a href="general-contracting.html">General Contracting</a></li>
											<li><a href="apartment-design.html">Apartment Design</a></li>
											<li><a href="metrial-managment.html">Metrial Managment</a></li>
											<li><a href="building-renovation.html">Building Renovation</a></li>
											<li><a href="building-construction.html">Building Construction</a></li>
											<li><a href="architecture-design.html">Architecture Design</a></li>
										</ul>
									</li> -->
									<!-- <li class="dropdown"><a href="#">Projects</a>
										<ul>
											<li><a href="projects.html">Our Projects</a></li>
											<li><a href="portfolio-two.html">Projects 02</a></li>
												<li><a href="portfolio-three.html">Projects 03</a></li>
											<li><a href="portfolio-detail.html">Projects Detail</a></li>
										</ul>
									</li> -->
									<!-- <li class="dropdown has-mega-menu"><a href="#">Pages</a>
										<div class="mega-menu">
											<div class="mega-menu-bar row clearfix">
												<div class="column col-lg-3 col-md-4 col-sm-12">
													<h3>About Us</h3>
													<ul>
														<li><a href="about.html">About us</a></li>
														<li><a href="price.html">Price</a></li>
														<li><a href="faq.html">Faq's</a></li>
														<li><a href="team.html">Team</a></li>
														<li><a href="team-detail.html">Team Detail</a></li>
														<li><a href="testimonial.html">Testimonial</a></li>
														<li><a href="comming-soon.html">Comming Soon</a></li>
														<li><a href="error-page.html">Error Page</a></li>
														<li><a href="terms.html">Terms & Condition</a></li>
														<li><a href="privacy.html">Privacy & Policy</a></li>
													</ul>
												</div>
												<div class="column col-lg-3 col-md-4 col-sm-12">
													<h3>Services</h3>
													<ul>
														<li><a href="services.html">Services</a></li>
														<li><a href="general-contracting.html">General Contracting</a></li>
														<li><a href="apartment-design.html">Apartment Design</a></li>
														<li><a href="metrial-managment.html">Metrial Managment</a></li>
														<li><a href="building-renovation.html">Building Renovation</a></li>
														<li><a href="building-construction.html">Building Construction</a></li>
														<li><a href="architecture-design.html">Architecture Design</a></li>
													</ul>
												</div>
												<div class="column col-lg-3 col-md-4 col-sm-12">
													<h3>Blog</h3>
													<ul>
														<li><a href="blog.html">Our Blog</a></li>
														<li><a href="blog-classic.html">Blog Classic</a></li>
														<li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
														<li><a href="blog-rightsidebar.html">Blog Right Sidebar</a></li>
														<li><a href="news-detail.html">Blog Details</a></li>
														<li><a href="error-page.html">Error Page</a></li>
													</ul>
												</div>
												<div class="column col-lg-3 col-md-4 col-sm-12">
													<h3>Our Shop</h3>
													<ul>
														<li><a href="shop.html">Shop</a></li>
														<li><a href="shop-single.html">Shop Details</a></li>
														<li><a href="shoping-cart.html">Cart Page</a></li>
														<li><a href="checkout.html">Checkout Page</a></li>
														<li><a href="login.html">Login</a></li>
														<li><a href="register.html">Register</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li> -->
									<!-- <li class="dropdown"><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="blog-classic.html">Blog Classic</a></li>
											<li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
											<li><a href="blog-rightsidebar.html">Blog Right Sidebar</a></li>
											<li><a href="news-detail.html">Blog Details</a></li>
											<li><a href="error-page.html">Error Page</a></li>
										</ul>
									</li> -->
									<!-- <li class="dropdown"><a href="#">Shop</a>
										<ul>
											<li><a href="shop.html">Shop</a></li>
											<li><a href="shop-single.html">Shop Details</a></li>
											<li><a href="shoping-cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
										</ul>
									</li> -->
									<!-- <li class="dropdown"><a href="#">Contact</a>
										<ul>
											<li><a href="contact.html">Contact us 01</a></li>
											<li><a href="contact-2.html">Contact us 02</a></li>
											<li><a href="contact-3.html">Contact us 03</a></li>
										</ul>
									</li> -->
								 </ul>
							</div>
						</nav>
						<!-- Main Menu End-->

						<!-- Options Box -->
						<div class="options-box clearfix">
							
							<!--Search Box-->
							<div class="search-box-outer">
								<div class="search-box-btn"><span class="fa fa-search"></span></div>
							</div>
							
							<div class="btn-box">
								<a href="/contact" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a>
							</div>
							
						</div>
						
					</div>
				</div>
            </div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="assets/images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
					
					<!-- Options Box -->
					<div class="options-box clearfix">
						
						<!--Search Box-->
						<!-- <div class="search-box-outer">
							<div class="search-box-btn"><span class="fa fa-search"></span></div>
						</div> -->
						
						<div class="btn-box">
							<a href="#" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a>
						</div>
						
					</div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
		
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="assets/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div><!-- End Mobile Menu -->
    
    </header>
    <!-- End Main Header -->
	
    @yield('content')
	
	<!-- Main Footer -->
    <footer class="main-footer" style="background-image:url(assets/images/background/3.jpg)">
		<div class="side-image">
			<img src="assets/images/resource/footer-image.png" alt="" />
		</div>
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
				<div class="row clearfix">
                	
                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Get In Touch</h4>
									<ul class="list-style-two">
										<li><span class="icon fa fa-send"></span>National Vicksr 88 broklyn <br> golden street, USA</li>
										<li><span class="icon fa fa-envelope"></span>Email : <a href="mailto:name@yourmail.com">name@yourmail.com</a></li>
										<li><span class="icon fa fa-phone"></span>Phone : <a href="tel:+22-5-789-0001">+22 (5) 789 0001</a></li>
										<li><span class="icon fa fa-globe"></span>Support : <a href="tel:+15-2-654-0002">+15 (2) 654 0002</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget news-widget">
									<h4>Resent Post</h4>
									<!-- Footer Column -->
									<div class="widget-content">
										<div class="post">
											<div class="thumb"><a href="news-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
											<h6><a href="news-detail.html">Commercial design for project</a></h6>
											<span class="date">August 1, 2021</span>
										</div>

										<div class="post">
											<div class="thumb"><a href="news-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
											<h6><a href="news-detail.html">Guide to remodeling your building.</a></h6>
											<span class="date">August 1, 2021</span>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Services</h4>
									<ul class="list-link">
										<li><a href="apartment-design.html">Construction Manage</a></li>
										<li><a href="apartment-design.html">Construction Consultants</a></li>
										<li><a href="apartment-design.html">Architecture & Building</a></li>
										<li><a href="apartment-design.html">Home Renovations</a></li>
										<li><a href="apartment-design.html">Tiling & Painiting</a></li>
										<li><a href="apartment-design.html">Interior Design</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget request-widget">
									<h4>Get Free Estimate</h4>
									<a class="phone" href="tel:+123-456-78910">123-456-78910</a>
									<div class="text">Our online scheduling and payment system is safe.</div>
									<a class="btn-style-six theme-btn" href="contact.html"><span class="txt">Request With Online Form</span></a>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<div class="copyright">Copyright &copy; 2021 <a href="https://themeforest.net/user/noor_tech">Kanstr</a> All rights reserved.</div>
					</div>
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<!-- Social Box -->
						<ul class="social-box">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
							<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
							<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
							<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
							<li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	
	
</div>
<!--End pagewrapper-->

<!-- Header Search -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-multiply"></span></button>
	<form method="post" action="http://themerange.net/html/kanstr/blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Layout</h6>
    </div>
	
	<div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate red-color" data-theme-file="css/color-themes/red-color.css"></span>
        </div>
    </div>
	
	<h6>RTL Version</h6>
	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
	<h6>Boxed Version</h6>
	<ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
	<h6>Want Sticky Header</h6>
	<ul class="header-version option-box"> <li class="box">No</li> <li>Yes</li></ul>
    <h6>Dark Verion</h6>
	<ul class="dark-version option-box"> <li class="box">Yes</li> <li>No</li></ul>
	
</div>

<!--Scroll to top-->
<div class="back-to-top scroll-to-target show-back-to-top" data-target="html">TOP</div>

<script src="assets/js/jquery.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/mixitup.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/color-settings.js"></script>

</body>


</html>
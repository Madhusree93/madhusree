<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Al WARQA TECH. CONT. LLC | About Us</title>

<!-- Stylesheets -->
<link href="{{asset('website/asset')}}/css/bootstrap.css" rel="stylesheet">

<link href="{{asset('website/asset')}}/css/style.css" rel="stylesheet">
<link href="{{asset('website/asset')}}/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&amp;family=Great+Vibes&amp;family=Montserrat:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="{{asset('website/asset')}}/css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('website/asset')}}/images/logoaw.png" type="image/x-icon">
<link rel="icon" href="{{asset('website/asset')}}/images/logoaw.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="{{asset('website/asset')}}/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{asset('website/asset')}}/js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style Two -->
     <header class="main-header header-style-two">
    
        <!-- Header Top Two -->
       <div class="header-top-two">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <!-- Top Left -->
                    <div class="top-left clearfix">
						<ul class="top-list">
							<li><span class="icon flaticon-maps-and-flags"></span>Sharjah,United Arab Emirates (UAE)</li>
							<li><span class="icon flaticon-email"></span><a href="mailto:info@alwarqatech.com">info@alwarqatech.com</a></li>
						</ul>
                    </div>
					
					<!-- Top Right -->
                    <div class="top-right clearfix">
						<!-- Social Box -->
						<ul class="social-box">
							<li><a href="#" class="fa fa-facebook-f"></a></li>
							<li><a href="#" class="fa fa-linkedin"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
						</ul>
					</div>
					
                </div>
            </div>
        </div>
		
        <!--Header Lower-->
        <div class="header-lower">
            
            <div class="auto-container">
				<div class="clearfix">

					<!-- Logo Box -->
					<div class="pull-left logo-box">
						<div class="logo"><a href="index.html"><img src="{{asset('website/asset')}}/images/logowhgiteaw.png" alt="" title=""></a></div>
					</div>
				
					<div class="nav-outer clearfix">
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
									<li class=""><a href="{{route('index')}}">Home</a>
										<!-- <ul>
											<li><a href="index.html">Homepage One</a></li>
											<li><a href="index-2.html">Homepage Two</a></li>
											<li><a href="index-3.html">Homepage Three</a></li>
											<li class="dropdown"><a href="#">Header Styles</a>
												<ul>
													<li><a href="index.html">Header Style One</a></li>
													<li><a href="index-2.html">Header Style Two</a></li>
													<li><a href="index-3.html">Header Style Three</a></li>
												</ul>
											</li>
										</ul> -->
									</li>
									<li class=""><a href="{{route('about')}}">About us</a>
								<!-- 		<ul>
											<li><a href="about.html">About us</a></li>
											<li><a href="faq.html">Faq's</a></li>
											<li><a href="price.html">Price</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="team-detail.html">Team Detail</a></li>
											<li><a href="testimonial.html">Testimonial</a></li>
											<li><a href="comming-soon.html">Comming Soon</a></li>
											<li><a href="terms.html">Terms & Condition</a></li>
											<li><a href="privacy.html">Privacy & Policy</a></li>
										</ul> -->
									</li>
									 <li class="">
                                 <a href="services.html"> Our Services</a>
                                 <!-- <ul>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="building-construction.html">Building Construction</a></li>
                                    <li><a href="property-sketching.html">Property Sketching</a></li>
                                    <li><a href="building-renovation.html">Building Renovation</a></li>
                                    <li><a href="material-supply.html">Material Supply</a></li>
                                    <li><a href="interior-design.html">Interior Design</a></li>
                                    <li><a href="plan-certification.html">Plan Certification</a></li>
                                    <li><a href="special-monintation.html">Spectial Monintation</a></li>
                                    </ul> -->
                              </li>
                              <li class="">
                                 <a href="projects.html">Portfolio</a>
                                 <!-- <ul>
                                    <li><a href="projects.html">Our Projects</a></li>
                                    <li><a href="portfolio-two.html">Projects Two</a></li>
                                    <li><a href="portfolio-detail.html">Projects Detail</a></li>
                                    <li><a href="portfolio-detail-two.html">Projects Detail 02</a></li>
                                    </ul> -->
                              </li>
                               <li class="dropdown">
                                 <a href="#">Products</a>
                                 <ul>
                                     <li><a href="{{route('Prefab_Buildings')}}">Prefab Buildings</a></li>
                                    <li><a href="{{route('man')}}">Shade Structures</a></li>
                                    <li><a href="{{route('flooringunit')}}">Flooring Units</a></li>
                                 
                                    <li><a href="blog-leftsidebar.html">Cabins / Shade Maintenance Service</a></li>
                                  
                                    
                                 </ul>
                              </li>
                              <li class="dropdown">
                                 <a href="#">Main Activity</a>
                                 <ul>
                                    <li><a href="tem.html">Temporary Site Facility / Porta Cabins</a></li>
                                    <li><a href="{{route('man')}}"> Manpower supply</a></li>
                                    <li><a href="{{route('cladding')}}">Cladding</a></li>
                                    <li><a href="{{route('petrolium-products')}}"> Petroleum Products</a></li>
                                    <!-- <li><a href="news-detail.html">Blog Details</a></li>
                                       <li><a href="error-page.html">Error Page</a></li> -->
                                 </ul>
                              </li>
                              <li class="">
                                 <a href="{{route('contact')}}">Contact</a>
                                 <!-- <ul>
                                    <li><a href="contact.html">Contact us 01</a></li>
                                    <li><a href="contact-2.html">Contact us 02</a></li>
                                    <li><a href="contact-3.html">Contact us 03</a></li>
                                    </ul> -->
                              </li>
								 </ul>
							</div>
						</nav>
						<!-- Main Menu End-->

						<!-- Options Box -->
						<div class="options-box clearfix">
							
							<!--Search Box-->
							<!-- <div class="search-box-outer">
								<div class="search-box-btn"><span class="fa fa-search"></span></div>
							</div> -->
							
							<div class="btn-box">
								<a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Get Quotes</span></a>
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
                    <a href="index.html" title=""><img src="{{asset('website/asset')}}/images/aw.png" alt="" title=""></a>
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
					<!-- 	<div class="search-box-outer">
							<div class="search-box-btn"><span class="fa fa-search"></span></div>
						</div> -->
						
					<!-- 	<div class="btn-box">
							<a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Get Quote</span></a>
						</div> -->
						
					</div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
		
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
          <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('website/asset')}}/images/aw.png" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div><!-- End Mobile Menu -->
    
    </header>
    <!-- End Main Header -->
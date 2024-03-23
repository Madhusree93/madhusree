@extends('layout.app')
@section('header')
@include('include.header')
@endsection
@section('content') 
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

	<!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('website/asset')}}/images/background/aboutusbaneeraw.jpg)">
    	<div class="auto-container">
			<h1 style="font-size: 30px;">Cladding</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Cladding</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container left-sidebar">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						
						<!-- Categories Widget -->
						<!-- <div class="sidebar-widget categories-widget">
							<div class="widget-content">
								<ul class="blog-cat">
									<li class="active"><a href="building-construction.html">Building Construction</a></li>
									<li><a href="property-sketching.html">Property Sketching</a></li>
									<li><a href="building-renovation.html">Building Renovation</a></li>
									<li><a href="material-supply.html">Material Supply</a></li>
									<li><a href="interior-design.html">Interior Design</a></li>
									<li><a href="plan-certification.html">Plan Certification</a></li>
									<li><a href="special-monintation.html">Spectial Monintation</a></li>
								</ul>
							</div>
						</div>
						 -->
						<!-- Brochures Widget -->
						<div class="sidebar-widget brochures-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h3>Brochures</h3>
								</div>
								<div class="text">View our 2020 Medical prospectus of brochure for an easy to read guide on all of the services offer.</div>
								
								<!-- Broucher Box -->
								<div class="broucher-box">
									<a href="#" class="overlay-link"></a>
									<div class="broucher-inner">
										<span class="file-icon fa fa-file-pdf-o"></span>
										Project-One .pdf
										<span class="download-icon flaticon-computing-cloud"></span>
									</div>
								</div>
								
								<!-- Broucher Box -->
								<div class="broucher-box">
									<a href="#" class="overlay-link"></a>
									<div class="broucher-inner">
										<span class="file-icon fa fa-file-word-o"></span>
										Project-One .wd
										<span class="download-icon flaticon-computing-cloud"></span>
									</div>
								</div>
								
								<!-- Broucher Box -->
								<div class="broucher-box">
									<a href="#" class="overlay-link"></a>
									<div class="broucher-inner">
										<span class="file-icon fa fa-file-powerpoint-o"></span>
										Project-One .ppt
										<span class="download-icon flaticon-computing-cloud"></span>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Contact Widget -->
						<div class="sidebar-widget contact-widget">
							<div class="widget-content">
								<div class="sidebar-title">
									<h3>Contact</h3>
								</div>
								
								<ul>
									<li>
										<span class="icon flaticon-road-sign"></span>
										<strong>Sharjah,</strong>
										United Arab Emirates (UAE)
									</li>
									<li>
										<span class="icon flaticon-email-6"></span>
										<strong>Send Your Mail At</strong>
										<a href="mailto:info@alwarqatech.com">info@alwarqatech.com</a>
									</li>
									<li>
										<span class="icon flaticon-clock-4"></span>
										<strong>Working Hours</strong>
										Mon-Sat:9.30am To 7.00pm
									</li>
								</ul>
								
							</div>
						</div>
						
					</aside>
				</div>
				
				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="service-detail">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('website/asset')}}/images/resource/claddingaw2.jpg" alt="" />
							</div>
							<div class="lower-content">
								<div class="icon-box">
									<span class="icon flaticon-null-3"></span>
								</div>
								<h3>Cladding</h3>
								<div class="text">
									<p>At Al WARQA TECH. CONT. LLC, we excel in providing premier cladding solutions tailored to meet the distinct requirements of diverse projects across various sectors. Committed to delivering excellence, reliability, and operational efficiency, we take immense pride in being the preferred partner for our clients in the realm of cladding services.</p>
									<p>Our specialized team is dedicated to ensuring the highest standards of craftsmanship, utilizing cutting-edge materials and techniques to achieve both aesthetic brilliance and structural integrity. Whether your project demands the sleek modernity of metal cladding, the timeless warmth of wood finishes, or the innovative appeal of composite materials, we have the expertise to bring your vision to life.</p>
									
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<ul class="list-style-two">
												<li>Skilled Workforce</li>
												<li>Customized Solutions</li>
												<li>Rapid Deployment</li>
											</ul>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<ul class="list-style-two">
												<li>Compliance and Certification</li>
												<li>Construction</li>
												<li>Construction Sites</li>
											</ul>
										</div>
									</div>
									<div class="image-gallery">
										<div class="row clearfix">
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<img src="{{asset('website/asset')}}/images/resource/22.jpg" alt="" />
											</div>
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<img src="{{asset('website/asset')}}/images/resource/23.jpg" alt="" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Service Info Tabs -->
						<div class="service-info-tabs">
							<!-- Service Tabs -->
							<div class="service-tabs tabs-box">
							
								<!--Tab Btns-->
								<ul class="tab-btns tab-buttons clearfix">
									<li data-tab="#prod-care" class="tab-btn active-btn">Expertise</li>
									<li data-tab="#prod-support" class="tab-btn">Quality Assurance</li>
									<li data-tab="#prod-guarante" class="tab-btn">Customer Satisfaction</li>
								</ul>
								
								<!--Tabs Container-->
								<div class="tabs-content">
									
									<!-- Tab / Active Tab -->
									<div class="tab active-tab" id="prod-care">
										<div class="content">
											<div class="text">
												<p>With years of experience in the cladding industry, Al WARQA TECH. CONT. LLC boasts a team of skilled professionals who bring a wealth of knowledge to every project. Our expertise extends to a wide range of cladding materials and installation techniques.</p>
												
											</div>
										</div>
									</div>
									
									<!-- Tab -->
									<div class="tab" id="prod-support">
										<div class="content">
											<div class="text">
												<p>We are committed to delivering cladding solutions of the highest quality. By using premium materials and adhering to industry best practices, we ensure that our cladding installations are not only aesthetically pleasing but also durable and long-lasting.</p>
												
											</div>
										</div>
									</div>
									
									<!-- Tab -->
									<div class="tab" id="prod-guarante">
										<div class="content">
											<div class="text">
												<p>At Al WARQA TECH. CONT. LLC, client satisfaction is at the core of our mission. Our successful track record is a testament to our dedication to meeting and exceeding our clients' expectations. We work closely with you throughout the entire process to ensure your vision becomes a reality.</p>
												</p>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<!-- Clients Section -->
     <section class="clients-section">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!-- Sponsors Carousel -->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('website/asset')}}/images/clients/clients1-removebg-preview.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('website/asset')}}/images/clients/client2-removebg-preview.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('website/asset')}}/images/clients/clients3-removebg-preview.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('website/asset')}}/images/clients/clients4-removebg-preview.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('website/asset')}}/images/clients/clients1-removebg-preview.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('website/asset')}}/images/clients/client2-removebg-preview.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('website/asset')}}/images/clients/clients3-removebg-preview.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('website/asset')}}/images/clients/clients4-removebg-preview.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!-- End Clients Section -->
    @endsection
@section('footer')

@include('include.footer')

@endsection
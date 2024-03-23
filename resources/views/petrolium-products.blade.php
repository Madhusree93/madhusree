@extends('layout.app')
@section('header')
@include('include.header')
@endsection
@section('content') 
<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('website/asset')}}/images/background/aboutusbaneeraw.jpg)">
    	<div class="auto-container">
			<h1 style="font-size: 30px;">Petrolium Products</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Petrolium Products</li>
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
								<img src="{{asset('website/asset')}}/images/resource/petroliumproducts.jpg" alt="" />
							</div>
							<div class="lower-content">
								<div class="icon-box">
									<span class="icon flaticon-null-3"></span>
								</div>
								<h3>Petrolium Products(Diesel, MHO, Urea, etc)</h3>
								<div class="text">
									<p>Welcome to our comprehensive selection of premium petroleum products, where quality meets reliability. Our range encompasses a diverse array of refined fuels and lubricants, meticulously crafted to meet the dynamic needs of today's industries. Whether you require high-performance gasoline, diesel fuels, or cutting-edge lubricants, our products are engineered to deliver optimal efficiency and performance.</p>
									<p>At the heart of our commitment lies a dedication to stringent quality control measures, ensuring that each drop of our petroleum products meets or exceeds industry standards. We understand the critical role these fuels and lubricants play in powering your vehicles, machinery, and operations. That's why our offerings are formulated with precision, leveraging advanced technologies to enhance combustion, reduce emissions, and prolong the lifespan of your engines.</p>
									<p>As a customer-focused company, we prioritize sustainability and environmental responsibility. Our petroleum products are designed to minimize their ecological footprint, with an emphasis on eco-friendly formulations and efficient production processes. We are committed to contributing to a greener future without compromising on the performance you expect.</p>
									<p>Explore our range of petroleum products to discover solutions tailored to your specific needs. Whether you're in transportation, manufacturing, or any other industry that relies on top-notch fuels and lubricants, we have the right products to keep your operations running smoothly. Trust in our expertise, reliability, and commitment to excellence as you navigate the vast world of petroleum solutions with us.</p>
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
												<img src="{{asset('website/asset')}}/images/resource/petroliumproducts1.jpg" alt="" />
											</div>
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<img src="{{asset('website/asset')}}/images/resource/petroliumproducts2.jpg" alt="" />
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
									<li data-tab="#prod-care" class="tab-btn active-btn"> Expert Consultation</li>
									<li data-tab="#prod-support" class="tab-btn">Custom Solutions</li>
									<li data-tab="#prod-guarante" class="tab-btn"> On-Site Analysis </li>
								</ul>
								
								<!--Tabs Container-->
								<div class="tabs-content">
									
									<!-- Tab / Active Tab -->
									<div class="tab active-tab" id="prod-care">
										<div class="content">
											<div class="text">
												<p>Our team of seasoned experts is at your disposal, providing personalized consultations to help you navigate the world of petroleum products. From optimizing fuel efficiency to selecting the perfect lubricants, we offer guidance tailored to your industry and unique requirements.</p>
												
											</div>
										</div>
									</div>
									
									<!-- Tab -->
									<div class="tab" id="prod-support">
										<div class="content">
											<div class="text">
												<p>Tailor our petroleum products to meet the specific needs of your machinery and operations. Our custom blending services allow you to create formulations that deliver peak performance, efficiency, and longevity, ensuring a perfect match for your applications.</p>
												
											</div>
										</div>
									</div>
									
									<!-- Tab -->
									<div class="tab" id="prod-guarante">
										<div class="content">
											<div class="text">
												<p>Quality is our priority. Benefit from our on-site analysis and testing services to monitor and maintain the highest standards of fuel and lubricant quality. Identify potential issues early and uphold compliance with industry regulations.</p>
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
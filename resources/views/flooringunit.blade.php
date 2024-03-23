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
                    <a href="index.html" title=""><img src="{{asset('website/asset')}}/images/logo-small.png" alt="" title=""></a>
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
						<div class="search-box-outer">
							<div class="search-box-btn"><span class="fa fa-search"></span></div>
						</div>
						
						<div class="btn-box">
							<a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Find Advisor</span></a>
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
                <div class="nav-logo"><a href="index.html"><img src="{{asset('website/asset')}}/images/aw.png" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div><!-- End Mobile Menu -->
    
    </header>
    <!-- End Main Header -->

	<!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('website/asset')}}/images/background/prehabbuildings.jpg)">
    	<div class="auto-container">
			<h1>FLOORING UNITS</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Products</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Services Section Four -->
     	<section class="team-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title prehead">
					<!-- Title Effect -->
					<div class="title-effect">
						<div class="bar bar-top"></div>
						<div class="bar bar-right"></div>
						<div class="bar bar-bottom"></div>
						<div class="bar bar-left"></div>
					</div>
					FLOORING UNITS
				</div>
				<h2 class="preheading">At Al Warqa Contracting ME, we specialize in designing, manufacturing, supplying, and installing high-quality prefabricated flooring units across the UAE and throughout the Middle East region. Our versatile prefabricated flooring units are suitable for a wide range of applications, including offices, exhibition spaces, temporary event venues, storage areas, and more. We serve clients in Dubai, Abu Dhabi, Sharjah, Ajman, Al Ain, Ras Al Khaimah, Fujairah, Umm al Quwain, and beyond. With a focus on durability, efficiency, and customization, our flooring units provide reliable solutions for diverse project needs.</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{asset('website/asset')}}/images/resource/VINYLFLOORING.jpg" alt="" />
							<!-- Social Box -->
							<!-- <ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul> -->
						</div>
						<div class="lower-content">
							<h5><a href="team-detail.html"> VINYL FLOORING</a></h5>
							<!-- <div class="designation">Builder Advisor</div> -->
							<!-- Arrows -->
							<a href="team-detail.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
				<!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{asset('website/asset')}}/images/resource/LAMINATEFLOORING.jpg" alt="" />
							<!-- Social Box -->
							<!-- <ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul> -->
						</div>
						<div class="lower-content">
							<h5><a href="team-detail.html">LAMINATE FLOORING</a></h5>
							<!-- <div class="designation">Builder Advisor</div> -->
							<!-- Arrows -->
							<a href="team-detail.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
                 <!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{asset('website/asset')}}/images/resource/CARPETTILES.jpg" alt="" />
							<!-- Social Box -->
							<!-- <ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul> -->
						</div>
						<div class="lower-content">
							<h5><a href="team-detail.html">CARPET TILES</a></h5>
							<!-- <div class="designation">Builder Advisor</div> -->
							<!-- Arrows -->
							<a href="team-detail.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
                   <!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{asset('website/asset')}}/images/resource/RUBBERFLOORING.jpg" alt="" />
							<!-- Social Box -->
							<!-- <ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul> -->
						</div>
						<div class="lower-content">
							<h5><a href="team-detail.html">RUBBER FLOORING</a></h5>
							<!-- <div class="designation">Builder Advisor</div> -->
							<!-- Arrows -->
							<a href="team-detail.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
				 <!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{asset('website/asset')}}/images/resource/INTERLOCKINGFLOORTILES.jpg" alt="" />
							<!-- Social Box -->
							<!-- <ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul> -->
						</div>
						<div class="lower-content">
							<h5><a href="team-detail.html">INTERLOCKING FLOOR TILES</a></h5>
							<!-- <div class="designation">Builder Advisor</div> -->
							<!-- Arrows -->
							<a href="team-detail.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Services Section Four -->
    @endsection
@section('footer')

@include('include.footer')

@endsection
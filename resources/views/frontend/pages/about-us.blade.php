@extends('frontend.layouts.master')

@section('title','NOVA-SHOP || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	
	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Welcome To <span>NOVA shop</span></h3>
							<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
							<div class="button">
							
								<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							{{-- <div class="button">
								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div> --}}
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->


	<!-- Team Member -->
	<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Our team</h2>
  <!-- Section description -->
  <p class="grey-text w-responsive mx-auto mb-5">Bachelor of Science in Information System / Associate of Computer Technology</p>
  <!-- Grid row -->
  <div class="row ml-5 pl-5">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 ">
      <div class="avatar mx-auto">
        <img src="/photos/1/Blog/lopez.png" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Jayson Lopez</h5>
      <p class="text-uppercase blue-text"><strong>UI Designer</strong></p>
      <p class="grey-text">Associate of Computer Technology</p>
      
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
      <div class="avatar mx-auto">
        <img src="/photos/1/Blog/catalan.png" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Bless Catalan</h5>
      <p class="text-uppercase blue-text"><strong>Documentation</strong></p>
      <p class="grey-text">Bachelor of Science in Information System</p>
    
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
      <div class="avatar mx-auto">
        <img src="/photos/1/Blog/magulod.png" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Erolle Magulod</h5>
      <p class="text-uppercase blue-text"><strong>UI Designer</strong></p>
      <p class="grey-text">Associate of Computer Technology</p>
      
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->

 
</section>
<section class="team-section text-center my-5">
 <!-- Grid row -->
 <div class="row ml-5 pl-5">

<!-- Grid column -->
<div class="col-lg-6 col-md-6 mb-lg-0 mb-5">
  <div class="avatar mx-auto">
	<img src="/photos/1/Blog/galzote.png" class="rounded-circle z-depth-1"
	  alt="Sample avatar">
  </div>
  <h5 class="font-weight-bold mt-4 mb-3">Jared Galzote</h5>
  <p class="text-uppercase blue-text"><strong>Front-end Developer</strong></p>
  <p class="grey-text">Bachelor of Science in Information System</p>
  
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-6 col-md-6 mb-lg-0 mb-5">
  <div class="avatar mx-auto">
	<img src="/photos/1/Blog/cortes.png" class="rounded-circle z-depth-1"
	  alt="Sample avatar">
  </div>
  <h5 class="font-weight-bold mt-4 mb-3">Melrose Cortes</h5>
  <p class="text-uppercase blue-text"><strong>Back-end Developer</strong></p>
  <p class="grey-text">Bachelor of Science in Information System</p>

</div>
<!-- Grid column -->
</div>
<!-- Grid row -->
</section>
<!-- Team Member End -->
	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	
	@include('frontend.layouts.newsletter')
@endsection
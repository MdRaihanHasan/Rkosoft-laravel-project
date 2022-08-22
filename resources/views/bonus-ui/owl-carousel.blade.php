@extends('layouts.simple.master')
@section('title', 'Owl Carousel')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Owl Carousel</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Bonus Ui</li>
<li class="breadcrumb-item active">Owl Carousel</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Basic Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-1">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Responsive Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-2">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Center Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-3">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Merge Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-4">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Auto Width Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-5">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/11.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/12.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/13.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/14.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/15.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/11.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/12.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/13.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/14.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider-auto-width/15.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>URL Hash Navigations</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-6">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Events</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-7">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Stage Padding Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-8">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Right to Left Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-9">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Lazy load Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-10">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Animate Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-12">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Auto Play Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-13">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Auto Height Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-14">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Mouse Wheel Example</h5>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="owl-carousel-15">
						<div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
						<div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl-custom.js')}}"></script>
@endsection


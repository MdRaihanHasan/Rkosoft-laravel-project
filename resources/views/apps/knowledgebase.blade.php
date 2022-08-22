@extends('layouts.simple.master')
@section('title', 'Knowledgebase')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Knowledgebase</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Apps</li>
<li class="breadcrumb-item active">Knowledgebase</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="knowledgebase-bg"><img class="bg-img-cover bg-center" src="{{asset('assets/images/knowledgebase/bg_1.jpg')}}" alt="looginpage"></div>
			<div class="knowledgebase-search">
				<div>
					<h3>How Can I help you?</h3>
					<form class="form-inline" action="#" method="get">
						<div class="mb-3 w-100"><i data-feather="search"></i>
							<input class="form-control-plaintext w-100" type="text" placeholder="Type question here" title="">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xl-4 xl-50 col-sm-6">
			<div class="card bg-primary">
				<div class="card-body">
					<div class="media faq-widgets">
						<div class="media-body">
							<h5>Articles</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
						<i data-feather="book-open"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 xl-50 col-sm-6">
			<div class="card bg-primary">
				<div class="card-body">
					<div class="media faq-widgets">
						<div class="media-body">
							<h5>Knowledgebase</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
						<i data-feather="aperture"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 xl-100">
			<div class="card bg-primary">
				<div class="card-body">
					<div class="media faq-widgets">
						<div class="media-body">
							<h5>Support</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
						<i data-feather="file-text"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="header-faq">
				<h5 class="mb-0">Browse articles by category</h5>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Browse Articles</h5>
						</div>
						<div class="card-body">
							<div class="row browse">
								<div class="col-xl-4 xl-50 col-md-6">
									<div class="browse-articles">
										<h6><span><i data-feather="archive"></i></span>Quick Questions are answered</h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Lorem Ipsum is simply dummy text of the printing</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Lorem Ipsum has been the industry's standard dummy </span><span class="badge badge-primary pull-right">New</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>When an unknown printer took a galley </span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>But also the leap into electronic typesetting, </span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (40)</span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 xl-50 col-md-6">
									<div class="browse-articles">
										<h6><span><i data-feather="archive"></i></span> Integrating WordPress with Your Website</h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>It was popularised in the 1960s with the release</span><span class="badge badge-primary pull-right">Review</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Etraset sheets containing Lorem Ipsum passages</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Desktop publishing software like Aldus PageMaker </span><span class="badge badge-primary pull-right">Articles</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Making this the first true generator on the Internet.</span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (90)</span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 xl-50 col-md-6">
									<div class="browse-articles">
										<h6><span><i data-feather="archive"></i></span>WordPress Site Maintenance</h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>The point of using Lorem Ipsum is that it has a more-or-less </span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Normal distribution of letters, as opposed to using </span><span class="badge badge-primary pull-right">Closed</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Lorem Ipsum, you need to be sure there isn't anything  </span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Repetition, injected humour, or non words etc</span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (50)</span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 xl-50 col-md-6">
									<div class="browse-articles browse-bottom">
										<h6><span><i data-feather="archive"></i> Meta Tags in WordPress</span></h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Nemo enim ipsam voluptatem quia voluptas sit  </span><span class="badge badge-primary pull-right">Popular</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Ipsum quia dolor sit amet, consectetur</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Sed quia non numquam eius modi tempora incidunt</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Lorem eum fugiat quo voluptas nulla pariatu</span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (90)</span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 xl-50 col-md-6">
									<div class="browse-articles browse-bottom">
										<h6><span><i data-feather="archive"></i></span>WordPress in Your Language</h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Desktop publishing software like Aldus PageMaker</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Etraset sheets containing Lorem Ipsum passages</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>It was popularised in the 1960s with the release</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Making this the first true generator on the Internet</span><span class="badge badge-primary pull-right">Closed</span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (50)</span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 xl-50 col-md-6">
									<div class="browse-articles browse-bottom">
										<h6><span><i data-feather="archive"></i></span>Know Your Sources</h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>The point of using Lorem Ipsum </span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>It has a more-or-less normal distribution of letters</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Et harum quidem rerum facilis est et expedita</span><span class="badge badge-primary pull-right">Article</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Nam libero tempore, cum soluta nobis est eligendi </span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (26)</span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 xl-50 col-md-6">
									<div class="browse-articles browse-bottom">
										<h6><span><i data-feather="archive"></i></span>Validating a Website</h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>When our power of choice is untrammelled </span><span class="badge badge-primary pull-right">Review</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>It will frequently occur that pleasures  </span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>who fail in their duty through weakness </span><span class="badge badge-primary pull-right">Closed</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span> At vero eos et accusamus et iusto </span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (10)</span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 xl-50 col-md-6">
									<div class="browse-articles browse-bottom">
										<h6><span><i data-feather="archive"></i></span>Quick Questions are answered</h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Quis autem vel eum iure reprehenderit  </span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Ducimus  blanditiis praesentium voluptatum</span><span class="badge badge-primary pull-right">Popular</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Omnis voluptas assumenda est</span><span class="badge badge-primary pull-right">Review</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Produces no resultant pleasure</span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (21)</span></a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 xl-100">
									<div class="browse-articles browse-bottom">
										<h6><span><i data-feather="archive"></i></span>Integrating WordPress with Your Website</h6>
										<ul>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Lorem Ipsum passage, and going through</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>The first line of Lorem Ipsum,  Lorem ipsum </span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>Thus comes from a line in section</span></a></li>
											<li><a href="#"><span><i data-feather="file-text"></i></span><span>First true generator on the Internet</span><span class="badge badge-primary pull-right">On hold</span></a></li>
											<li><a href="#"><span><i data-feather="arrow-right"></i></span><span>See More (34)</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="header-faq">
				<h5 class="mb-0">Featured Tutorials</h5>
			</div>
			<div class="row">
				<div class="col-xl-3 xl-50 col-md-6">
					<div class="card features-faq product-box">
						<div class="faq-image product-img">
							<img class="img-fluid" src="{{asset('assets/images/faq/1.jpg')}}" alt="">
							<div class="product-hover">
								<ul>
									<li><i class="icon-link"></i></li>
									<li><i class="icon-import"></i></li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<h6> Web Design</h6>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
						<div class="card-footer"><span>Dec 15, 2019</span><span class="pull-right"><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i></span></div>
					</div>
				</div>
				<div class="col-xl-3 xl-50 col-md-6">
					<div class="card features-faq product-box">
						<div class="faq-image product-img">
							<img class="img-fluid" src="{{asset('assets/images/faq/2.jpg')}}" alt="">
							<div class="product-hover">
								<ul>
									<li><i class="icon-link"></i></li>
									<li><i class="icon-import"></i></li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<h6>Web Development</h6>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
						<div class="card-footer"><span>Dec 15, 2019</span><span class="pull-right"><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star-o font-primary"></i></span></div>
					</div>
				</div>
				<div class="col-xl-3 xl-50 col-md-6">
					<div class="card features-faq product-box">
						<div class="faq-image product-img">
							<img class="img-fluid" src="{{asset('assets/images/faq/3.jpg')}}" alt="">
							<div class="product-hover">
								<ul>
									<li><i class="icon-link"></i></li>
									<li><i class="icon-import"></i></li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<h6>UI Design</h6>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
						<div class="card-footer"><span>Dec 15, 2019</span><span class="pull-right"><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i></span></div>
					</div>
				</div>
				<div class="col-xl-3 xl-50 col-md-6">
					<div class="card features-faq product-box">
						<div class="faq-image product-img">
							<img class="img-fluid" src="{{asset('assets/images/faq/4.jpg')}}" alt="">
							<div class="product-hover">
								<ul>
									<li><i class="icon-link"></i></li>
									<li><i class="icon-import"></i></li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<h6> UX Design</h6>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
						<div class="card-footer"><span>Dec 15, 2019</span><span class="pull-right"><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star font-primary"></i><i class="fa fa-star-half-o font-primary"></i></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="header-faq">
				<h5 class="mb-0">Latest articles and videos</h5>
			</div>
			<div class="row">
				<div class="col-xl-4 col-md-6">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="codepen"></i>
										<div class="media-body">
											<h6 class="f-w-600">Using Video</h6>
											<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="codepen"></i>
										<div class="media-body">
											<h6 class="f-w-600">Vel illum qu</h6>
											<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="codepen"></i>
										<div class="media-body">
											<h6 class="f-w-600"> Cum sociis natoqu</h6>
											<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="file-text"></i>
										<div class="media-body">
											<h6 class="f-w-600"> Donec pede justo</h6>
											<p> Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="file-text"></i>
										<div class="media-body">
											<h6 class="f-w-600"> Nam quam nunc</h6>
											<p> Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="file-text"></i>
										<div class="media-body">
											<h6 class="f-w-600">Using Video </h6>
											<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="row">
						<div class="col-xl-12 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="youtube"></i>
										<div class="media-body">
											<h6 class="f-w-600"> Vel illum qu</h6>
											<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="youtube"></i>
										<div class="media-body">
											<h6 class="f-w-600"> Cum sociis natoqu</h6>
											<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<i class="m-r-30" data-feather="youtube"></i>
										<div class="media-body">
											<h6 class="f-w-600">Donec pede justo</h6>
											<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
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
@endsection

@section('script')
@endsection
@extends('layouts.simple.master')
@section('title', 'Basic Card')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Basic Card</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Bonus Ui</li>
<li class="breadcrumb-item active">Basic Card</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header">
					<h5>Basic Card</h5>
					<div class="card-header-right">
						<ul class="list-unstyled card-option">
							<li><i class="fa fa-spin fa-cog"></i></li>
							<li><i class="view-html fa fa-code"></i></li>
							<li><i class="icofont icofont-maximize full-card"></i></li>
							<li><i class="icofont icofont-minus minimize-card"></i></li>
							<li><i class="icofont icofont-refresh reload-card"></i></li>
							<li><i class="icofont icofont-error close-card"></i></li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
					<div class="code-box-copy">
						<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
						<pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;p class="mb-0"&gt; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. &lt;/p&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card b-r-0">
				<div class="card-header">
					<h5>Flat Card</h5>
					<div class="card-header-right">
						<ul class="list-unstyled card-option">
							<li><i class="fa fa-spin fa-cog"></i></li>
							<li><i class="view-html fa fa-code"></i></li>
							<li><i class="icofont icofont-maximize full-card"></i></li>
							<li><i class="icofont icofont-minus minimize-card"></i></li>
							<li><i class="icofont icofont-refresh reload-card"></i></li>
							<li><i class="icofont icofont-error close-card"></i></li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
					<div class="code-box-copy">
						<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
						<pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;p class="mb-0"&gt; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. &lt;/p&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card shadow-0 border">
				<div class="card-header">
					<h5>Without shadow Card</h5>
				</div>
				<div class="card-body">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header">
					<h5><i class="icofont icofont-truck me-2"></i> Icon in Heading</h5>
				</div>
				<div class="card-body">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card height-equal">
				<div class="card-header">
					<h5>Card sub Title</h5>
					<span>Using the <a href="#">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
				</div>
				<div class="card-body">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card height-equal">
				<div class="card-header">
					<h5>Card With Footer</h5>
				</div>
				<div class="card-body">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the the industry's standard dummy text ever.</p>
				</div>
				<div class="card-footer">
					<h6 class="mb-0">Card Footer</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header bg-primary">
					<h5 class="text-white">Primary Color Card</h5>
				</div>
				<div class="card-body bg-primary">
					<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
				</div>
				<div class="card-footer bg-primary">
					<h6 class="mb-0">Card Footer</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header bg-secondary">
					<h5 class="text-white">Secondary Color Card</h5>
				</div>
				<div class="card-body bg-secondary">
					<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
				</div>
				<div class="card-footer bg-secondary">
					<h6 class="mb-0 text-white">Card Footer</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header bg-success">
					<h5 class="text-white">Success color Card</h5>
				</div>
				<div class="card-body bg-success">
					<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
				</div>
				<div class="card-footer bg-success">
					<h6 class="mb-0">Card Footer</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header bg-primary">
					<h5 class="text-white">Primary Color Header</h5>
				</div>
				<div class="card-body">
					<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
				</div>
				<div class="card-footer">
					<h6 class="mb-0">Card Footer</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header">
					<h5>Primary Color Body</h5>
				</div>
				<div class="card-body bg-primary">
					<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
				</div>
				<div class="card-footer">
					<h6 class="mb-0">Card Footer</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="card">
				<div class="card-header">
					<h5>Primary Color Footer</h5>
				</div>
				<div class="card-body">
					<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
				</div>
				<div class="card-footer bg-primary">
					<h6 class="mb-0">Card Footer</h6>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>
@endsection


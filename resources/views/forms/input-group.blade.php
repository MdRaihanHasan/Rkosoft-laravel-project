@extends('layouts.simple.master')
@section('title', 'Input groups')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Input groups</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">Input groups</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Basic Input groups</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
							<form>
								<div class="mb-3 m-form__group">
									<label>Left Addon</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend"><span class="input-group-text">@</span></div>
										<input class="form-control" type="text" placeholder="Email">
									</div>
								</div>
								<div class="mb-3">
									<label>Right Addon</label>
									<div class="input-group mb-3">
										<input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username">
										<div class="input-group-append"><span class="input-group-text">@example.com</span></div>
									</div>
								</div>
								<div class="mb-3">
									<label>Joint Addon</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend d-flex"><span class="input-group-text">$</span><span class="input-group-text">0.00</span></div>
										<input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
									</div>
								</div>
								<div class="mb-3 mb-0">
									<label>Left & Right Addon</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend"><span class="input-group-text">$</span></div>
										<input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
										<div class="input-group-append"><span class="input-group-text">.00</span></div>
									</div>
								</div>
								<div class="mb-3 input-group-solid">
									<label>Solid style</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend"><span class="input-group-text">@</span></div>
										<input class="form-control" type="text" placeholder="Email">
									</div>
								</div>
								<div class="mb-3 input-group-square">
									<label>Square style</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend"><span class="input-group-text">+</span></div>
										<input class="form-control" type="text" placeholder="Email">
									</div>
								</div>
								<div class="mb-3 input-group-square">
									<label>Raise style</label>
									<div class="input-group input-group-air mb-3">
										<div class="input-group-prepend"><span class="input-group-text">#</span></div>
										<input class="form-control" type="text" placeholder="Email">
									</div>
								</div>
								<div class="mb-3 mb-0">
									<label>Left & Right Addon</label>
									<div class="input-group pill-input-group mb-3">
										<div class="input-group-prepend"><span class="input-group-text">$</span></div>
										<input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
										<div class="input-group-append"><span class="input-group-text">.00</span></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary" type="submit">Submit</button>
					<button class="btn btn-light" type="submit">Cancel</button>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Basic Input groups</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
							<form>
								<div class="mb-3 m-form__group">
									<label>Left Addon</label>
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-pencil-alt-5"></i></span></div>
										<input class="form-control" type="text" placeholder="Email">
									</div>
								</div>
								<div class="mb-3">
									<label>Right Addon</label>
									<div class="input-group">
										<input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username">
										<div class="input-group-append"><span class="input-group-text"><i class="icofont icofont-ui-dial-phone"></i></span></div>
									</div>
								</div>
								<div class="mb-3">
									<label>Joint Addon</label>
									<div class="input-group">
										<div class="input-group-prepend d-flex"><span class="input-group-text"><i class="icofont icofont-unlink"></i></span><span class="input-group-text">0.00</span></div>
										<input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
									</div>
								</div>
								<div class="mb-3">
									<label>Left & Right Addon</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-ui-zoom-out"></i></span></div>
										<input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
										<div class="input-group-append"><span class="input-group-text"><i class="icofont icofont-ui-zoom-in"></i></span></div>
									</div>
								</div>
								<div class="mb-3 input-group-solid">
									<label>Solid style</label>
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-users"></i></span></div>
										<input class="form-control" type="text" placeholder="999999">
									</div>
								</div>
								<div class="mb-3 input-group-square">
									<label>Flat style</label>
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-credit-card"></i></span></div>
										<input class="form-control" type="text" placeholder="">
									</div>
								</div>
								<div class="mb-3 input-group-square">
									<label>Raise style</label>
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-download"></i></span></div>
										<input class="form-control input-group-air" type="text" placeholder="https://www.example.com">
									</div>
								</div>
								<div class="mb-3 mb-0">
									<label>Left & Right Addon</label>
									<div class="input-group pill-input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-ui-copy"></i></span></div>
										<input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
										<div class="input-group-append"><span class="input-group-text"><i class="icofont icofont-stock-search"></i></span></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary" type="submit">Submit</button>
					<button class="btn btn-light" type="submit">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection
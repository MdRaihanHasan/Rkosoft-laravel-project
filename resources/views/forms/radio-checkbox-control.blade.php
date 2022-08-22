@extends('layouts.simple.master')
@section('title', 'Checkbox & Radio')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Checkbox & Radio</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">Checkbox & Radio</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5>Custom Radio</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<h5>Custom Radio</h5>
						</div>
						<div class="col">
							<div class="mb-3 m-t-15 custom-radio-ml">
								<div class="form-check radio radio-primary">
									<input class="form-check-input" id="radio1" type="radio" name="radio1" value="option1">
									<label class="form-check-label" for="radio1">Option<span class="digits"> 1</span></label>
								</div>
								<div class="form-check radio radio-primary">
									<input class="form-check-input" id="radio3" type="radio" name="radio1" value="option1" disabled="">
									<label class="form-check-label" for="radio3">Disabled</label>
								</div>
								<div class="form-check radio radio-primary">
									<input class="form-check-input" id="radio4" type="radio" name="radio1" value="option1" checked="">
									<label class="form-check-label" for="radio4">Checked</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<h5>Radio states</h5>
						</div>
						<div class="col">
							<div class="mb-3 m-t-15 custom-radio-ml">
								<div class="form-check radio radio-primary">
									<input class="form-check-input" id="radio11" type="radio" name="radio1" value="option1">
									<label class="form-check-label" for="radio11">Option<span class="digits"> 1</span></label>
								</div>
								<div class="form-check radio radio-secondary">
									<input class="form-check-input" id="radio22" type="radio" name="radio1" value="option1">
									<label class="form-check-label" for="radio22">Option<span class="digits"> 2</span></label>
								</div>
								<div class="form-check radio radio-success">
									<input class="form-check-input" id="radio55" type="radio" name="radio1" value="option1">
									<label class="form-check-label" for="radio55">Option<span class="digits"> 3</span></label>
								</div>
								<div class="form-check radio radio-info">
									<input class="form-check-input" id="radio33" type="radio" name="radio1" value="option1" disabled="">
									<label class="form-check-label" for="radio33">Option<span class="digits"> 4</span></label>
								</div>
								<div class="form-check radio radio-warning">
									<input class="form-check-input" id="radio44" type="radio" name="radio1" value="option1">
									<label class="form-check-label" for="radio44">Option<span class="digits"> 5</span></label>
								</div>
								<div class="form-check radio radio-danger">
									<input class="form-check-input" id="radio66" type="radio" name="radio1" value="option1" checked="">
									<label class="form-check-label" for="radio66">Option<span class="digits"> 6</span></label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<h5>Inline checkbox</h5>
						</div>
						<div class="col">
							<div class="m-t-15 m-checkbox-inline custom-radio-ml">
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline1" type="radio" name="radio1" value="option1">
									<label class="form-check-label mb-0" for="radioinline1">Option<span class="digits"> 1</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline2" type="radio" name="radio1" value="option1">
									<label class="form-check-label mb-0" for="radioinline2">Option<span class="digits"> 2</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline3" type="radio" name="radio1" value="option1">
									<label class="form-check-label mb-0" for="radioinline3">Option<span class="digits"> 3</span></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5>Custom checkbox</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="mb-0">Custom checkbox</h5>
						</div>
						<div class="col">
							<div class="mb-3 m-t-15">
								<div class="form-check checkbox mb-0">
									<input class="form-check-input" id="checkbox1" type="checkbox">
									<label class="form-check-label" for="checkbox1">Default</label>
								</div>
								<div class="form-check checkbox mb-0">
									<input class="form-check-input" id="checkbox2" type="checkbox" disabled="">
									<label class="form-check-label" for="checkbox2">Disabled</label>
								</div>
								<div class="form-check checkbox mb-0">
									<input class="form-check-input" id="checkbox3" type="checkbox" checked="">
									<label class="form-check-label" for="checkbox3">Checked</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<h5 class="mb-0">Checkbox states</h5>
						</div>
						<div class="col">
							<div class="mb-3 m-t-15">
								<div class="form-check checkbox checkbox-primary mb-0">
									<input class="form-check-input" id="checkbox-primary-1" type="checkbox">
									<label class="form-check-label" for="checkbox-primary-1">Success state</label>
								</div>
								<div class="form-check checkbox checkbox-secondary mb-0">
									<input class="form-check-input" id="checkbox-dark" type="checkbox" disabled="">
									<label class="form-check-label" for="checkbox-dark">Brand state</label>
								</div>
								<div class="form-check checkbox checkbox-success mb-0">
									<input class="form-check-input" id="checkbox-primary" type="checkbox">
									<label class="form-check-label" for="checkbox-primary">primary state</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<h5 class="mb-0">Inline checkbox</h5>
						</div>
						<div class="col">
							<div class="m-t-15 m-checkbox-inline">
								<div class="form-check form-check-inline checkbox checkbox-dark mb-0">
									<input class="form-check-input" id="inline-1" type="checkbox">
									<label class="form-check-label" for="inline-1">Option<span class="digits"> 1</span></label>
								</div>
								<div class="form-check form-check-inline checkbox checkbox-dark mb-0">
									<input class="form-check-input" id="inline-2" type="checkbox">
									<label class="form-check-label" for="inline-2">Option<span class="digits"> 2</span></label>
								</div>
								<div class="form-check form-check-inline checkbox checkbox-dark mb-0">
									<input class="form-check-input" id="inline-3" type="checkbox">
									<label class="form-check-label" for="inline-3">Option<span class="digits"> 3</span></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5>Animated radio buttons</h5>
				</div>
				<div class="card-body animate-chk">
					<div class="row">
						<div class="col">
							<label class="d-block" for="edo-ani">
							<input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">                                                Option 1
							</label>
							<label class="d-block" for="edo-ani1">
							<input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">                                                Option 2
							</label>
							<label class="d-block" for="edo-ani2">
							<input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">                                                Option 3
							</label>
							<label class="d-block" for="edo-ani13">
							<input class="radio_animated" id="edo-ani13" type="radio" name="rdo-ani">                                                Option 4
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5>Animated checkbox buttons</h5>
				</div>
				<div class="card-body animate-chk">
					<div class="row">
						<div class="col">
							<label class="d-block" for="chk-ani">
							<input class="checkbox_animated" id="chk-ani" type="checkbox" checked="">                                                Option 1
							</label>
							<label class="d-block" for="chk-ani1">
							<input class="checkbox_animated" id="chk-ani1" type="checkbox">                                                Option 2
							</label>
							<label class="d-block" for="chk-ani2">
							<input class="checkbox_animated" id="chk-ani2" type="checkbox" checked="">                                                Option 3
							</label>
							<label class="d-block" for="chk-ani3">
							<input class="checkbox_animated" id="chk-ani3" type="checkbox">                                                Option 4
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5>Square checkbox</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
							<div class="mb-3">
								<div class="checkbox checkbox-dark m-squar">
									<input id="inline-sqr-1" type="checkbox">
									<label class="mt-0" for="inline-sqr-1">Default</label>
								</div>
								<div class="checkbox checkbox-dark m-squar">
									<input id="inline-sqr-2" type="checkbox" disabled="">
									<label for="inline-sqr-2">Disabled</label>
								</div>
								<div class="checkbox checkbox-dark m-squar">
									<input id="inline-sqr-3" type="checkbox" checked="">
									<label for="inline-sqr-3">checked</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<h5>Solid checkbox</h5>
						</div>
						<div class="col">
							<div class="m-t-15">
								<div class="form-check checkbox checkbox-solid-success">
									<input class="form-check-input" id="solid1" type="checkbox">
									<label class="form-check-label" for="solid1">Default</label>
								</div>
								<div class="form-check checkbox checkbox-solid-dark">
									<input class="form-check-input" id="solid2" type="checkbox" disabled="">
									<label class="form-check-label" for="solid2">Disabled</label>
								</div>
								<div class="form-check checkbox checkbox-solid-primary">
									<input class="form-check-input" id="solid3" type="checkbox" checked="">
									<label class="form-check-label" for="solid3">checked</label>
								</div>
								<div class="form-check checkbox checkbox-solid-danger">
									<input class="form-check-input" id="solid4" type="checkbox" checked="">
									<label class="form-check-label" for="solid4">checked</label>
								</div>
								<div class="form-check checkbox checkbox-solid-light">
									<input class="form-check-input" id="solid5" type="checkbox" checked="">
									<label class="form-check-label" for="solid5">checked</label>
								</div>
								<div class="form-check checkbox checkbox-solid-info">
									<input class="form-check-input" id="solid6" type="checkbox" checked="">
									<label class="form-check-label" for="solid6">checked</label>
								</div>
								<div class="form-check checkbox checkbox-solid-dark">
									<input class="form-check-input" id="solid7" type="checkbox" checked="">
									<label class="form-check-label mb-0" for="solid7">checked</label>
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
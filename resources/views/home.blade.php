@extends('layouts.app')



@extends('layouts.simple.master')
@section('title', 'File Manager')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>File Manager</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Apps</li>
<li class="breadcrumb-item">File Manager</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-3 box-col-6 pe-0">
      <div class="file-sidebar">
        <div class="card">
          <div class="card-body">
          </div>
        </div>
      </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/icons/feather-icon/feather-icon-clipart.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
@endsection


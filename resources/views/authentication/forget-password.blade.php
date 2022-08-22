@extends('layouts.authentication.master')
@section('title', 'Forget-password')

@section('css')
@endsection

@section('style')
@endsection


@section('content')
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
   <div class="container-fluid p-0">
      <div class="row">
         <div class="col-12">
            <div class="login-card">
               <div>
                  <div><a class="logo" href="{{ route('index') }}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/login.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
                  <div class="login-main">
                     <form class="theme-form">
                        <h4>Reset Your Password</h4>
                        <div class="form-group">
                           <label class="col-form-label">Enter Your Mobile Number</label>
                           <div class="row">
                              <div class="col-4 col-sm-3">
                                 <input class="form-control mb-1" type="text" value="+ 91">
                              </div>
                              <div class="col-8 col-sm-9">
                                 <input class="form-control mb-1" type="tel" value="000-000-0000">
                              </div>
                              <div class="col-12">
                                 <button class="btn btn-primary btn-block m-t-10" type="submit">Send</button>
                              </div>
                           </div>
                        </div>
                        <div class="mt-4 mb-4"><span class="reset-password-link">If don't receive OTP?  <a class="btn-link text-danger" href="#">Resend</a></span></div>
                        <div class="form-group">
                           <label class="col-form-label pt-0">Enter OTP</label>
                           <div class="row">
                              <div class="col">
                                 <input class="form-control text-center opt-text" type="text" value="00" maxlength="2">
                              </div>
                              <div class="col">
                                 <input class="form-control text-center opt-text" type="text" value="00" maxlength="2">
                              </div>
                              <div class="col">
                                 <input class="form-control text-center opt-text" type="text" value="00" maxlength="2">
                              </div>
                           </div>
                        </div>
                        <h6 class="mt-4">Create Your Password</h6>
                        <div class="form-group">
                           <label class="col-form-label">New Password</label>
                           <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                           <div class="show-hide"><span class="show"></span></div>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Retype Password</label>
                           <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                        </div>
                        <div class="form-group mb-0">
                           <div class="checkbox p-0">
                              <input id="checkbox1" type="checkbox">
                              <label class="text-muted" for="checkbox1">Remember password</label>
                           </div>
                           <button class="btn btn-primary btn-block" type="submit">Done                          </button>
                        </div>
                        <p class="mt-4 mb-0">Already have an password?<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
@endsection
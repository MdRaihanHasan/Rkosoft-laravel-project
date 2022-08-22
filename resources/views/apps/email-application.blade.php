@extends('layouts.simple.master')
@section('title', 'Email Application')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Email Application</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Email</li>
<li class="breadcrumb-item active">Email Application</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="email-wrap">
      <div class="row">
         <div class="col-xl-3 col-md-6 box-col-6">
            <div class="email-left-aside">
               <div class="card">
                  <div class="card-body">
                     <div class="email-app-sidebar">
                        <div class="media">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              <h6 class="f-w-600">MARKJENCO</h6>
                              <p>Markjecno@gmail.com</p>
                           </div>
                        </div>
                        <ul class="nav main-menu" role="tablist">
                           <li class="nav-item"><a class="btn-primary btn-block btn-mail" id="pills-darkhome-tab" data-bs-toggle="pill" href="#pills-darkhome" role="tab" aria-controls="pills-darkhome" aria-selected="true"><i class="icofont icofont-envelope me-2"></i> NEW MAIL</a></li>
                           <li class="nav-item"><a class="show" id="pills-darkprofile-tab" data-bs-toggle="pill" href="#pills-darkprofile" role="tab" aria-controls="pills-darkprofile" aria-selected="false"><span class="title"><i class="icon-import"></i> Inbox</span><span class="badge pull-right digits">(236)</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-folder"></i> All mail</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-new-window"></i> Sent</span><span class="badge pull-right digits">(69)</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-pencil-alt"></i> DRAFT</span><span class="badge pull-right digits">(59)</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-trash"></i> TRASH</span><span class="badge pull-right digits">(99)</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-info-alt"></i> IMPORTANT</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-star"></i> Starred</span></a></li>
                           <li>
                              <hr>
                           </li>
                           <li><a href="#"><span class="title"><i class="icon-email"></i> UNREAD</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-export"></i> SPAM</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-share"></i> OUTBOX</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-file"></i> UPDATE</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-bell"></i> ALERT</span></a></li>
                           <li><a href="#"><span class="title"><i class="icon-notepad"></i> NOTES</span><span class="badge pull-right digits">(20)</span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 box-col-6">
            <div class="email-right-aside">
               <div class="card email-body">
                  <div class="pe-0 b-r-light">
                     <div class="email-top">
                        <div class="row">
                           <div class="col">
                              <h5>Inbox</h5>
                           </div>
                           <div class="col text-end">
                              <div class="dropdown">
                                 <button class="btn bg-transparent dropdown-toggle p-0 text-muted" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="inbox">
                        <div class="media">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              <h6>Pork Lorn  <small><span class="digits">(15</span> July <span class="digits">2018)</span></small></h6>
                              <p>Mattis luctus. Donec nisi diam,</p>
                           </div>
                        </div>
                        <div class="media active">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              <h6>Lorm lpsa  <small><span class="digits">(20</span> January)</small></h6>
                              <p>Mattis luctus. Donec nisi diam,</p>
                           </div>
                        </div>
                        <div class="media">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              <h6>Hileri makr  <small><span class="digits">(20</span> Aug<span class="digits"> 2018)</span></small></h6>
                              <p>Mattis luctus. Donec nisi diam,</p>
                           </div>
                        </div>
                        <div class="media">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              <h6>Lion Lorpa  <small><span class="digits">(02</span> Jun <span class="digits">2016)</span></small></h6>
                              <p>Mattis luctus. Donec nisi diam,</p>
                           </div>
                        </div>
                        <div class="media">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              <h6 class="mt-0">Solvn Relto  <small><span class="digits">(25</span> July <span class="digits">2015)</span></small></h6>
                              <p>Mattis luctus. Donec nisi diam,</p>
                           </div>
                        </div>
                        <div class="media">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              <h6>Repro Soft  <small><span class="digits">(15</span> July <span class="digits">2018)</span></small></h6>
                              <p>Mattis luctus. Donec nisi diam,</p>
                           </div>
                        </div>
                        <div class="media">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              <h6>Lion Lorpa  <small><span class="digits">(02</span> Jun <span class="digits">2016)</span></small></h6>
                              <p>Mattis luctus. Donec nisi diam,</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-md-12 box-col-12">
            <div class="email-right-aside">
               <div class="card email-body radius-left">
                  <div class="ps-0">
                     <div class="tab-content">
                        <div class="tab-pane fade" id="pills-darkhome" role="tabpanel" aria-labelledby="pills-darkhome-tab">
                           <div class="email-compose">
                              <div class="email-top compose-border">
                                 <div class="row">
                                    <div class="col-sm-8 xl-50">
                                       <h4 class="mb-0">New Message</h4>
                                    </div>
                                    <div class="col-sm-4 btn-middle xl-50">
                                       <button class="btn btn-primary btn-block btn-mail text-center mb-0 mt-0" type="button"><i class="fa fa-paper-plane me-2"></i> SEND</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="email-wrapper">
                                 <form class="theme-form">
                                    <div class="mb-3">
                                       <label class="col-form-label pt-0" for="exampleInputEmail1">To</label>
                                       <input class="form-control" id="exampleInputEmail1" type="email">
                                    </div>
                                    <div class="mb-3">
                                       <label for="exampleInputPassword1">Subject</label>
                                       <input class="form-control" id="exampleInputPassword1" type="text">
                                    </div>
                                    <div class="mb-3 mb-0">
                                       <label class="text-muted">Message</label>
                                       <textarea id="text-box" name="text-box" cols="10" rows="2">                                                            </textarea>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade active show" id="pills-darkprofile" role="tabpanel" aria-labelledby="pills-darkprofile-tab">
                           <div class="email-content">
                              <div class="email-top">
                                 <div class="row">
                                    <div class="col-md-6 xl-100 col-sm-12">
                                       <div class="media">
                                          <img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="">
                                          <div class="media-body">
                                             <h6>Lorm lpsa  <small><span class="digits">(20</span> January) <span class="digits">6:00</span> AM</small></h6>
                                             <p>Mattis luctus. Donec nisi diam text.</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                       <div class="float-end d-flex">
                                          <p class="user-emailid">Lormlpsa<span class="digits">23</span>@company.com</p>
                                          <i class="fa fa-star-o f-18 mt-1"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="email-wrapper">
                                 <p>Hello</p>
                                 <p>Dear Sir Good Morning,</p>
                                 <h5>Elementum varius nisi vel tempus. Donec eleifend egestas viverra.</h5>
                                 <p class="m-b-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non diam facilisis, commodo libero et, commodo sapien. Pellentesque sollicitudin massa sagittis dolor facilisis, sit amet vulputate nunc molestie. Pellentesque maximus nibh id luctus porta. Ut consectetur dui nec nulla mattis luctus. Donec nisi diam, congue vitae felis at, ullamcorper bibendum tortor. Vestibulum pellentesque felis felis. Etiam ac tortor felis. Ut elit arcu, rhoncus in laoreet vel, gravida sed tortor.</p>
                                 <p>In elementum varius nisi vel tempus. Donec eleifend egestas viverra. Donec dapibus sollicitudin blandit. Donec scelerisque purus sit amet feugiat efficitur. Quisque feugiat semper sapien vel hendrerit. Mauris lacus felis, consequat nec pellentesque viverra, venenatis a lorem. Sed urna lectus.Quisque feugiat semper sapien vel hendrerit</p>
                                 <hr>
                                 <div class="d-inline-block">
                                    <h6 class="text-muted"><i class="icofont icofont-clip"></i> ATTACHMENTS</h6>
                                    <a class="text-muted text-end right-download" href="#"><i class="fa fa-long-arrow-down me-2"></i>Download All</a>
                                    <div class="clearfix"></div>
                                 </div>
                                 <div class="attachment">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/1.jpg')}}" alt=""></li>
                                       <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/2.jpg')}}" alt=""></li>
                                       <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/3.jpg')}}" alt=""></li>
                                    </ul>
                                 </div>
                                 <hr>
                                 <div class="action-wrapper">
                                    <ul class="actions">
                                       <li><a class="text-muted" href="#"><i class="fa fa-reply me-2"></i>Reply</a></li>
                                       <li><a class="text-muted" href="#"><i class="fa fa-reply-all me-2"></i>Reply All</a></li>
                                       <li><a class="text-muted" href="#"><i class="fa fa-share me-2"></i></a>Forward</li>
                                    </ul>
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
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
@endsection
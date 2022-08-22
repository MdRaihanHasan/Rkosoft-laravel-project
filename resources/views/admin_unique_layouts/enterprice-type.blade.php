<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Cuba - Premium Admin Template - Singapore</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper horizontal-wrapper enterprice-type" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                  <i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <ul class="horizontal-menu">
              <li class="mega-menu outside">
                <a class="nav-link" href="#!"><i data-feather="layers"></i><span>Bonus Ui</span></a>
                <div class="mega-menu-container nav-submenu menu-to-be-close header-mega">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col mega-box">
                        <div class="mobile-title d-none">
                          <h5>Mega menu</h5>
                          <i data-feather="x"></i>
                        </div>
                        <div class="link-section icon">
                          <div>
                            <h6>Error Page</h6>
                          </div>
                          <ul>
                            <li><a href="#">Error page 400</a></li>
                            <li><a href="#">Error page 401</a></li>
                            <li><a href="#">Error page 403</a></li>
                            <li><a href="#">Error page 404</a></li>
                            <li><a href="#">Error page 500</a></li>
                            <li><a href="#">Error page 503</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section doted">
                          <div>
                            <h6> Authentication</h6>
                          </div>
                          <ul>
                            <li><a href="#">Login Simple</a></li>
                            <li><a href="#">Login Bg Image</a></li>
                            <li><a href="#">Login Bg video</a></li>
                            <li><a href="#">Register Simple</a></li>
                            <li><a href="#">Register Bg Image</a></li>
                            <li><a href="#">Register Bg video</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section dashed-links">
                          <div>
                            <h6>Usefull Pages</h6>
                          </div>
                          <ul>
                            <li><a href="#">Search Website                                     </a></li>
                            <li><a href="#">Unlock User</a></li>
                            <li><a href="#">Forget Password</a></li>
                            <li><a href="#">Reset Password</a></li>
                            <li><a href="#">Maintenance</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Email templates</h6>
                          </div>
                          <ul>
                            <li><a href="#">Basic Email</a></li>
                            <li><a href="#">Basic With Header</a></li>
                            <li><a href="#">Ecomerce Template</a></li>
                            <li><a href="#">Email Template 2</a></li>
                            <li><a href="#">Ecommerce Email</a></li>
                            <li><a href="#">Order Success</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Coming Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a href="#"> <i data-feather="file"> </i>Coming-soon</a></li>
                            <li><a href="#"> <i data-feather="film"> </i>Coming-video</a></li>
                            <li><a href="#"><i data-feather="image"> </i>Coming-Image</a></li>
                          </ul>
                          <div>
                            <h6>Other Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a class="txt-primary" href="#"> <i data-feather="cast"></i>Landing Page</a></li>
                            <li><a class="txt-secondary" href="#"> <i data-feather="airplay"></i>Sample Page</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="level-menu outside">
                <a class="nav-link" href="#!"><i data-feather="inbox"></i><span>Level Menu</span></a>
                <ul class="header-level-menu menu-to-be-close">
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="git-pull-request"></i><span>File manager    </span></a></li>
                  <li>
                    <a href="#!" data-original-title="" title="">                               <i data-feather="users"></i><span>Users</span></a>
                    <ul class="header-level-sub-menu">
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user"></i><span>User Profile</span></a></li>
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user-minus"></i><span>User Edit</span></a></li>
                      <li><a href="#" data-original-title="" title="">                               <i data-feather="user-check"></i><span>Users Cards</span></a></li>
                    </ul>
                  </li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="airplay"></i><span>Kanban Board</span></a></li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="heart"></i><span>Bookmark</span></a></li>
                  <li><a href="#" data-original-title="" title="">                               <i data-feather="zap"></i><span>Social App                     </span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li>                         <span class="header-search"><i data-feather="search"></i></span></li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4                                </span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <i data-feather="bell"></i>
                    <h6 class="f-18 mb-0">Notitications</h6>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                  </li>
                  <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="star"></i></div>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <ul class="droplet-dropdown bookmark-dropdown">
                          <li class="gradient-primary">
                            <i data-feather="star"></i>
                            <h6 class="f-18 mb-0">Bookmark</h6>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><i data-feather="file-text"></i></div>
                              <div class="col-4 text-center"><i data-feather="activity"></i></div>
                              <div class="col-4 text-center"><i data-feather="users"></i></div>
                              <div class="col-4 text-center"><i data-feather="clipboard"></i></div>
                              <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                              <div class="col-4 text-center"><i data-feather="settings"></i></div>
                            </div>
                          </li>
                          <li class="text-center">
                            <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                          </li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li>
                            <button class="d-block flip-back" id="flip-back">Back</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge rounded-pill badge-primary">2</span></div>
                <ul class="cart-dropdown onhover-show-div">
                  <li>
                    <h6 class="mb-0 f-20">Shoping Bag</h6>
                    <i data-feather="shopping-cart"></i>
                  </li>
                  <li class="mt-0">
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3 img-60" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt="">
                      <div class="media-body">
                        <span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                            <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                            <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li class="mt-0">
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3 img-60" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                      <div class="media-body">
                        <span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                            <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                            <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="total">
                      <h6 class="mb-2 mt-0 text-muted">Order Total : <span class="f-right f-20">$598.00</span></h6>
                    </div>
                  </li>
                  <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart" href="#">Go to shoping bag</a><a class="btn btn-block w-100 btn-secondary view-cart" href="#">Checkout</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <i data-feather="message-square"></i>
                    <h6 class="f-18 mb-0">Message Box                                    </h6>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body">
                        <span>Erica Hughes</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/2.jpg')}}" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body">
                        <span>Kori Thomas</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">1 hr ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                      <div class="status-circle offline"></div>
                      <div class="media-body">
                        <span>Ain Chavez</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-danger">32 mins ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="btn btn-primary" href="#">View All     </a></li>
                </ul>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="media profile-media">
                  <img class="b-r-10" src="{{asset('assets/images/dashboard/profile.jpg')}}" alt="">
                  <div class="media-body">
                    <span>Emay Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">@{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends  -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper">
              <a href="{{route('/')}}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">{{ trans('lang.General') }}  </h6>
                                <p class="lan-2">{{ trans('lang.Dashboards,widgets & layout.') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="#"><i data-feather="home"></i><span class="lan-3">{{ trans('lang.Dashboards') }}</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4 {{ Route::currentRouteName()=='index' ? 'active' : '' }}" href="{{route('index')}}">{{ trans('lang.Default') }}</a></li>
                      <li><a class="lan-5 {{ Route::currentRouteName()=='dashboard-02' ? 'active' : '' }}" href="{{route('dashboard-02')}}">{{ trans('lang.Ecommerce') }}</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title" href="#"><i data-feather="airplay"></i><span class="lan-6">{{ trans('lang.Widgets') }}</span>
                        <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/widgets' ? 'down' : 'right' }}"></i></div>
                      </a>
                      <ul class="sidebar-submenu" >
                                  <li><a href="{{route('general-widget')}}" class="{{ Route::currentRouteName()=='general-widget' ? 'active' : '' }}">{{ trans('lang.General') }}</a></li>
                                  <li><a href="{{route('chart-widget')}}" class="{{ Route::currentRouteName()=='chart-widget' ? 'active' : '' }}">{{ trans('lang.Chart') }}</a></li>
                                </ul>
                  </li>
                  <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title" href="#"><i data-feather="layout"></i><span class="lan-7">{{ trans('lang.Page layout') }}</span>
                      </a>
                      <ul class="sidebar-submenu">
                          <li><a href="{{ route('box-layout') }}" class="{{ Route::currentRouteName() == 'box-layout' ? 'active' : '' }}">Boxed</a></li>
                          <li><a href="{{ route('layout-rtl') }}" class="{{ Route::currentRouteName() == 'layout-rtl' ? 'active' : '' }}">RTL</a></li>
                          <li><a href="{{ route('layout-dark') }}" class="{{ Route::currentRouteName() == 'layout-dark' ? 'active fw-bold' : '' }}">Dark Layout</a></li>
                          <li><a href="{{ route('hide-on-scroll') }}" class="{{ Route::currentRouteName() == 'hide-on-scroll' ? 'active' : '' }}">Hide Nav Scroll</a></li>
                          <li><a href="{{ route('footer-light') }}" class="{{ Route::currentRouteName() == 'footer-light' ? 'active' : '' }}">Footer Light</a></li>
                          <li><a href="{{ route('footer-dark') }}" class="{{ Route::currentRouteName() == 'footer-dark' ? 'active' : '' }}">Footer Dark</a></li>
                          <li><a href="{{ route('footer-fixed') }}" class="{{ Route::currentRouteName() == 'footer-fixed' ? 'active' : '' }}">Footer Fixed</a></li>
                      </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">{{ trans('lang.Applications') }}</h6>
                        <p class="lan-9">{{ trans('lang.Ready to use Apps') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-danger">{{ trans('lang.New') }}</label>
                    <a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/project' ? 'active' : '' }}" href="#">
                      <i data-feather="box"></i><span>{{ trans('lang.Project') }} </span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/project' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('projects')}}" class="{{ Route::currentRouteName()=='projects' ? 'active' : '' }}">{{ trans('lang.Project List') }}</a></li>
                        <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">{{ trans('lang.Create new') }}</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='file-manager' ? 'active' : '' }}" href="{{route('file-manager')}}">
                      <i data-feather="git-pull-request"> </i><span>{{ trans('lang.File manager') }}</span>
                    </a>
                  </li>
                  <li class="sidebar-list">  
                    <label class="badge badge-info">{{ trans('lang.Latest') }}</label>
                    <a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='kanban' ? 'active' : '' }}" href="{{route('kanban')}}">
                      <i data-feather="monitor"> </i><span>{{ trans('lang.Kanban Board') }}</span>
                    </a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="shopping-bag"></i><span>{{ trans('lang.Ecommerce') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('product')}}" class="{{ Route::currentRouteName()=='product' ? 'active' : '' }}">Product</a></li>
                        <li><a href="{{route('product-page')}}" class="{{ Route::currentRouteName()=='product-page' ? 'active' : '' }}">Product page</a></li>
                        <li><a href="{{route('list-products')}}" class="{{ Route::currentRouteName()=='list-products' ? 'active' : '' }}">Product list</a></li>
                        <li><a href="{{route('payment-details')}}" class="{{ Route::currentRouteName()=='payment-details' ? 'active' : '' }}">Payment Details</a></li>
                        <li><a href="{{route('order-history')}}" class="{{ Route::currentRouteName()=='order-history' ? 'active' : '' }}">Order History</a></li>
                        <li><a href="{{route('invoice-template')}}" class="{{ Route::currentRouteName()=='invoice-template' ? 'active' : '' }}">Invoice</a></li>
                        <li><a href="{{route('cart')}}" class="{{ Route::currentRouteName()=='cart' ? 'active' : '' }}">Cart</a></li>
                        <li><a href="{{route('list-wish')}}" class="{{ Route::currentRouteName()=='list-wish' ? 'active' : '' }}">Wishlist</a></li>
                        <li><a href="{{route('checkout')}}" class="{{ Route::currentRouteName()=='checkout' ? 'active' : '' }}">Checkout</a></li>
                        <li><a href="{{route('pricing')}}" class="{{ Route::currentRouteName()=='pricing' ? 'active' : '' }}">Pricing</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="mail"></i><span>{{ trans('lang.Email') }}</span>
                      </a>
                      <ul class="sidebar-submenu">
                          <li><a href="{{route('email-application')}}" class="{{ Route::currentRouteName()=='email-application' ? 'active' : '' }}">Email App</a></li>
                          <li><a href="{{route('email-compose')}}" class="{{ Route::currentRouteName()=='email-compose' ? 'active' : '' }}">Email Compose</a></li>
                      </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <i data-feather="message-circle"></i><span>{{ trans('lang.Chat') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('chat')}}">Chat App</a></li>
                      <li><a href="{{route('chat-video')}}" class="{{ Route::currentRouteName()=='chat-video' ? 'active' : '' }}">Video chat</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <i data-feather="users"></i><span>{{ trans('lang.Users') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('user-profile')}}" class="{{ Route::currentRouteName()=='user-profile' ? 'active' : '' }}">Users Profile</a></li>
                        <li><a href="{{route('edit-profile')}}" class="{{ Route::currentRouteName()=='edit-profile' ? 'active' : '' }}">Users Edit</a></li>
                        <li><a href="{{route('user-cards')}}" class="{{ Route::currentRouteName()=='user-cards' ? 'active' : '' }}">Users Cards</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='bookmark' ? 'active' : '' }}" href="{{route('bookmark')}}"><i data-feather="heart"> </i><span>{{ trans('lang.Bookmarks') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='contacts' ? 'active' : '' }}" href="{{route('contacts')}}"><i data-feather="list"> </i><span>{{ trans('lang.Contacts') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='task' ? 'active' : '' }}" href="{{route('task')}}"><i data-feather="check-square"> </i><span>{{ trans('lang.Tasks') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='calendar-basic' ? 'active' : '' }} " href="{{route('calendar-basic')}}"><i data-feather="calendar"> </i><span>{{ trans('lang.Calendar') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='social-app' ? 'active' : '' }}" href="{{route('social-app')}}"><i data-feather="zap"> </i><span>{{ trans('lang.Social App') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='to-do' ? 'active' : '' }}" href="{{route('to-do')}}"><i data-feather="clock"> </i><span>{{ trans('lang.To-Do') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'search' ? 'active' : '' }}" href="{{ route('search') }}"><i data-feather="search"> </i><span>{{ trans('lang.Search Result') }}</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>{{ trans('lang.Forms & Table') }}</h6>
                              <p>{{ trans('lang.Ready to use froms & tables') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
                      <i data-feather="file-text"></i><span>{{ trans('lang.Forms') }}</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="sidebar-submenu">
                      <li>
                        <a class="submenu-title" href="#">Form Controls
                        </a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{route('form-validation')}}" class="{{ Route::currentRouteName()=='form-validation' ? 'active' : '' }}">Form Validation</a></li>
                          <li><a href="{{route('base-input')}}" class="{{ Route::currentRouteName()=='base-input' ? 'active' : '' }}">Base Inputs</a></li>
                          <li><a href="{{route('radio-checkbox-control')}}" class="{{ Route::currentRouteName()=='radio-checkbox-control' ? 'active' : '' }}">Checkbox & Radio</a></li>
                          <li><a href="{{route('input-group')}}" class="{{ Route::currentRouteName()=='input-group' ? 'active' : '' }}">Input Groups</a></li>
                          <li><a href="{{route('megaoptions')}}" class="{{ Route::currentRouteName()=='megaoptions' ? 'active' : '' }}">Mega Options</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#">Form widgets
                        </a>
                        <ul class="nav-sub-childmenu submenu-content">
                            <li><a href="{{route('datepicker')}}" class="{{ Route::currentRouteName()=='datepicker' ? 'active' : '' }}">Datepicker</a></li>
                            <li><a href="{{route('time-picker')}}" class="{{ Route::currentRouteName()=='time-picker' ? 'active' : '' }}">Timepicker</a></li>
                            <li><a href="{{route('datetimepicker')}}" class="{{ Route::currentRouteName()=='datetimepicker' ? 'active' : '' }}">Datetimepicker</a></li>
                            <li><a href="{{route('daterangepicker')}}" class="{{ Route::currentRouteName()=='daterangepicker' ? 'active' : '' }}">Daterangepicker</a></li>
                            <li><a href="{{route('touchspin')}}" class="{{ Route::currentRouteName()=='touchspin' ? 'active' : '' }}">Touchspin</a></li>
                            <li><a href="{{route('select2')}}" class="{{ Route::currentRouteName()=='select2' ? 'active' : '' }}">Select2</a></li>
                            <li><a href="{{route('switch')}}" class="{{ Route::currentRouteName()=='switch' ? 'active' : '' }}">Switch</a></li>
                            <li><a href="{{route('typeahead')}}" class="{{ Route::currentRouteName()=='typeahead' ? 'active' : '' }}">Typeahead</a></li>
                            <li><a href="{{route('clipboard')}}" class="{{ Route::currentRouteName()=='clipboard' ? 'active' : '' }}">Clipboard</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#">Form Layout
                        </a>
                        <ul class="nav-sub-childmenu submenu-content">
                              <li><a href="{{route('default-form')}}" class="{{ Route::currentRouteName()=='default-form' ? 'active' : '' }}">Default Forms</a></li>
                              <li><a href="{{route('form-wizard')}}" class="{{ Route::currentRouteName()=='form-wizard' ? 'active' : '' }}">Form Wizard 1</a></li>
                              <li><a href="{{route('form-wizard-two')}}" class="{{ Route::currentRouteName()=='form-wizard-two' ? 'active' : '' }}">Form Wizard 2</a></li>
                              <li><a href="{{route('form-wizard-three')}}" class="{{ Route::currentRouteName()=='form-wizard-three' ? 'active' : '' }}">Form Wizard 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="server"></i><span>{{ trans('lang.Tables') }}</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/tables' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="sidebar-submenu">
                      <li>
                        <a class="submenu-title"  href="#">Bootstrap Tables
                        </a>
                        <ul class="nav-sub-childmenu submenu-content">
                                          <li><a href="{{route('bootstrap-basic-table')}}" class="{{ Route::currentRouteName()=='bootstrap-basic-table' ? 'active' : '' }}">Basic Tables</a></li>
                                          <li><a href="{{route('bootstrap-sizing-table')}}" class="{{ Route::currentRouteName()=='bootstrap-sizing-table' ? 'active' : '' }}">Sizing Tables</a></li>
                                          <li><a href="{{route('bootstrap-border-table')}}" class="{{ Route::currentRouteName()=='bootstrap-border-table' ? 'active' : '' }}">Border Tables</a></li>
                                          <li><a href="{{route('bootstrap-styling-table')}}" class="{{ Route::currentRouteName()=='bootstrap-styling-table' ? 'active' : '' }}">Styling Tables</a></li>
                                          <li><a href="{{route('table-components')}}" class="{{ Route::currentRouteName()=='table-components' ? 'active' : '' }}">Table components</a></li>
                                    </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#">Data Tables
                        </a>
                        <ul class="nav-sub-childmenu submenu-content">
                                            <li><a href="{{route('datatable-basic-init')}}" class="{{ Route::currentRouteName()=='datatable-basic-init' ? 'active' : '' }}">Basic Init</a></li>
                                            <li><a href="{{route('datatable-advance')}}" class="{{ Route::currentRouteName()=='datatable-advance' ? 'active' : '' }}">Advance Init</a></li>
                                            <li><a href="{{route('datatable-styling')}}" class="{{ Route::currentRouteName()=='datatable-styling' ? 'active' : '' }}">Styling</a></li>
                                            <li><a href="{{route('datatable-ajax')}}" class="{{ Route::currentRouteName()=='datatable-ajax' ? 'active' : '' }}">AJAX</a></li>
                                            <li><a href="{{route('datatable-server-side')}}" class="{{ Route::currentRouteName()=='datatable-server-side' ? 'active' : '' }}">Server Side</a></li>
                                            <li><a href="{{route('datatable-plugin')}}" class="{{ Route::currentRouteName()=='datatable-plugin' ? 'active' : '' }}">Plug-in</a></li>
                                            <li><a href="{{route('datatable-api')}}" class="{{ Route::currentRouteName()=='datatable-api' ? 'active' : '' }}">API</a></li>
                                            <li><a href="{{route('datatable-data-source')}}" class="{{ Route::currentRouteName()=='datatable-data-source' ? 'active' : '' }}">Data Sources</a></li>
                                    </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#">Ex. Data Tables
                        </a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{route('datatable-ext-autofill')}}" class="{{ Route::currentRouteName()=='datatable-ext-autofill' ? 'active' : '' }}">Auto Fill</a></li>
                          <li><a href="{{route('datatable-ext-basic-button')}}" class="{{ Route::currentRouteName()=='datatable-ext-basic-button' ? 'active' : '' }}">Basic Button</a></li>
                          <li><a href="{{route('datatable-ext-col-reorder')}}" class="{{ Route::currentRouteName()=='datatable-ext-col-reorder' ? 'active' : '' }}">Column Reorder</a></li>
                          <li><a href="{{route('datatable-ext-fixed-header')}}" class="{{ Route::currentRouteName()=='datatable-ext-fixed-header' ? 'active' : '' }}">Fixed Header</a></li>
                          <li><a href="{{route('datatable-ext-html-5-data-export')}}" class="{{ Route::currentRouteName()=='datatable-ext-html-5-data-export' ? 'active' : '' }}">HTML 5 Export</a></li>
                          <li><a href="{{route('datatable-ext-key-table')}}" class="{{ Route::currentRouteName()=='datatable-ext-key-table' ? 'active' : '' }}">Key Table</a></li>
                          <li><a href="{{route('datatable-ext-responsive')}}" class="{{ Route::currentRouteName()=='datatable-ext-responsive' ? 'active' : '' }}">Responsive</a></li>
                          <li><a href="{{route('datatable-ext-row-reorder')}}" class="{{ Route::currentRouteName()=='datatable-ext-row-reorder' ? 'active' : '' }}">Row Reorder</a></li>
                          <li><a href="{{route('datatable-ext-scroller')}}" class="{{ Route::currentRouteName()=='datatable-ext-scroller' ? 'active' : '' }}">Scroller</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('jsgrid-table')}}" class="{{ Route::currentRouteName()=='jsgrid-table' ? 'active' : '' }}">Js Grid Table </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>{{ trans('lang.Components') }}</h6>
                                <p>{{ trans('lang.UI Components & Elements') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="box"></i><span>{{ trans('lang.Ui Kits') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('state-color')}}" class="{{ Route::currentRouteName()=='state-color' ? 'active' : '' }}">State color</a></li>
                      <li><a href="{{route('typography')}}" class="{{ Route::currentRouteName()=='typography' ? 'active' : '' }}">Typography</a></li>
                      <li><a href="{{route('avatars')}}" class="{{ Route::currentRouteName()=='avatars' ? 'active' : '' }}">Avatars</a></li>
                      <li><a href="{{route('helper-classes')}}" class="{{ Route::currentRouteName()=='helper-classes' ? 'active' : '' }}">helper classes</a></li>
                      <li><a href="{{route('grid')}}" class="{{ Route::currentRouteName()=='grid' ? 'active' : '' }}">Grid</a></li>
                      <li><a href="{{route('tag-pills')}}" class="{{ Route::currentRouteName()=='tag-pills' ? 'active' : '' }}">Tag & pills</a></li>
                      <li><a href="{{route('progress-bar')}}" class="{{ Route::currentRouteName()=='progress-bar' ? 'active' : '' }}">Progress</a></li>
                      <li><a href="{{route('modal')}}" class="{{ Route::currentRouteName()=='modal' ? 'active' : '' }}">Modal</a></li>
                      <li><a href="{{route('alert')}}" class="{{ Route::currentRouteName()=='alert' ? 'active' : '' }}">Alert</a></li>
                      <li><a href="{{route('popover')}}" class="{{ Route::currentRouteName()=='popover' ? 'active' : '' }}">Popover</a></li>
                      <li><a href="{{route('tooltip')}}" class="{{ Route::currentRouteName()=='tooltip' ? 'active' : '' }}">Tooltip</a></li>
                      <li><a href="{{route('loader')}}" class="{{ Route::currentRouteName()=='loader' ? 'active' : '' }}">Spinners</a></li>
                      <li><a href="{{route('dropdown')}}" class="{{ Route::currentRouteName()=='dropdown' ? 'active' : '' }}">Dropdown</a></li>  
                      <li><a href="{{route('accordion')}}" class="{{ Route::currentRouteName()=='accordion' ? 'active' : '' }}">Accordion</a></li>
                      <li>
                        <a class="submenu-title" href="#">Tabs
                        </a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{route('tab-bootstrap')}}" class="{{ Route::currentRouteName()=='tab-bootstrap' ? 'active' : '' }}">Bootstrap Tabs</a></li>
                                        <li><a href="{{route('tab-material')}}" class="{{ Route::currentRouteName()=='tab-material' ? 'active' : '' }}">Line Tabs</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('box-shadow')}}" class="{{ Route::currentRouteName()=='box-shadow' ? 'active' : '' }}">Shadow</a></li>
                                <li><a href="{{route('list')}}" class="{{ Route::currentRouteName()=='list' ? 'active' : '' }}">Lists</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="folder-plus"></i><span>{{ trans('lang.Bonus Ui') }}</span>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('scrollable')}}" class="{{ Route::currentRouteName()=='scrollable' ? 'active' : '' }}">Scrollable</a></li>
                                  <li><a href="{{route('tree')}}" class="{{ Route::currentRouteName()=='tree' ? 'active' : '' }}">Tree view</a></li>
                                  <li><a href="{{route('bootstrap-notify')}}" class="{{ Route::currentRouteName()=='bootstrap-notify' ? 'active' : '' }}">Bootstrap Notify</a></li>
                                  <li><a href="{{route('rating')}}" class="{{ Route::currentRouteName()=='rating' ? 'active' : '' }}">Rating</a></li>
                                  <li><a href="{{route('dropzone')}}" class="{{ Route::currentRouteName()=='dropzone' ? 'active' : '' }}">dropzone</a></li>
                                  <li><a href="{{route('tour')}}" class="{{ Route::currentRouteName()=='tour' ? 'active' : '' }}">Tour</a></li>
                                  <li><a href="{{route('sweet-alert2')}}" class="{{ Route::currentRouteName()=='sweet-alert2' ? 'active' : '' }}">SweetAlert2</a></li>
                                  <li><a href="{{route('modal-animated')}}" class="{{ Route::currentRouteName()=='modal-animated' ? 'active' : '' }}">Animated Modal</a></li>
                                  <li><a href="{{route('owl-carousel')}}" class="{{ Route::currentRouteName()=='owl-carousel' ? 'active' : '' }}">Owl Carousel</a></li>
                                  <li><a href="{{route('ribbons')}}" class="{{ Route::currentRouteName()=='ribbons' ? 'active' : '' }}">Ribbons</a></li>
                                  <li><a href="{{route('pagination')}}" class="{{ Route::currentRouteName()=='pagination' ? 'active' : '' }}">Pagination</a></li>
                                  <li><a href="{{route('breadcrumb')}}" class="{{ Route::currentRouteName()=='breadcrumb' ? 'active' : '' }}">Breadcrumb</a></li>
                                  <li><a href="{{route('range-slider')}}" class="{{ Route::currentRouteName()=='range-slider' ? 'active' : '' }}">Range Slider</a></li>
                                  <li><a href="{{route('image-cropper')}}" class="{{ Route::currentRouteName()=='image-cropper' ? 'active' : '' }}">Image cropper</a></li>
                                  <li><a href="{{route('sticky')}}" class="{{ Route::currentRouteName()=='sticky' ? 'active' : '' }}">Sticky</a></li>
                                  <li><a href="{{route('basic-card')}}" class="{{ Route::currentRouteName()=='basic-card' ? 'active' : '' }}">Basic Card</a></li>
                                  <li><a href="{{route('creative-card')}}" class="{{ Route::currentRouteName()=='creative-card' ? 'active' : '' }}">Creative Card</a></li>
                                  <li><a href="{{route('tabbed-card')}}" class="{{ Route::currentRouteName()=='tabbed-card' ? 'active' : '' }}">Tabbed Card</a></li>
                                  <li><a href="{{route('dragable-card')}}" class="{{ Route::currentRouteName()=='dragable-card' ? 'active' : '' }}">Draggable Card</a></li>
                      <li>
                        <a class="submenu-title" href="#">Timeline
                        </a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{route('timeline-v-1')}}" class="{{ Route::currentRouteName()=='timeline-v-1' ? 'active' : '' }}">Timeline 1</a></li>
                          <li><a href="{{route('timeline-v-2')}}" class="{{ Route::currentRouteName()=='timeline-v-2' ? 'active' : '' }}">Timeline 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="edit-3"></i><span>{{ trans('lang.Builders') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('form-builder-1')}}" class="{{ Route::currentRouteName()=='form-builder-1' ? 'active' : '' }}"> Form Builder 1</a></li>
                        <li><a href="{{route('form-builder-2')}}" class="{{ Route::currentRouteName()=='form-builder-2' ? 'active' : '' }}"> Form Builder 2</a></li>
                        <li><a href="{{route('pagebuild')}}" class="{{ Route::currentRouteName()=='pagebuild' ? 'active' : '' }}">Page Builder</a></li>
                        <li><a href="{{route('button-builder')}}" class="{{ Route::currentRouteName()=='button-builder' ? 'active' : '' }}">Button Builder</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="cloud-drizzle"></i><span>{{ trans('lang.Animation') }}</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('animate')}}" class="{{ Route::currentRouteName()=='animate' ? 'active' : '' }}">Animate</a></li>
                        <li><a href="{{route('scroll-reval')}}" class="{{ Route::currentRouteName()=='scroll-reval' ? 'active' : '' }}">Scroll Reveal</a></li>
                        <li><a href="{{route('aos')}}" class="{{ Route::currentRouteName()=='aos' ? 'active' : '' }}">AOS animation</a></li>
                        <li><a href="{{route('tilt')}}" class="{{ Route::currentRouteName()=='tilt' ? 'active' : '' }}">Tilt Animation</a></li>
                        <li><a href="{{route('wow')}}" class="{{ Route::currentRouteName()=='wow' ? 'active' : '' }}">Wow Animation</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title " href="#"><i data-feather="command"></i><span>{{ trans('lang.Icons') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('flag-icon')}}" class="{{ Route::currentRouteName()=='flag-icon' ? 'active' : '' }}">Flag icon</a></li>
                      <li><a href="{{route('font-awesome')}}" class="{{ Route::currentRouteName()=='font-awesome' ? 'active' : '' }}">Fontawesome Icon</a></li>
                      <li><a href="{{route('ico-icon')}}" class="{{ Route::currentRouteName()=='ico-icon' ? 'active' : '' }}">Ico Icon</a></li>
                      <li><a href="{{route('themify-icon')}}" class="{{ Route::currentRouteName()=='themify-icon' ? 'active' : '' }}">Thimify Icon</a></li>
                      <li><a href="{{route('feather-icon')}}" class="{{ Route::currentRouteName()=='feather-icon' ? 'active' : '' }}">Feather icon</a></li>
                      <li><a href="{{route('whether-icon')}}" class="{{ Route::currentRouteName()=='whether-icon' ? 'active' : '' }}">Whether Icon</a></li>
                      <li><a href="{{route('simple-line-icon')}}" class="{{ Route::currentRouteName()=='simple-line-icon' ? 'active' : '' }}">Simple line Icon</a></li>
                      <li><a href="{{route('material-design-icon')}}" class="{{ Route::currentRouteName()=='material-design-icon' ? 'active' : '' }}">Material Design Icon</a></li>
                      <li><a href="{{route('pe7-icon')}}" class="{{ Route::currentRouteName()=='pe7-icon' ? 'active' : '' }}">pe7 icon</a></li>
                      <li><a href="{{route('typicons-icon')}}" class="{{ Route::currentRouteName()=='typicons-icon' ? 'active' : '' }}">Typicons icon</a></li>
                      <li><a href="{{route('ionic-icon')}}" class="{{ Route::currentRouteName()=='ionic-icon' ? 'active' : '' }}">Ionic icon</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="cloud"></i><span>{{ trans('lang.Buttons') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('buttons')}}" class="{{ Route::currentRouteName()=='buttons' ? 'active' : '' }}">Default Style</a></li>
                        <li><a href="{{route('buttons-flat')}}" class="{{ Route::currentRouteName()=='buttons-flat' ? 'active' : '' }}">Flat Style</a></li>
                        <li><a href="{{route('buttons-edge')}}" class="{{ Route::currentRouteName()=='buttons-edge' ? 'active' : '' }}">Edge Style</a></li>
                        <li><a href="{{route('raised-button')}}" class="{{ Route::currentRouteName()=='raised-button' ? 'active' : '' }}">Raised Style</a></li>
                        <li><a href="{{route('button-group')}}" class="{{ Route::currentRouteName()=='button-group' ? 'active' : '' }}">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="bar-chart"></i><span>{{ trans('lang.Charts') }}</span>
                    </a>
                    <ul class="sidebar-submenu"> 
                        <li><a href="{{route('echarts')}}" class="{{ Route::currentRouteName()=='echarts' ? 'active' : '' }}">Echarts</a></li>
                        <li><a href="{{route('chart-apex')}}" class="{{ Route::currentRouteName()=='chart-apex' ? 'active' : '' }}">Apex Chart</a></li>
                        <li><a href="{{route('chart-google')}}" class="{{ Route::currentRouteName()=='chart-google' ? 'active' : '' }}">Google Chart</a></li>
                        <li><a href="{{route('chart-sparkline')}}" class="{{ Route::currentRouteName()=='chart-sparkline' ? 'active' : '' }}">Sparkline chart</a></li>
                        <li><a href="{{route('chart-flot')}}" class="{{ Route::currentRouteName()=='chart-flot' ? 'active' : '' }}">Flot Chart</a></li>
                        <li><a href="{{route('chart-knob')}}" class="{{ Route::currentRouteName()=='chart-knob' ? 'active' : '' }}">Knob Chart</a></li>
                        <li><a href="{{route('chart-morris')}}" class="{{ Route::currentRouteName()=='chart-morris' ? 'active' : '' }}">Morris Chart</a></li>
                        <li><a href="{{route('chartjs')}}" class="{{ Route::currentRouteName()=='chartjs' ? 'active' : '' }}">Chatjs Chart</a></li>
                        <li><a href="{{route('chartist')}}" class="{{ Route::currentRouteName()=='chartist' ? 'active' : '' }}">Chartist Chart</a></li>
                        <li><a href="{{route('chart-peity')}}" class="{{ Route::currentRouteName()=='chart-peity' ? 'active' : '' }}">Peity Chart </a></li>
                    </ul>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>{{ trans('lang.Pages') }}</h6>
                                <p>{{ trans('lang.All neccesory pages added') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='landing-page' ? 'active' : '' }}" href="{{route('landing-page')}}"><i data-feather="cast"> </i><span>Landing page</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='sample-page' ? 'active' : '' }}" href="{{route('sample-page')}}"><i data-feather="file-text"> </i><span>{{ trans('lang.Sample page') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='internationalization' ? 'active' : '' }}" href="{{route('internationalization')}}"><i data-feather="globe"> </i><span>{{ trans('lang.Internationalization') }}</span></a></li>

                  <li class="mega-menu">
                    <a class="sidebar-link sidebar-title:" href="#"><i data-feather="layers"></i><span>{{ trans('lang.Others') }}</span>
                      <div class="according-menu other"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/others' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                                <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['error-400', 'error-401', 'error-403', 'error-404', 'error-500', 'error-503']) ? 'down' : 'right' }}"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="{{route('error-400')}}" class="{{ Route::currentRouteName()=='error-400' ? 'active' : '' }}">Error 400</a></li>
                                <li><a href="{{route('error-401')}}" class="{{ Route::currentRouteName()=='error-401' ? 'active' : '' }}">Error 401</a></li>
                                <li><a href="{{route('error-403')}}" class="{{ Route::currentRouteName()=='error-403' ? 'active' : '' }}">Error 403</a></li>
                                <li><a href="{{route('error-404')}}" class="{{ Route::currentRouteName()=='error-404' ? 'active' : '' }}">Error 404</a></li>
                                <li><a href="{{route('error-500')}}" class="{{ Route::currentRouteName()=='error-500' ? 'active' : '' }}">Error 500</a></li>
                                <li><a href="{{route('error-503')}}" class="{{ Route::currentRouteName()=='error-503' ? 'active' : '' }}">Error 503</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                  <li><a href="{{route('login')}}" target="_blank">Login Simple</a></li>
                                  <li><a href="{{route('login-one')}}" target="_blank">Login with bg image</a></li>
                                  <li><a href="{{route('login-two')}}" target="_blank">Login with image two </a></li>
                                  <li><a href="{{route('login-bs-validation')}}" target="_blank">Login With validation</a></li>
                                  <li><a href="{{route('login-bs-tt-validation')}}" target="_blank">Login with tooltip</a></li>
                                  <li><a href="{{route('login-sa-validation')}}" target="_blank">Login with sweetalert</a></li>
                                  <li><a href="{{route('sign-up')}}" target="_blank">Register Simple</a></li>
                                  <li><a href="{{route('sign-up-one')}}" target="_blank">Register with Bg Image </a></li>
                                  <li><a href="{{route('sign-up-two')}}" target="_blank">Register with Bg video</a></li>
                                  <li><a href="{{route('sign-up-wizard')}}" target="_blank">Register wizard</a></li>
                                  <li><a href="{{route('unlock')}}">Unlock User</a></li>
                                  <li><a href="{{route('forget-password')}}">Forget Password</a></li>
                                  <li><a href="{{route('reset-password')}}">Reset Password</a></li>
                                  <li><a href="{{route('maintenance')}}">Maintenance</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                  <li><a href="{{route('comingsoon')}}" class="{{ Route::currentRouteName()=='comingsoon' ? 'active' : '' }}">Coming Simple</a></li>
                                  <li><a href="{{route('comingsoon-bg-video')}}" class="{{ Route::currentRouteName()=='comingsoon-bg-video' ? 'active' : '' }}">Coming with Bg video</a></li>
                                  <li><a href="{{route('comingsoon-bg-img')}}" class="{{ Route::currentRouteName()=='comingsoon-bg-img' ? 'active' : '' }}">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu" >
                                  <li><a href="{{route('basic-template')}}" class="{{ Route::currentRouteName()=='basic-template' ? 'active' : '' }}">Basic Email</a></li>
                                  <li><a href="{{route('email-header')}}" class="{{ Route::currentRouteName()=='email-header' ? 'active' : '' }}">Basic With Header</a></li>
                                  <li><a href="{{route('template-email')}}" class="{{ Route::currentRouteName()=='template-email' ? 'active' : '' }}">Ecomerce Template</a></li>
                                  <li><a href="{{route('template-email-2')}}" class="{{ Route::currentRouteName()=='template-email-2' ? 'active' : '' }}">Email Template 2</a></li>
                                  <li><a href="{{route('ecommerce-templates')}}" class="{{ Route::currentRouteName()=='ecommerce-templates' ? 'active' : '' }}">Ecommerce Email</a></li>
                                  <li><a href="{{route('email-order-success')}}" class="{{ Route::currentRouteName()=='email-order-success' ? 'active' : '' }}">Order Success</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>{{ trans('lang.Miscellaneous') }}</h6>
                                <p>{{ trans('lang.Bouns pages & apps') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="image"></i><span>{{ trans('lang.Gallery') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('gallery')}}" class="{{ Route::currentRouteName()=='gallery' ? 'active' : '' }}">Gallery Grid</a></li>
                        <li><a href="{{route('gallery-with-description')}}" class="{{ Route::currentRouteName()=='gallery-with-description' ? 'active' : '' }}">Gallery Grid Desc</a></li>
                        <li><a href="{{route('gallery-masonry')}}" class="{{ Route::currentRouteName()=='gallery-masonry' ? 'active' : '' }}">Masonry Gallery</a></li>
                        <li><a href="{{route('masonry-gallery-with-disc')}}" class="{{ Route::currentRouteName()=='masonry-gallery-with-disc' ? 'active' : '' }}">Masonry with Desc</a></li>
                        <li><a href="{{route('gallery-hover')}}" class="{{ Route::currentRouteName()=='gallery-hover' ? 'active' : '' }}">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="film"></i><span>{{ trans('lang.Blog') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('blog')}}" class="{{ Route::currentRouteName()=='blog' ? 'active' : '' }}">Blog Details</a></li>
                        <li><a href="{{route('blog-single')}}" class="{{ Route::currentRouteName()=='blog-single' ? 'active' : '' }}">Blog Single</a></li>
                        <li><a href="{{route('add-post')}}" class="{{ Route::currentRouteName()=='add-post' ? 'active' : '' }}">Add Post</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='faq' ? 'active' : '' }}" href="{{route('faq')}}"><i data-feather="help-circle"> </i><span>{{ trans('lang.FAQ') }}</span></a></li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="package"></i><span>{{ trans('lang.Job Search') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('job-cards-view')}}" class="{{ Route::currentRouteName()=='job-cards-view' ? 'active' : '' }}">Cards view</a></li>
                                <li><a href="{{route('job-list-view')}}" class="{{ Route::currentRouteName()=='job-list-view' ? 'active' : '' }}">List View</a></li>
                                <li><a href="{{route('job-details')}}" class="{{ Route::currentRouteName()=='job-details' ? 'active' : '' }}">Job Details</a></li>
                                <li><a href="{{route('job-apply')}}" class="{{ Route::currentRouteName()=='job-apply' ? 'active' : '' }}">Apply</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="radio"></i><span>{{ trans('lang.Learning') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('learning-list-view')}}" class="{{ Route::currentRouteName()=='learning-list-view' ? 'active' : '' }}">Learning List</a></li>
                                <li><a href="{{route('learning-detailed')}}" class="{{ Route::currentRouteName()=='learning-detailed' ? 'active' : '' }}">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="map"></i><span>{{ trans('lang.Maps') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                          <li><a href="{{route('map-js')}}" class="{{ Route::currentRouteName()=='map-js' ? 'active' : '' }}">Maps JS</a></li>
                          <li><a href="{{route('vector-map')}}" class="{{ Route::currentRouteName()=='vector-map' ? 'active' : '' }}">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="edit"></i><span>{{ trans('lang.Editors') }}</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('summernote')}}" class="{{ Route::currentRouteName()=='summernote' ? 'active' : '' }}">Summer Note</a></li>
                        <li><a href="{{route('ckeditor')}}" class="{{ Route::currentRouteName()=='ckeditor' ? 'active' : '' }}">CK editor</a></li>
                        <li><a href="{{route('simple-mde')}}" class="{{ Route::currentRouteName()=='simple-mde' ? 'active' : '' }}">MDE editor</a></li>
                        <li><a href="{{route('ace-code-editor')}}" class="{{ Route::currentRouteName()=='ace-code-editor' ? 'active' : '' }}">ACE code editor</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'knowledgebase' ? 'active' : ''}}" href="{{ route('knowledgebase') }}"><i data-feather="sunrise"> </i><span>{{ trans('lang.Knowledgebase') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName()=='support-ticket' ? 'active' : '' }}" href="{{route('support-ticket')}}"><i data-feather="users"> </i><span>{{ trans('lang.Support Ticket') }}</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Ecommerce</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">  <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Page Layout</li>
                    <li class="breadcrumb-item active"> Ecommerce (Singapore)</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row size-column">
              <div class="col-xl-7 box-col-12 xl-100">
                <div class="row dash-chart">
                  <div class="col-xl-6 box-col-6 col-md-6">
                    <div class="card o-hidden">
                      <div class="card-header card-no-border">
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
                        <div class="media">
                          <div class="media-body">
                            <p><span class="f-w-500 font-roboto">Today Total sale</span><span class="f-w-700 font-primary ms-2">89.21%</span></p>
                            <h4 class="f-w-500 mb-0 f-26">$<span class="counter">3000.56</span></h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <div class="media">
                          <div class="media-body">
                            <div class="profit-card">
                              <div id="spaline-chart"></div>
                            </div>
                          </div>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;card o-hidden&quot;&gt;
            &lt;div class=&quot;card-header card-no-border&quot;&gt;
              &lt;div class=&quot;card-header-right&quot;&gt;
                &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                  &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
              &lt;div class=&quot;media&quot;&gt;
                &lt;div class=&quot;media-body&quot;&gt;
                  &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Month Total sale&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;79.21%&lt;/span&gt;&lt;/p&gt;
                  &lt;h4 class=&quot;f-w-500 mb-0 f-26&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;3465.56&lt;/span&gt;&lt;/h4&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body p-0&quot;&gt;
              &lt;div class=&quot;media&quot;&gt;
                &lt;div class=&quot;media-body&quot;&gt;
                  &lt;div class=&quot;profit-card&quot;&gt;
                    &lt;div id=&quot;spaline-chart&quot;&gt;&lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt; </code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 box-col-6 col-md-6">
                    <div class="card o-hidden">
                      <div class="card-header card-no-border">
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
                        <div class="media">
                          <div class="media-body">
                            <p><span class="f-w-500 font-roboto">Today Total visits</span><span class="f-w-700 font-primary ms-2">35.00%</span></p>
                            <h4 class="f-w-500 mb-0 f-26 counter">9,050</h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <div class="monthly-visit">
                          <div id="column-chart"></div>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;card o-hidden&quot;&gt;
            &lt;div class=&quot;card-header card-no-border&quot;&gt;
              &lt;div class=&quot;card-header-right&quot;&gt;
                &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                  &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
              &lt;div class=&quot;media&quot;&gt;
                &lt;div class=&quot;media-body&quot;&gt;
                  &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Month Total visits&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;95.56%&lt;/span&gt;&lt;/p&gt;
                  &lt;h4 class=&quot;f-w-500 mb-0 f-26&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;5,953&lt;/span&gt;&lt;/h4&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body pt-0&quot;&gt;
              &lt;div class=&quot;monthly-visit&quot;&gt;
                 &lt;div id=&quot;column-chart&quot;&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                    <div class="card o-hidden">
                      <div class="card-body">
                        <div class="ecommerce-widgets media">
                          <div class="media-body">
                            <p class="f-w-500 font-roboto">Our Sale Value<span class="badge pill-badge-primary ms-3">New</span></p>
                            <h4 class="f-w-500 mb-0 f-26">$<span class="counter">7454.25</span></h4>
                          </div>
                          <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                    <div class="card o-hidden">
                      <div class="card-body">
                        <div class="media">
                          <div class="media-body">
                            <p class="f-w-500 font-roboto">Today Stock value<span class="badge pill-badge-primary ms-3">Hot</span></p>
                            <div class="progress-box">
                              <h4 class="f-w-500 mb-0 f-26">$<span class="counter">9000.04</span></h4>
                              <div class="progress sm-progress-bar progress-animate app-right d-flex justify-content-end">
                                <div class="progress-gradient-primary" role="progressbar" style="width: 35%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="font-primary">88%</span><span class="animate-circle"></span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 box-col-12 xl-50">
                <div class="card o-hidden dash-chart">
                  <div class="card-header card-no-border">
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
                    <div class="media">
                      <div class="media-body">
                        <p><span class="f-w-500 font-roboto">Total Profit</span><span class="font-primary f-w-700 ms-2">99.00%</span></p>
                        <h4 class="f-w-500 mb-0 f-26">$<span class="counter">3000.56</span></h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="negative-container">
                      <div id="negative-chart"></div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;card o-hidden dash-chart&quot;&gt;
            &lt;div class=&quot;card-header card-no-border&quot;&gt;
              &lt;div class=&quot;card-header-right&quot;&gt;
                &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                  &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
              &lt;div class=&quot;media&quot;&gt;
                &lt;div class=&quot;media-body&quot;&gt;
                  &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Total Earning&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;79.21%&lt;/span&gt;&lt;/p&gt;
                  &lt;h4 class=&quot;f-w-500 mb-0 f-26&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;3465.56&lt;/span&gt;&lt;/h4&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body pt-0&quot;&gt;
              &lt;div class=&quot;profit-card&quot;&gt;
                  &lt;div id=&quot;negative-chart&quot;&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;  </code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 box-col-12">
                <div class="card">
                  <div class="card-header card-no-border">
                    <h5>New Product</h5>
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
                  <div class="card-body pt-0">
                    <div class="our-product">
                      <div class="table-responsive">
                        <table class="table table-bordernone">
                          <tbody class="f-w-500">
                            <tr>
                              <td>
                                <div class="media">
                                  <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-1.png')}}" alt="">
                                  <div class="media-body">
                                    <span>Hike Shoes</span>
                                    <p class="font-roboto">100 item</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p>coupon code</p>
                                <span>PIX001</span>
                              </td>
                              <td>
                                <p>-51%</p>
                                <span>$99.00</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="media">
                                  <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-3.png')}}" alt="">
                                  <div class="media-body">
                                    <span>Tree Pot</span>
                                    <p class="font-roboto">105 item</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p>coupon code</p>
                                <span>PIX002</span>
                              </td>
                              <td>
                                <p>-78%</p>
                                <span>$66.00</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="media">
                                  <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-4.png')}}" alt="">
                                  <div class="media-body">
                                    <span>Bag</span>
                                    <p class="font-roboto">604 item</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p>coupon code</p>
                                <span>PIX003</span>
                              </td>
                              <td>
                                <p>-04%</p>
                                <span>$116.00</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="media">
                                  <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-5.png')}}" alt="">
                                  <div class="media-body">
                                    <span>Wtach</span>
                                    <p class="font-roboto">541 item</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p>coupon code</p>
                                <span>PIX004</span>
                              </td>
                              <td>
                                <p>-60%</p>
                                <span>$99.00</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="media">
                                  <img class="img-fluid m-r-15 rounded-circle" src="{{asset('assets/images/dashboard-2/product-6.png')}}" alt="">
                                  <div class="media-body">
                                    <span>T-shirt</span>
                                    <p class="font-roboto">999 item</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p>coupon code</p>
                                <span>PIX005</span>
                              </td>
                              <td>
                                <p>-50%</p>
                                <span>$58.00</span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-header card-no-border&quot;&gt;
              &lt;h5&gt;Our Product&lt;/h5&gt;
              &lt;div class=&quot;card-header-right&quot;&gt;
                &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                  &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body pt-0&quot;&gt;
              &lt;div class=&quot;our-product&quot;&gt;
                &lt;div class=&quot;table-responsive&quot;&gt;
                  &lt;table class=&quot;table table-bordernone&quot;&gt;
                    &lt;tbody class=&quot;f-w-500&quot;&gt;
                      &lt;tr&gt;
                        &lt;td&gt;
                          &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-1.png')&#125;&#125;&quot;&gt;
                            &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                              &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td&gt;
                          &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-3.png')&#125;&#125;&quot;&gt;
                            &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Head Phon&lt;/span&gt;
                              &lt;p class=&quot;font-roboto&quot;&gt;165 item&lt;/p&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;HEA415&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;-28%&lt;/p&gt;&lt;span&gt;$36.00&lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td&gt;
                          &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-4.png')&#125;&#125;&quot;&gt;
                            &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Tree Pot&lt;/span&gt;
                              &lt;p class=&quot;font-roboto&quot;&gt;364 item&lt;/p&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;TRE113&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;-14%&lt;/p&gt;&lt;span&gt;$16.00&lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td&gt;
                          &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-5.png')&#125;&#125;&quot;&gt;
                            &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                              &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td&gt;
                          &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;&#123;&#123;asset('assets/images/dashboard-2/product-6.png')&#125;&#125;&quot;&gt;
                            &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                              &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                          &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                    &lt;/tbody&gt;
                  &lt;/table&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 box-col-12">
                <div class="card">
                  <div class="card-header card-no-border">
                    <h5>Location</h5>
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
                  <div class="card-body pt-0">
                    <div class="dash-map">
                      <div id="map"></div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-header card-no-border&quot;&gt;
              &lt;h5&gt;Location&lt;/h5&gt;
              &lt;div class=&quot;card-header-right&quot;&gt;
                &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                  &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body pt-0&quot;&gt;
              &lt;div class=&quot;dash-map&quot;&gt;
                &lt;div id=&quot;map&quot;&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 box-col-12">
                <div class="card">
                  <div class="card-header card-no-border">
                    <h5>News & Updates</h5>
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
                  <div class="card-body new-update pt-0">
                    <div class="activity-timeline">
                      <div class="media">
                        <div class="activity-line"></div>
                        <div class="activity-dot-secondary"></div>
                        <div class="media-body">
                          <span>Update Product</span>
                          <p class="font-roboto">Quisque a consequat ante Sit amet magna at volutapt.</p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="activity-dot-primary"></div>
                        <div class="media-body">
                          <span>James liked Nike Shoes</span>
                          <p class="font-roboto">Aenean sit amet magna vel magna fringilla ferme.</p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="activity-dot-secondary"></div>
                        <div class="media-body">
                          <span>john just buy your product<i class="fa fa-circle circle-dot-secondary pull-right"></i></span>
                          <p class="font-roboto">Vestibulum nec mi suscipit, dapibus purus.....</p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="activity-dot-primary"></div>
                        <div class="media-body">
                          <span>Jihan Doe just save your product<i class="fa fa-circle circle-dot-primary pull-right"></i></span>
                          <p class="font-roboto">Curabitur egestas consequat lorem.</p>
                        </div>
                      </div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;card&quot;&gt;
            &lt;div class=&quot;card-header card-no-border&quot;&gt;
              &lt;h5&gt;New &amp; Updates&lt;/h5&gt;
              &lt;div class=&quot;card-header-right&quot;&gt;
                &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                  &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body new-update pt-0&quot;&gt;
              &lt;div class=&quot;activity-timeline&quot;&gt;
                &lt;div class=&quot;media&quot;&gt;
                  &lt;div class=&quot;activity-line&quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;activity-dot-secondary&quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Updated Product&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;Quisque a consequat ante Sit amet magna at volutapt.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;media&quot;&gt;
                  &lt;div class=&quot;activity-dot-primary&quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;You liked James products&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;Aenean sit amet magna vel magna fringilla ferme.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;media&quot;&gt;
                  &lt;div class=&quot;activity-dot-secondary&quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;James just like your product&lt;i class=&quot;fa fa-circle circle-dot-secondary pull-right&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;Vestibulum nec mi suscipit, dapibus purus.....&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;media&quot;&gt;
                  &lt;div class=&quot;activity-dot-primary&quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Jihan Doe just like your product&lt;i class=&quot;fa fa-circle circle-dot-primary pull-right&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;Curabitur egestas consequat lorem.&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 risk-col xl-100 box-col-12">
                <div class="card total-users">
                  <div class="card-header card-no-border">
                    <h5>Risk Factor</h5>
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
                  <div class="card-body pt-0">
                    <div class="apex-chart-container goal-status text-center row">
                      <div class="rate-card col-xl-12">
                        <div class="goal-chart">
                          <div id="riskfactorchart"></div>
                        </div>
                        <div class="goal-end-point">
                          <ul>
                            <li class="mt-0 pt-0">
                              <h6 class="font-primary">As From</h6>
                              <h6 class="f-w-400">24 March 2021</h6>
                            </li>
                            <li>
                              <h6 class="mb-2 f-w-400">Total Goal</h6>
                              <h5 class="mb-0">$94,000.20</h5>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <ul class="col-xl-12">
                        <li>
                          <div class="goal-detail">
                            <h6> <span class="font-primary">Goal Archive : </span>$91,000.000</h6>
                            <div class="progress sm-progress-bar progress-animate">
                              <div class="progress-gradient-primary" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="goal-detail mb-0">
                            <h6><span class="font-primary">Duration: </span>9 Month</h6>
                            <div class="progress sm-progress-bar progress-animate">
                              <div class="progress-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="btn-download btn btn-gradient f-w-500">Download details</div>
                        </li>
                      </ul>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="example-head6">&lt;!-- Cod Box Copy begin --&gt;
          &lt;div class=&quot;card total-users&quot;&gt;
            &lt;div class=&quot;card-header card-no-border&quot;&gt;
              &lt;h5&gt;Risk Factor&lt;/h5&gt;
              &lt;div class=&quot;card-header-right&quot;&gt;
                &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                  &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body pt-0&quot;&gt;
              &lt;div class=&quot;apex-chart-container goal-status text-center row&quot;&gt;
                &lt;div class=&quot;rate-card col-xl-12&quot;&gt;
                  &lt;div class=&quot;goal-chart&quot;&gt;
                    &lt;div id=&quot;riskfactorchart&quot;&gt;&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;goal-end-point&quot;&gt;
                    &lt;ul&gt;
                      &lt;li class=&quot;mt-0 pt-0&quot;&gt;
                        &lt;h6 class=&quot;font-primary&quot;&gt;As From&lt;/h6&gt;
                        &lt;h6 class=&quot;f-w-400&quot;&gt;24 January 2019&lt;/h6&gt;
                      &lt;/li&gt;
                      &lt;li&gt;
                        &lt;h6 class=&quot;mb-2 f-w-400&quot;&gt;Total Goal&lt;/h6&gt;
                        &lt;h5 class=&quot;mb-0&quot;&gt;$84,376.29&lt;/h5&gt;
                      &lt;/li&gt;
                    &lt;/ul&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;ul class=&quot;col-xl-12&quot;&gt;
                  &lt;li&gt;
                    &lt;div class=&quot;goal-detail&quot;&gt;
                      &lt;h6&gt; &lt;span class=&quot;font-primary&quot;&gt;Goal Archive : &lt;/span&gt;$81,586.253&lt;/h6&gt;
                      &lt;div class=&quot;progress sm-progress-bar progress-animate&quot;&gt;
                        &lt;div class=&quot;progress-gradient-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 60%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;goal-detail mb-0&quot;&gt;      
                      &lt;h6&gt;&lt;span class=&quot;font-primary&quot;&gt;Duration: &lt;/span&gt;6 Month&lt;/h6&gt;
                      &lt;div class=&quot;progress sm-progress-bar progress-animate&quot;&gt;
                        &lt;div class=&quot;progress-gradient-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;div class=&quot;btn-download btn btn-gradient f-w-500&quot;&gt;Download Report&lt;/div&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;!-- Cod Box Copy end --&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 xl-100 box-col-12">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card offer-box">
                      <div class="card-body p-0">
                        <div class="offer-slider">
                          <div class="carousel slide" id="carouselExampleCaptions" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="selling-slide row">
                                  <div class="col-xl-4 col-md-6">
                                    <div class="d-flex">
                                      <div class="left-content">
                                        <p>Much More Selling product</p>
                                        <h4 class="f-w-600">Best Selling Product</h4>
                                        <span class="badge badge-white rounded-pill">78% offer</span><span class="badge badge-dotted rounded-pill ms-2">Coupon Code : 12345</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-xl-4 col-md-12">
                                    <div class="center-img"><img class="img-fluid" src="{{asset('assets/images/dashboard-2/offer-shoes-3.png')}}" alt="..."></div>
                                  </div>
                                  <div class="col-xl-4 col-md-6">
                                    <div class="d-flex">
                                      <div class="right-content">
                                        <p>Money back Guarrantee</p>
                                        <h4 class="f-w-600">Women Straight Kurta</h4>
                                        <span class="badge badge-white rounded-pill">$100.00</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="selling-slide row">
                                  <div class="col-xl-4 col-md-6">
                                    <div class="d-flex">
                                      <div class="left-content">
                                        <p>Money back Guarrantee</p>
                                        <h4 class="f-w-600">Women Straight Kurta</h4>
                                        <span class="badge badge-white rounded-pill">$100.00</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-xl-4 col-md-12">
                                    <div class="center-img"><img class="img-fluid" src="{{asset('assets/images/dashboard-2/offer-shoes-3.png')}}" alt="..."></div>
                                  </div>
                                  <div class="col-xl-4 col-md-6">
                                    <div class="d-flex">
                                      <div class="right-content">
                                        <p>Money back Guarrantee</p>
                                        <h4 class="f-w-600">Nike Air Shoes</h4>
                                        <span class="badge badge-white rounded-pill">$120.55</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="selling-slide row">
                                  <div class="col-xl-4 col-md-6">
                                    <div class="d-flex">
                                      <div class="left-content">
                                        <p>Maximum Selling product</p>
                                        <h4 class="f-w-600">Best Selling Product</h4>
                                        <span class="badge badge-white rounded-pill">50% offer</span><span class="badge badge-dotted rounded-pill ms-2">Coupon Code : 21546</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-xl-4 col-md-12">
                                    <div class="center-img"><img class="img-fluid" src="{{asset('assets/images/dashboard-2/offer-shoes-3.png')}}" alt="..."></div>
                                  </div>
                                  <div class="col-xl-4 col-md-6">
                                    <div class="d-flex">
                                      <div class="right-content">
                                        <p>Money back Guarrantee</p>
                                        <h4 class="f-w-600">Nike Air Shoes</h4>
                                        <span class="badge badge-white rounded-pill">$120.55</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="best-seller-table responsive-tbl">
                          <div class="item">
                            <div class="table-responsive product-list">
                              <table class="table table-bordernone">
                                <thead>
                                  <tr>
                                    <th class="f-22">
                                      Best Seller
                                    </th>
                                    <th>Date</th>
                                    <th>Product</th>
                                    <th>Country</th>
                                    <th>Total</th>
                                    <th class="text-end">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/7.jpg')}}" alt="">
                                        <div class="status-circle bg-primary"></div>
                                        <div class="d-inline-block">
                                          <span>John keter</span>
                                          <p class="font-roboto">2019</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>06 August</td>
                                    <td>CAP</td>
                                    <td><i class="flag-icon flag-icon-gb"></i></td>
                                    <td> <span class="label">$5,08,652</span></td>
                                    <td class="text-end"><i class="fa fa-check-circle"></i>Done</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/4.jpg')}}" alt="">
                                        <div class="status-circle bg-primary"></div>
                                        <div class="d-inline-block">
                                          <span>Herry Venter</span>
                                          <p class="font-roboto">2020</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>21 March</td>
                                    <td>Branded Shoes</td>
                                    <td><i class="flag-icon flag-icon-us"></i></td>
                                    <td> <span class="label">$59,105</span></td>
                                    <td class="text-end"><i class="fa fa-check-circle"></i>Pending</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/16.jpg')}}" alt="">
                                        <div class="status-circle bg-primary"></div>
                                        <div class="d-inline-block">
                                          <span>loain deo</span>
                                          <p class="font-roboto">2020</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>09 March</td>
                                    <td>Headphone</td>
                                    <td><i class="flag-icon flag-icon-za"></i></td>
                                    <td> <span class="label">$10,155</span></td>
                                    <td class="text-end"><i class="fa fa-check-circle"></i>Success</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/11.jpg')}}" alt="">
                                        <div class="status-circle bg-primary"></div>
                                        <div class="d-inline-block">
                                          <span>Horen Hors</span>
                                          <p class="font-roboto">2020</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>14 February</td>
                                    <td>Cell Phone</td>
                                    <td><i class="flag-icon flag-icon-at"></i></td>
                                    <td> <span class="label">$90,568</span></td>
                                    <td class="text-end"> <i class="fa fa-check-circle"></i>In process</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-inline-block align-middle">
                                        <img class="img-40 m-r-15 rounded-circle align-top" src="{{asset('assets/images/avtar/3.jpg')}}" alt="">
                                        <div class="status-circle bg-primary"></div>
                                        <div class="d-inline-block">
                                          <span>fenter Jessy</span>
                                          <p class="font-roboto">2021</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>12 January</td>
                                    <td>Earings</td>
                                    <td><i class="flag-icon flag-icon-br"></i></td>
                                    <td> <span class="label">$10,652</span></td>
                                    <td class="text-end"><i class="fa fa-check-circle"></i>Pending</td>
                                  </tr>
                                </tbody>
                              </table>
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
          <script>
            var map;
            function initMap() {
              map = new google.maps.Map(
                document.getElementById('map'),
                {center: new google.maps.LatLng(-33.91700, 151.233), zoom: 18});
            
              var iconBase =
                "{{ asset('assets/images/dashboard-2')}}/";
              
              var icons = {
                userbig: {
                  icon: iconBase + '1.png'
                },
                library: {
                  icon: iconBase + '3.png'
                },
                info: {
                  icon: iconBase + '2.png'
                }
              };
            
              var features = [
                {
                  position: new google.maps.LatLng(-33.91752, 151.23270),
                  type: 'info'
                }, {
                  position: new google.maps.LatLng(-33.91700, 151.23280),
                  type: 'userbig'
                },  {
                  position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
                  type: 'library'
                }
              ];
            
              // Create markers.
              for (var i = 0; i < features.length; i++) {
                var marker = new google.maps.Marker({
                  position: features[i].position,
                  icon: icons[features[i].type].icon,
                  map: map
                });
              };
            }
          </script>
          <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGCQvcXUsXwCdYArPXo72dLZ31WS3WQRw&amp;callback=initMap"></script>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/dashboard/dashboard_2.js')}}"></script>

    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- Plugin used-->
    <script type="text/javascript"> 
        $('.other').hide();
        localStorage.clear();
        $(".page-wrapper").attr("class", "page-wrapper horizontal-wrapper enterprice-type");
        localStorage.setItem('page-wrapper', 'horizontal-wrapper enterprice-type');
    </script>
  </body>
</html>
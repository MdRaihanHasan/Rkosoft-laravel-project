@extends('layouts.simple.master')
@section('title', 'Wishlist')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Wishlist</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Ecommerce</li>
<li class="breadcrumb-item active">Wishlist</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Wishlist</h5>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="prooduct-details-box">
                        <div class="media">
                           <img class="align-self-center img-fluid img-60" src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="#">
                           <div class="media-body ms-3">
                              <div class="product-name">
                                 <h6><a href="#">Fancy Women's Cotton</a></h6>
                              </div>
                              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="price d-flex">
                                 <div class="text-muted me-2">Price</div>
                                 : 210$
                              </div>
                              <div class="avaiabilty">
                                 <div class="text-success">In stock</div>
                              </div>
                              <a class="btn btn-primary btn-xs" href="#">Move to Cart              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Container-fluid Ends-->
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
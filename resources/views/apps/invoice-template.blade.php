@extends('layouts.simple.master')
@section('title', 'Invoice')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Invoice</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Ecommerce</li>
<li class="breadcrumb-item active">Invoice</li>
@endsection

@section('content')
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <div class="invoice">
                  <div>
                     <div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="media">
                                 <div class="media-left"><img class="media-object img-60" src="{{asset('assets/images/other-images/logo-login.png')}}" alt=""></div>
                                 <div class="media-body m-l-20 text-right">
                                    <h4 class="media-heading">Cuba</h4>
                                    <p>hello@Cuba.in<br><span>289-335-6503</span></p>
                                 </div>
                              </div>
                              <!-- End Info-->
                           </div>
                           <div class="col-sm-6">
                              <div class="text-md-end text-xs-center">
                                 <h3>Invoice #<span class="counter">1069</span></h3>
                                 <p>Issued: May<span> 27, 2015</span><br>                                                            Payment Due: June <span>27, 2015</span></p>
                              </div>
                              <!-- End Title-->
                           </div>
                        </div>
                     </div>
                     <hr>
                     <!-- End InvoiceTop-->
                     <div class="row">
                        <div class="col-md-4">
                           <div class="media">
                              <div class="media-left"><img class="media-object rounded-circle img-60" src="{{asset('assets/images/user/1.jpg')}}" alt=""></div>
                              <div class="media-body m-l-20">
                                 <h4 class="media-heading">Johan Deo</h4>
                                 <p>JohanDeo@gmail.com<br><span>555-555-5555</span></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="text-md-end" id="project">
                              <h6>Project Description</h6>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                           </div>
                        </div>
                     </div>
                     <!-- End Invoice Mid-->
                     <div>
                        <div class="table-responsive invoice-table" id="table">
                           <table class="table table-bordered table-striped">
                              <tbody>
                                 <tr>
                                    <td class="item">
                                       <h6 class="p-2 mb-0">Item Description</h6>
                                    </td>
                                    <td class="Hours">
                                       <h6 class="p-2 mb-0">Hours</h6>
                                    </td>
                                    <td class="Rate">
                                       <h6 class="p-2 mb-0">Rate</h6>
                                    </td>
                                    <td class="subtotal">
                                       <h6 class="p-2 mb-0">Sub-total</h6>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lorem Ipsum</label>
                                       <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">5</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">$75</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">$375.00</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lorem Ipsum</label>
                                       <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">3</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">$75</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">$225.00</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lorem Ipsum</label>
                                       <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">10</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">$75</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">$750.00</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lorem Ipsum</label>
                                       <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">10</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">$75</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">$750.00</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p class="itemtext"></p>
                                    </td>
                                    <td>
                                       <p class="m-0">HST</p>
                                    </td>
                                    <td>
                                       <p class="m-0">13%</p>
                                    </td>
                                    <td>
                                       <p class="m-0">$419.25</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="Rate">
                                       <h6 class="mb-0 p-2">Total</h6>
                                    </td>
                                    <td class="payment">
                                       <h6 class="mb-0 p-2">$3,644.25</h6>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <!-- End Table-->
                        <div class="row">
                           <div class="col-md-8">
                              <div>
                                 <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.</p>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <form class="text-end">
                                 <input type="image" src="{{asset('assets/images/other-images/paypal.png')}}" name="submit" alt="PayPal - The safer, easier way to pay online!">
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- End InvoiceBot-->
                  </div>
                  <div class="col-sm-12 text-center mt-3">
                     <button class="btn btn btn-primary me-2" type="button" onclick="myFunction()">Print</button>
                     <button class="btn btn-secondary" type="button">Cancel</button>
                  </div>
                  <!-- End Invoice-->
                  <!-- End Invoice Holder-->
                  <!-- Container-fluid Ends-->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/print.js')}}"></script>
@endsection
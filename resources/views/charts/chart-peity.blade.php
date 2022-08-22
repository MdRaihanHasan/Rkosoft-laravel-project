@extends('layouts.simple.master')
@section('title', 'Peity Chart')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Peity Chart</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Charts</li>
<li class="breadcrumb-item active">Peity Chart</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-4">
         <div class="card">
            <div class="card-header">
               <h5>Updating Chart</h5>
            </div>
            <div class="card-body peity-charts peity-chart-primary"><span class="updating-chart">4,3,5,4,5,10,2,3,9,1,2,8</span></div>
         </div>
      </div>
      <div class="col-xl-4">
         <div class="card">
            <div class="card-header">
               <h5>Line Chart 1</h5>
            </div>
            <div class="card-body peity-charts peity-chart-primary"><span class="line">5,3,9,6,5,9,7,3,5,2</span></div>
         </div>
      </div>
      <div class="col-xl-4">
         <div class="card">
            <div class="card-header">
               <h5>Line Chart 2</h5>
            </div>
            <div class="card-body peity-charts peity-chart-primary"><span class="line">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span></div>
         </div>
      </div>
      <div class="col-xl-4 box-col-6">
         <div class="card">
            <div class="card-header">
               <h5>Bar Chart 1</h5>
            </div>
            <div class="card-body peity-charts bar-odd-even"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></div>
         </div>
      </div>
      <div class="col-xl-4 box-col-6">
         <div class="card">
            <div class="card-header">
               <h5>Bar Chart 2</h5>
            </div>
            <div class="card-body peity-charts bar-odd-even"><span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span></div>
         </div>
      </div>
      <div class="col-xl-4 box-col-6">
         <div class="card">
            <div class="card-header">
               <h5>Donut Chart 1</h5>
            </div>
            <div class="card-body peity-charts donut-peity"><span class="donut">226/360</span></div>
         </div>
      </div>
      <div class="col-xl-4 box-col-6">
         <div class="card">
            <div class="card-header">
               <h5>Donut Chart 2</h5>
            </div>
            <div class="card-body peity-charts donut-peity2"><span class="donut">1,2,3,2,2</span></div>
         </div>
      </div>
      <div class="col-xl-4 box-col-6">
         <div class="card">
            <div class="card-header">
               <h5>Pie Chart 1</h5>
            </div>
            <div class="card-body peity-charts pie-peity"><span class="pie">226,134</span></div>
         </div>
      </div>
      <div class="col-xl-4 box-col-6">
         <div class="card">
            <div class="card-header">
               <h5>Pie Chart 2</h5>
            </div>
            <div class="card-body peity-charts pie-peity"><span class="pie">1,2,3,2,2</span></div>
         </div>
      </div>
      <div class="col-xl-6 xl-100 box-col-12">
         <div class="card">
            <div class="card-header">
               <h5>Donut Charts with Radius</h5>
            </div>
            <div class="card-body">
               <p class="data-attributes"><span class="small-donut" data-peity="{&quot;innerRadius&quot;: 10, &quot;radius&quot;: 40 }">1/7</span><span class="small-donut2" data-peity="{&quot;innerRadius&quot;: 14, &quot;radius&quot;: 36 }">2/7</span><span class="small-donut3" data-peity="{&quot;innerRadius&quot;: 16, &quot;radius&quot;: 32 }">3/7</span><span class="small-donut4" data-peity="{&quot;innerRadius&quot;: 18, &quot;radius&quot;: 28 }">4/7</span><span class="small-donut5" data-peity="{&quot;innerRadius&quot;: 20, &quot;radius&quot;: 24 }">5/7</span><span class="small-donut6" data-peity="{&quot;innerRadius&quot;: 18, &quot;radius&quot;: 20 }">6/7</span></p>
            </div>
         </div>
      </div>
      <div class="col-xl-6 xl-100 box-col-12">
         <div class="card">
            <div class="card-header">
               <h5>Peity Charts With Different Colors</h5>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-sm-3 text-center col-6">
                     <div class="xm-mb-peity"><span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span></div>
                  </div>
                  <div class="col-sm-3 text-center col-6">
                     <div class="xm-mb-peity"><span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span></div>
                  </div>
                  <div class="col-sm-3 text-center col-6"><span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span></div>
                  <div class="col-sm-3 text-center col-6"><span class="pie-colours-1">4,7,6,5</span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/peity-chart/peity.jquery.js')}}"></script>
<script src="{{asset('assets/js/chart/peity-chart/peity-custom.js')}}"></script>
@endsection
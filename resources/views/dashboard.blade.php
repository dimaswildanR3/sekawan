@extends('layouts.master')
@section('content')
@if(session('warning'))
<div class="callout callout-warning alert alert-warning alert-dismissible fade show" role="alert">
  <h5><i class="fas fa-info"></i> Peringatan :</h5>
  {{session('warning')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="row">
  <div class="container-fluid">
    <!-- Info boxes -->
    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'penyetuju')
    <div class="row">
      <div class="flex-fill col-md-3" style="padding: 4px 4px 4px 4px">
        
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
     
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    @endif
    <!-- /.row -->
  </div>

  @endsection
  @push('js')
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/css/highcharts.css">

  
  @endpush
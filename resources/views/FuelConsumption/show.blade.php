@extends('layouts.master')

@section('content')
<section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        @if(session('sukses'))
        <div class="callout callout-success alert alert-success alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-check"></i> Sukses :</h5>
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if(session('warning'))
        <div class="callout callout-warning alert alert-warning alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-info"></i> Informasi :</h5>
            {{session('warning')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($errors->any())
        <div class="callout callout-danger alert alert-danger alert-dismissible fade show">
            <h5><i class="fas fa-exclamation-triangle"></i> Peringatan :</h5>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Fuel Consumption Details </h4>
        <hr>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    {{-- <img class="profile-user-img img-fluid img-circle" src={{$data->image}} alt="User profile picture" style="max-height: 100px;max-width:100px"> --}}
                                </div>
                                <h1>Fuel Consumption</h1>
                              
                                <ul class="list-group list-group-unbordered mb-3">                                
                                    <li class="list-group-item">
                                        <b>id_vehicle</b>
                                        <a class="float-right">{{ $fuelConsumption->id_vehicle }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>tanggal_pengisian</b> <a class="float-right">{{$fuelConsumption->tanggal_pengisian}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>jumlah_liter</b> <a class="float-right">{{$fuelConsumption->jumlah_liter}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>kilometer_awal</b> <a class="float-right">{{$fuelConsumption->kilometer_awal}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>kilometer_akhir</b> <a class="float-right">{{$fuelConsumption->kilometer_akhir}}</a>
                                    </li>
                                    
                                   
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                   
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </section>
    </div>
</section>
@endsection
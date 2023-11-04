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
        <form action="/FuelConsumption/{{ $fuelConsumption->id }}/update" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Edit Fuel Consumption </h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="id_vehicle">Nama Kendaraan</label>
                    <select name="id_vehicle" class="form-control my-1 mr-sm-2 bg-light" id="id_beasiswa"  oninput="setCustomValidity('')">
     <option value="">-- Pilih Vehicle --</option>
     @foreach($Vehicle as $ayah)
     <option value="{{$ayah->id}}"> {{$ayah->nama_kendaraan}}
     </option>
     @endforeach
 </select>
                    <label for="tanggal_pengisian">tanggal_pengisian:</label>
                    <input value="{{$fuelConsumption->tanggal_pengisian}}" name="tanggal_pengisian" type="text" class="form-control" id="tanggal_pengisian" placeholder="tanggal_pengisian" >
                    <label for="jumlah_liter">jumlah_liter:</label>
                    <input value="{{$fuelConsumption->jumlah_liter}}" name="jumlah_liter" type="text" class="form-control" id="jumlah_liter" placeholder="jumlah_liter" >
                    <label for="kilometer_awal">kilometer_awal:</label>
                    <input value="{{$fuelConsumption->kilometer_awal}}" name="kilometer_awal" type="text" class="form-control" id="kilometer_awal" placeholder="kilometer_awal" >
                    <label for="kilometer_akhir">kilometer_akhir:</label>
                    <input value="{{$fuelConsumption->kilometer_akhir}}" name="kilometer_akhir" type="text" class="form-control" id="kilometer_akhir" placeholder="kilometer_akhir" >
                    
                   
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/fuelConsumption/index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection
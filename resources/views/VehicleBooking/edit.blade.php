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
        <form action="/VehicleBooking/{{ $booking->id }}/update" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Edit Vehicle Booking </h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="id_user">id_user:</label>
                    <input value="{{$booking->id_user}}" name="id_user" type="text" class="form-control" id="id_user" placeholder="id_user" >
                    <label for="id_vehicle">id_vehicle:</label>
                    <input value="{{$booking->id_vehicle}}" name="id_vehicle" type="text" class="form-control" id="id_vehicle" placeholder="id_vehicle" >
                    <label for="tanggal_pemesanan">tanggal_pemesanan:</label>
                    <input value="{{$booking->tanggal_pemesanan}}" name="tanggal_pemesanan" type="date" class="form-control" id="tanggal_pemesanan" placeholder="tanggal_pemesanan" >
                    <label for="tanggal_mulai">tanggal_mulai:</label>
                    <input value="{{$booking->tanggal_mulai}}" name="tanggal_mulai" type="date" class="form-control" id="tanggal_mulai" placeholder="tanggal_mulai" >
                    <label for="tanggal_selesai">tanggal_selesai:</label>
                    <input value="{{$booking->tanggal_selesai}}" name="tanggal_selesai" type="date" class="form-control" id="tanggal_selesai" placeholder="tanggal_selesai" >
                    <label for="status_persetujuan">status_persetujuan:</label>
                    <input value="{{$booking->status_persetujuan}}" name="status_persetujuan" type="text" class="form-control" id="status_persetujuan" placeholder="status_persetujuan" >
                    <label for="catatan">catatan:</label>
                    <input value="{{$booking->catatan}}" name="catatan" type="text" class="form-control" id="catatan" placeholder="catatan" >
                   
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/VehicleBooking/index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection
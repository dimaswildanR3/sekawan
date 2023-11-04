@extends('layouts.master')
@section('content')
<section class="content card" style="padding: 10px 10px 20px 20px  ">
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
        <div class="row">
            <div class="col">
                <h4><i class="nav-icon fas fa-child my-0 btn-sm-1"></i> Vehicle Booking</h3>
                <hr>
            </div>
        </div>
        <div>
            <div class="col">
                <a class="btn btn-primary btn-sm my-1 mr-sm-1" href="create" role="button"><i class="fas fa-plus"></i> Tambah Data</a>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="row table-responsive">
                <div class="col-12">
                    <table class="table table-hover table-head-fixed" id=''>
                        <thead>
                            <tr class="bg-light">
                                <th>No.</th>
                                <th>id_user</th>
                                <th>id_vehicle</th>
                                <th>tanggal_pemesanan</th>
                                <th>tanggal_mulai</th>
                                <th>tanggal_selesai</th>
                                <th>status_persetujuan</th>
                                <th>catatan</th>
                                {{-- <th>Actions</th> --}}
                                <th><center> Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            @foreach($bookings as $book)
                            <?php $no++; ?>
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{ $book->user->name }}</td>
                                <td>{{ $book->vehicle->nama_kendaraan }}</td>
                                <td>{{ $book->tanggal_pemesanan }}</td>
                                <td>{{ $book->tanggal_mulai }}</td>
                                <td>{{ $book->tanggal_selesai }}</td>
                                <td>{{ $book->status_persetujuan }}</td>
                                <td>{{ $book->catatan }}</td>
                                <td>
                                    <center>
                                    <div class="ok"style="width:220px;">
                                    <a href="/VehicleBooking/{{$book->id}}/edit" class="btn btn-primary btn-sm my-1 mr-sm-1"><i class="nav-icon fas fa-pencil-alt"></i> Edit</a>
                                    <a href="/VehicleBooking/{{$book->id}}/delete" class="btn btn-danger btn-sm my-1 mr-sm-1" onclick="return confirm('Hapus Data ?')"><i class="nav-icon fas fa-trash"></i>Hapus</a>
                                    <a href="/VehicleBooking/{{$book->id}}/show" class="btn btn-success btn-sm my-1 mr-sm-1"><i class="nav-icon fas fa-child"></i> Detail</a>
                                    
                            
                                </div>
                            </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
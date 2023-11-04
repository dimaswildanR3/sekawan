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
        <form action="/vehicle/store" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Tambah Vehicle</h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="nama_kendaraan">Vehicle Name:</label>
                    <input value="{{old('nama_kendaraan')}}" name="nama_kendaraan" type="text" class="form-control" id="nama_kendaraan" placeholder="Nama Kendaraan" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    <label for="jenis_kendaraan">Vehicle Type:</label>
                    <input value="{{old('jenis_kendaraan')}}" name="jenis_kendaraan" type="text" class="form-control" id="jenis_kendaraan" placeholder="Jenis Kendaraan" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    <label for="nomor_plat">License Plate:</label>
                    <input value="{{old('nomor_plat')}}" name="nomor_plat" type="text" class="form-control" id="nomor_plat" placeholder="Nomor Plat" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    <label for="status">Status</label>
                    <select name="status" class="form-control my-1 mr-sm-1 bg-light" id="Jenis_kelamin" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                        <option value="">-- Pilih Status --</option>
                        <option value="Dalam Pemakaian">Dalam Pemakaian</option>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Dalam Servis">Dalam Servis</option>
                    </select>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection
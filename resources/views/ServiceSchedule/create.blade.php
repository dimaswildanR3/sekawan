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
        <form action="/ServiceSchedule/store" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Tambah Service Schedule</h4>
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
                    <label for="tanggal_servis">tanggal_servis</label>
                    <input value="{{old('tanggal_servis')}}" name="tanggal_servis" type="text" class="form-control" id="tanggal_servis" placeholder="tanggal_servis" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    <label for="deskripsi">deskripsi</label>
                    <input value="{{old('deskripsi')}}" name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="deskripsi" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    <label for="status_servis">status_servis</label>
                    <input value="{{old('status_servis')}}" name="status_servis" type="text" class="form-control" id="status_servis" placeholder="status_servis" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    
                  
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection
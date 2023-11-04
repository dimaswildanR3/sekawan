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
        <form action="/ApprovalHistory/{{ $approvalHistory->id }}/update" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Edit Approval History </h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="id_booking">id_booking:</label>
                    <input value="{{$approvalHistory->id_booking}}" name="id_booking" type="text" class="form-control" id="id_booking" placeholder="id_booking" >
                    <label for="id_user">id_user:</label>
                    <input value="{{$approvalHistory->id_user}}" name="id_user" type="text" class="form-control" id="id_user" placeholder="id_user" >
                    <label for="id_level">id_level:</label>
                    <input value="{{$approvalHistory->id_level}}" name="id_level" type="text" class="form-control" id="id_level" placeholder="id_level" >
                    <label for="status_persetujuan">status_persetujuan:</label>
                    <input value="{{$approvalHistory->status_persetujuan}}" name="status_persetujuan" type="text" class="form-control" id="status_persetujuan" placeholder="status_persetujuan" >
                    <label for="catatan">catatan:</label>
                    <input value="{{$approvalHistory->catatan}}" name="catatan" type="text" class="form-control" id="catatan" placeholder="catatan" >
                    
                   
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/ApprovalHistory/index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection
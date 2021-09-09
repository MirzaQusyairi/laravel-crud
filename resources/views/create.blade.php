@extends('layout.main')
 
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Post</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="/"> Back</a>
        </div>
    </div>
</div>
 
 
<form action="/store" method="POST">
    @csrf
     <div class="row">
        <div class="col-xl">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="Nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xl">
            <div class="form-group">
                <strong>Jurusan :</strong>
                <input type="text" name="Jurusan" class="form-control" placeholder="Jurusan">
            </div>
        </div>
     </div>
     <div class="row">
        <div class="col-xl">
            <div class="form-group">
                <strong>Kelas :</strong>
                <input type="text" name="Kelas" class="form-control" placeholder="Kelas">
            </div>
        </div>
        <div class="col-xl">
            <div class="form-group">
                <strong>Angkatan :</strong>
                <input type="text" name="Angkatan" class="form-control" placeholder="Angkatan">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl">
            <div class="form-group">
                <strong>Email :</strong>
                <input type="text" name="Email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xl">
            <div class="form-group">
                <strong>No HP :</strong>
                <input type="text" name="NoHP" class="form-control" placeholder="No HP">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Alamat"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
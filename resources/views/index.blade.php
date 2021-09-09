@extends('layout.main')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD LARAVEL</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="/create"> Create Post</a>
            </div>
        </div>
    </div>
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Angkatan</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th width="280px"class="text-center">Action</th>
        </tr>

        @php $no = 1; @endphp
        @foreach($mahasiswa as $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->Nama}}</td>
                <td>{{$item->Jurusan}}</td>
                <td>{{$item->Kelas}}</td>
                <td>{{$item->Angkatan}}</td>
                <td>{{$item->Email}}</td>
                <td>{{$item->NoHP}}</td>
                <td>{{$item->Alamat}}</td>
                <td class="text-center">
                    <form action="#" method="POST">
                        <a class="btn btn-info btn-sm" href="/show/{{ $item->id }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="/edit/{{ $item->id }}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/delete/{{ $item->id }}"  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

 
@endsection
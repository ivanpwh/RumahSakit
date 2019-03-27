@extends('layouts.app');

@section('content')
    <h1><center>Data Pasien</center></h1>
    <ul class="list-group">
        <li class="list-group-item">Nama: {{$pasiens->nama}}</li>
        <li class="list-group-item">Alamat: {{$pasiens->alamat}}</li>
        <li class="list-group-item">Tanggal Lahir: {{$pasiens->tglLahir}}</li>
    </ul>
    <h1><center>Rekam Medis</center></h1>
    @include('static.RekamMedis.list')
    <form action="{{route('pasien.index')}}">
        <button class="btn btn-primary">Back</button>
    </form>
    <form action="{{route('RekamMedis.create',$pasien->id)}}">
        {{-- {{ csrf_field() }} --}}
        <button class="btn btn-primary">Tambah</button>
    </form>
    <a href="#" class="btn btn-primary">Edit</a>
    <a href="#" class="btn btn-danger">Delete</a>
    
@endsection
@extends('layouts.app')

@section('content')
    <h1><center>Daftar Pasien</center></h1>
    @include('static.pasien.list')
    <form action="{{route('pasien.create')}}">
        {{-- {{ csrf_field() }} --}}
        <button class="btn btn-primary">Tambah</button>
    </form>
@endsection
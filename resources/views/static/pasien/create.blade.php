@extends('layouts.app')

@section('content')
    <form action="{{route('pasien.store')}}" method="POST" role="form" enctype="multipart/form-data">
    {{ csrf_field() }}
        <h1><center>Register Pasien</center></h1>
        <div class="form-group">
            <div class="col-lg-3">
                <label for="nama">Nama Pasien</label>
            </div>
            <div class="col-lg-9">
                <input type="text" name="nama" placeholder="Input Nama" id="nama" class="form-control">
                <div class="text-danger">{!! $errors->first('nama')!!}</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3">
                <label for="alamat">Alamat</label>
            </div>
            <div class="col-lg-9">
                <input type="text" name="alamat" placeholder="Input Alamat" id="alamat" class="form-control">
                <div class="text-danger">{!! $errors->first('alamat')!!}</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3">
                <label for="tanggalLahir">Tanggal Lahir</label>
            </div>
            <div class="col-lg-9">
                <input type="date" name="tglLahir" placeholder="Input Tanggal Lahir" id="tglLahir" class="form-control">
                <div class="text-danger">{!! $errors->first('tglLahir')!!}</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <label for="file">Upload Tanda Pengenal</label>
                <input type="file" class="form-control" name="file">
                <div class="text-danger">{!! $errors->first('file')!!}</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group"> 
            <div class="col-lg-3"></div> 
            <div class="col-lg-9"> 
                {{-- {!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!} --}}
                <button type="submit" class="btn btn-raised btn-primary pull-right">save</button>
                {{-- {!! link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}  --}}
                <a href="{{route('pasien.index')}}" class="btn btn-raised btn-info">Back</a>
            </div> 
        <div class="clear"></div>
        </div>
    </form>
@endsection
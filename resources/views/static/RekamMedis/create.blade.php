@extends('layouts.app')

@section('content')
    <form action="{{route('RekamMedis.store')}}" method="POST" role="form" enctype="multipart/form-data">
    {{ csrf_field() }}
        <h1><center>Tambah Rekam Medis</center></h1>
        <div class="form-group">
            <div class="col-lg-3">
                <label for="anamnese">Anamnese</label>
            </div>
            <div class="col-lg-9">
                <input type="text" name="anamnese" placeholder="Input Anamnese" id="anamnese" class="form-control">
                <div class="text-danger">{!! $errors->first('anamnese')!!}</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3">
                <label for="pemerikasaan">Pemerikasaan</label>
            </div>
            <div class="col-lg-9 dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pemeriksaan Fisik
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Keadaan Umum</a></li>
                    <li><a href="#">Kepala - Leher</a></li>
                    <li><a href="#">Throax</a></li>
                    <li><a href="#">Abdomen</a></li>
                    <li><a href="#">Extremitas</a></li>
                    <li><a href="#">Status Neorologis</a></li>
                </ul>
                {{-- <input type="text" name="pemerikasaan" placeholder="Input Pemerikasaan" id="alamat" class="form-control">
                <div class="text-danger">{!! $errors->first('alamat')!!}</div> --}}
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3">
                <label for="diagnosa">Diagnosa</label>
            </div>
            <div class="col-lg-9">
                <input type="text" name="diagnosa" placeholder="Input Diagnosa" id="diagnosa" class="form-control">
                <div class="text-danger">{!! $errors->first('diagnosa')!!}</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3">
                <label for="catatan">Catatan</label>
            </div>
            <div class="col-lg-9">
                <input type="text" name="catatan" placeholder="Input Catatan" id="catatan" class="form-control">
                <div class="text-danger">{!! $errors->first('diagnosa')!!}</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="form-group"> 
            <div class="col-lg-3"></div> 
            <div class="col-lg-9"> 
                {{-- {!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!} --}}
                <button type="submit" class="btn btn-raised btn-primary pull-right">save</button>
                {{-- {!! link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}  --}}
                <a href="{{route('pasien.show')}}" class="btn btn-raised btn-info">Back</a>
            </div> 
        <div class="clear"></div>
        </div>
    </form>
@endsection
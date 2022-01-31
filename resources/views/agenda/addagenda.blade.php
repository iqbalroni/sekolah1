@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Agenda</h4>
        <form class="forms-sample" action="/agenda/simpan" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputName1">Kegiatan</label>
                    <input type="text" value="{{old('kegiatan')}}" class="form-control" id="exampleInputName1" placeholder="kegiatan" name="kegiatan">
                    @error('kegiatan')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputName1">Tanggal</label>
                    <input type="date" value="{{old('tanggal')}}" class="form-control" id="exampleInputName1" placeholder="Tanggal" name="tanggal">
                    @error('tanggal')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
        <a href="/agenda" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      </form>
    </div>
  </div>
@endsection
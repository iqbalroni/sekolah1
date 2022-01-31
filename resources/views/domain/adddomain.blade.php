@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Domain</h4>
        <form class="forms-sample" action="/subdomain/simpan" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputName1">Judul</label>
                    <input type="text" value="{{old('judul')}}" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul">
                    @error('judul')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" value="{{old('gambar')}}" class="file-upload-default" name="gambar">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                    @error('gambar')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
              </div>
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Link</label>
            <input type="text" value="{{old('link')}}" class="form-control" id="exampleInputName1" placeholder="link" name="link">
            @error('link')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
        
        <a href="/subdomain" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      </form>
    </div>
  </div>
@endsection
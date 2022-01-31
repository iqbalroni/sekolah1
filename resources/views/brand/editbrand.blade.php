@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Support</h4>
        <form class="forms-sample" action="/support/simpanedit/{{$Show->id_brand}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" value="{{$Show->nama}}" class="form-control" id="exampleInputName1" placeholder="nama" name="nama">
                    @error('nama')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Ganti Logo</label>
                    <input type="file" value="{{old('foto')}}" class="file-upload-default" name="foto">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                    @error('foto')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
              </div>
              <div class="col-sm-6 text-center">
                <img src="{{asset('brand').'/'.$Show->foto}}" width="150">
            </div>
            </div>
        <a href="/support" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      </form>
    </div>
  </div>
@endsection
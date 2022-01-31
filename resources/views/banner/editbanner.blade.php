@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Banner</h4>
        <form class="forms-sample" action="/spanduk/simpanedit/{{$Show->id_banner}}" method="post" enctype="multipart/form-data">
        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Judul</label>
                            <input type="text" value="{{$Show->judul}}" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul">
                            @error('judul')
                              <p class="text-danger">{{$message}}</p>
                            @enderror
                          </div>
                <input type="text" value="{{Auth::user()->name}}" class="form-control" name="pengupload" readonly hidden>
                <div class="row d-flex align-items-center">
                    <div class="col-sm-6">
                        <img src="{{asset('banner').'/'.$Show->gambar}}" class="img-fluid">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mt-2">
                            <label>Ganti gambar</label>
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
                            <p class="text-danger"> Harap MengUpload gambar dengan ukuran width 905px & height 625px</p>
                          </div>
                    </div>
                </div>
          <div class="form-group">
            <label for="exampleTextarea1">Deskripsi</label>
            <textarea class="form-control" id="exampleTextarea1" rows="5" placeholder="deskripsi" name="deskripsi">{{$Show->artikel}}</textarea>
            @error('deskripsi')
                <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
        <a href="/spanduk" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      </form>
    </div>
  </div>
@endsection
@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Berita</h4>
        <form class="forms-sample" action="/berita/simpanedit/{{$Show->id_berita}}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Judul</label>
                    <input type="text" value="{{$Show->judul_berita}}" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul">
                    @error('judul')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            <div class="row">
                <div class="col-sm-4 text-center">
                <img src="{{asset('blog').'/'.$Show->gambar}}" width="200">
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
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
                      </div>
              </div>
          </div>
        <input type="text" value="{{Auth::user()->name}}" class="form-control" name="pengupload" readonly hidden>
        <div class="form-group">
            <label for="exampleTextarea1">isi</label>
            <textarea class="form-control" value="{{old('isi')}}" id="exampleTextarea1" rows="5" placeholder="isi" name="isi">
                {{$Show->isi}}
            </textarea>
            @error('isi')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <a href="/berita" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      </form>
    </div>
  </div>

    <script>
        CKEDITOR.replace( 'isi' );
    </script>
@endsection
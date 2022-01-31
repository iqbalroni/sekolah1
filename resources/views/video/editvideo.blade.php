@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Banner</h4>
        <form class="forms-sample" action="/video/simpanedit/{{$Detail->id_video}}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputName1">Judul</label>
                            <input type="text" value="{{$Detail->judul}}" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul">
                            @error('judul')
                              <p class="text-danger">{{$message}}</p>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Link</label>
                            <input type="text" value="{{$Detail->link}}" class="form-control" id="exampleInputName1" placeholder="https://www.youtube.com/embed/" name="link">
                            @error('link')
                              <p class="text-danger">{{$message}}</p>
                            @enderror
                          </div>
                    </div>
                </div>
        <a href="/video" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      </form>
    </div>
  </div>
@endsection
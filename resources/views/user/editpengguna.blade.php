@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Admin</h4>
        <form class="forms-sample" action="/pengguna/simpanedit/{{$detail->id}}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" value="{{$detail->name}}" class="form-control" id="exampleInputName1" placeholder="Username" name="name">
                    @error('name')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="email" value="{{$detail->email}}" class="form-control" id="exampleInputName1" placeholder="email" name="email">
                    @error('email')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
        
        
        <a href="/pengguna" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      </form>
    </div>
  </div>
@endsection
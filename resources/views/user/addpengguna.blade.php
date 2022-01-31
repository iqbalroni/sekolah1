@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Admin</h4>
        <form class="forms-sample" action="/pengguna/simpan" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" value="{{old('name')}}" class="form-control" id="exampleInputName1" placeholder="Username" name="name">
                    @error('name')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="email" value="{{old('email')}}" class="form-control" id="exampleInputName1" placeholder="email" name="email">
                    @error('email')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
            </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="password" value="{{old('password')}}" class="form-control" id="exampleInputName1" placeholder="password" name="password">
                        @error('password')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputName1">Konfirmasi Password</label>
                        <input type="password" value="{{old('password_confirmation')}}" class="form-control" id="exampleInputName1" placeholder="Konfirmasi password" name="password_confirmation">
                        @error('password_confirmation')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                </div>
            </div>
        
        
        <a href="/pengguna" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      </form>
    </div>
  </div>
@endsection
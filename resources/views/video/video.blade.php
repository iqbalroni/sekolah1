@extends('layout.master')

@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Video Youtube</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Video</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->judul}}</td>
                    <td>
                        <iframe width="70%" height="200" src="{{$row->link}}">
                        </iframe>
                    </td>
                    <td>
                        <a href="/video/edit/{{$row->id_video}}" type="button" class="btn btn-warning btn-sm">
                            <i class="ti-pencil-alt btn-icon-append"></i>                                                                              
                          </a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
@extends('layout.master')

@section('content')
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kegiatan Sekolah</h4>
        <p class="card-description">
            <a href="agenda/tambah" type="button" class="btn btn-sm btn-primary">
                <i class="ti-plus btn-icon-append"></i>                                                                              
            </a>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($show as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->kegiatan}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>
                            <a href="/agenda/edit/{{$item->id_agenda}}" type="button" class="btn btn-warning btn-sm">
                                <i class="ti-pencil-alt btn-icon-append"></i>                                                                              
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{$item->id_agenda}}">
                                <i class="ti-trash btn-icon-append"></i>  
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

@foreach ($show as $item)
<div class="modal fade" id="hapus{{$item->id_agenda}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Warning!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah kegiatan {{$item->kegiatan}} ingin di hapus?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <a href="agenda/hapus/{{$item->id_agenda}}" type="button" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
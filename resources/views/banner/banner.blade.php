@extends('layout.master')

@section('content')
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Banner Website</h4>
        <p class="card-description">
            <a href="spanduk/tambah" type="button" class="btn btn-sm btn-primary">
                <i class="ti-plus btn-icon-append"></i>                                                                              
            </a>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Pengupload</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($banner as $items)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$items->judul}}</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#deskripsi{{$items->id_banner}}">
                      <i class="ti-eye btn-icon-append"></i>  
                    </button>
                  </td>
                  <th><img src="{{asset('banner').'/'.$items->gambar}}" width="200"></th>
                  <td>{{$items->pengupload}}</td>
                  <td class="text-center">
                    @if ($items->status == 1)
                      <p class="p-2 bg-success text-light rounded-pill">Aktif</p>
                    @elseif($items->status == 2)
                      <p class="p-2 bg-danger text-light rounded-pill">NonAktif</p>
                    @endif
                  </td>
                  <td>
                    @if ($items->status == 2)
                        <a href="/spanduk/aktif/{{$items->id_banner}}" type="button" class="btn btn-info btn-sm">
                            <i class="ti-pin2 btn-icon-append"></i>                                                 
                        </a>
                    @elseif($items->status == 1)      
                        <a href="/spanduk/nonaktif/{{$items->id_banner}}" type="button" class="btn btn-info btn-sm">
                            <i class="ti-na btn-icon-append"></i>                                                 
                        </a>
                    @endif
                    <a href="/spanduk/edit/{{$items->id_banner}}" type="button" class="btn btn-warning btn-sm">
                      <i class="ti-pencil-alt btn-icon-append"></i>                                                                              
                    </a>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{$items->id_banner}}">
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

@foreach ($banner as $item)
<div class="modal fade" id="hapus{{$item->id_banner}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah banner {{$item->judul}} ingin di hapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
        <a href="spanduk/hapus/{{$item->id_banner}}" type="button" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deskripsi{{$item->id_banner}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Deskripsi {{$item->judul}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$item->artikel}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
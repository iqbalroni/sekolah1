@extends('layout.master')

@section('content')
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Blog Sekolah</h4>
        <p class="card-description">
            <a href="berita/tambah" type="button" class="btn btn-sm btn-primary">
                <i class="ti-plus btn-icon-append"></i>                                                                              
            </a>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>judul_berita</th>
                <th>Pengupload</th>
                <th>tanggal upload</th>
                <th>isi</th>
                <th>gambar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($show as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->judul_berita}}</td>
                        <td>{{$item->pengupload}}</td>
                        <td>{{$item->tanggal_upload}}</td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#deskripsi{{$item->id_berita}}">
                                <i class="ti-eye btn-icon-append"></i>  
                            </button>
                        </td>
                        <th><img src="{{asset('blog').'/'.$item->gambar}}" width="200"></th>
                        <td>
                            <a href="/berita/edit/{{$item->id_berita}}" type="button" class="btn btn-warning btn-sm">
                                <i class="ti-pencil-alt btn-icon-append"></i>                                                                              
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{$item->id_berita}}">
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
<div class="modal fade" id="hapus{{$item->id_berita}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Berita {{$item->judul_berita}} ingin di hapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
        <a href="berita/hapus/{{$item->id_berita}}" type="button" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deskripsi{{$item->id_berita}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Deskripsi {{$item->judul_berita}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!!$item->isi!!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
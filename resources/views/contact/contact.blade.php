@extends('layout.master')

@section('content')
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pesan</h4>
        <p class="card-description">
            <a href="/#contact" type="button" class="btn btn-sm btn-primary">
                <i class="ti-plus btn-icon-append"></i>                                                                              
            </a>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Pesan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $items)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$items->nama}}</td>
                  <td>{{$items->no_telp}}</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pesan{{$items->id_contact}}">
                        <i class="ti-eye btn-icon-append"></i>  
                    </button>
                </td>
                  <td>
                    <a href="https://api.whatsapp.com/send?phone={{$items->no_telp}}&text=Hallo%20saya%20dari%20Smkn1Bondowoso%20" type="button" class="btn btn-info btn-sm" type="button" class="btn btn-info btn-sm">
                      <i class="ti-email btn-icon-append"></i>                                                                              
                    </a>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{$items->id_contact}}">
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

@foreach ($data as $item)
<div class="modal fade" id="hapus{{$item->id_contact}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Pesan {{$item->nama}} ingin di hapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
        <a href="/kontak/hapus/{{$item->id_contact}}" type="button" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pesan{{$item->id_contact}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Warning!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{$item->pesan}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <a href="https://api.whatsapp.com/send?phone={{$item->no_telp}}&text=Hallo%20saya%20dari%20Smkn1Bondowoso%20" type="button" class="btn btn-info">Balas</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
@extends('layout.master')

@section('content')
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Support</h4>
        <p class="card-description">
            <a href="support/tambah" type="button" class="btn btn-sm btn-primary">
                <i class="ti-plus btn-icon-append"></i>                                                                              
            </a>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Show as $items)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$items->nama}}</td>
                  <th><img src="{{asset('brand').'/'.$items->foto}}" width="100"></th>
                  {{-- <td>{{$items->email}}</td> --}}
                  <td>
                    <a href="/support/edit/{{$items->id_brand}}" type="button" class="btn btn-warning btn-sm">
                      <i class="ti-pencil-alt btn-icon-append"></i>                                                                              
                    </a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{$items->id_brand}}">
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


    @foreach ($Show as $item)
<div class="modal fade" id="hapus{{$item->id_brand}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah banner {{$item->nama}} ingin di hapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
        <a href="support/hapus/{{$item->id_brand}}" type="button" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
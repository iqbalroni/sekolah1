@extends('layout.master')

@section('content')

{{-- User --}}
<?php $user = 0; ?>
@foreach ($pengguna as $row)
  <?php $user++ ?>
@endforeach

{{-- Banner --}}
<?php $bnr = 0; ?>
@foreach ($banner as $row)
  <?php $bnr++ ?>
@endforeach

{{-- Domain --}}
<?php $dmn = 0; ?>
@foreach ($domain as $row)
  <?php $dmn++ ?>
@endforeach

{{-- Contact --}}
<?php $psn = 0; ?>
@foreach ($contact as $row)
  <?php $psn++ ?>
@endforeach

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>
          <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="{{asset('template')}}/images/dashboard/people.svg" alt="people">
          <div class="weather-info">
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Total Admin</p>
              <p class="fs-30 mb-2">{{$user}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Jumlah Banner</p>
              <p class="fs-30 mb-2">{{$bnr}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Total Domain</p>
              <p class="fs-30 mb-2">{{$dmn}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Pesan</p>
              <p class="fs-30 mb-2">{{$psn}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
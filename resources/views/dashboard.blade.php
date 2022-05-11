@extends('layouts.master')

@section('title-web', 'Dashboard')
@section('title-page', 'Dashboard')

@section('body')
<!-- Content Row -->
<div class="row">
  <!-- Card Example -->
  <div class=" col-md-12 mb-4">
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-lg" style="text-transform: uppercase">
          Hai 
          @if (!empty(auth()->user()->name))
            {{ auth()->user()->name }}
          @else
            user
          @endif
        !
        </h6>
      </div>
      <div class="card-body text-lg">
        <h4 style="text-transform: uppercase">
          Selamat datang di aplikasi Peduli Diri! 
        </h4>
        <p>
          Pada aplikasi ini anda dapat melihat dan membuat catatan perjalanan anda. Catatan perjalanan yang dibuat
          berisi data berupa suhu tubuh, jam keberangkatan, lokasi tujuan, dan tanggal bepergian anda. 
        </p>
        <div class="row">
          <div class="col-lg-6">
            <a href="http://127.0.0.1:8000/form-perjalanan" class="btn btn-primary btn-icon-split col-lg-12 mb-2">
              <span class="icon text-white-50">
                <i class="fas fa-fw fa-table"></i>
              </span>
              <span class="text">Isi Catatan Perjalanan</span>
            </a>
          </div>
          <div class="col-lg-6">
            <a href="http://127.0.0.1:8000/data-perjalanan" class="btn btn-primary btn-icon-split col-lg-12 mb-2">
              <span class="icon text-white-50">
                <i class="fas fa-info-circle"></i>
              </span>
              <span class="text">Lihat Catatan Perjalanan</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.master')

@section('title-web', 'Edit Perjalanan')
@section('title-page', 'Update Data Perjalanan')

@section('body')

  <div class="row">
    <div class="col-12 col-md-6 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit & Update Catatan Perjalanan</h4>
        </div>
        
        <div class="card-body text-lg">

          @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
          @endif
          
          <form action="{{ url('/update-perjalanan'.$data->id) }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')

            <div class="form-group">
              <label for="tanggal">Jam</label>
              <input type="time" id="jam" class="form-control" name="jam" value="{{ $data->jam }}">
            </div>

            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" id="tanggal" class="form-control" name="tanggal" value="{{ $data->tanggal }}">
            </div>
          
            <div class="form-group">
              <label for="lokasi">Lokasi</label>
              <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi yang dituju" value="{{ $data->lokasi }}">
            </div>
          
            <div class="form-group">
              <label for="suhu">Suhu</label>
              <div class="input-group">
                <input type="number" class="form-control" id="suhu" name="suhu" placeholder="Suhu tubuh" min="34" max="42" value="{{ $data->suhu }}">
                <div class="input-group-append">
                  <span class="input-group-text">℃</span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <button type="" class="btn btn-danger">
                <a href="{{ url('data-perjalanan') }}" style="color: white">Kembali</a>
              </button>
              <button type="submit" class="btn btn-primary" value="{{ $data->id }}">Perbaharui</button>
            </div>


          </form>

        </div>
      </div>
    </div>
  </div>

@endsection
@extends('layouts.master')

@section('title-web', 'Form Perjalanan')
@section('title-page', 'Input Data Perjalanan')

@section('body')
  <div class="row">
    <div class="col-12 col-md-6 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Form Catatan Perjalanan</h4>
        </div>
        <div class="card-body text-lg">
          <form method="POST" action="/simpanPerjalanan" >
            {{ csrf_field() }}
            <div class="form-group">
              <label for="tanggal">Jam</label>
              <input required type="time" id="jam" class="form-control" name="jam">
            </div>

            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input required type="date" id="tanggal" class="form-control" name="tanggal">
            </div>
          
            <div class="form-group">
              <label for="lokasi">Lokasi</label>
              <input required type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi yang dituju">
            </div>
          
            <div class="form-group">
              <label for="suhu">Suhu</label>
              <div class="input-group">
                <input required type="number" class="form-control" id="suhu" name="suhu">
                <div class="input-group-append">
                  <span class="input-group-text">℃</span>
                </div>
              </div>
            </div>
            
            <div class="text-right">
              <button class="btn btn-danger" type="reset">Reset</button>
              <button class="btn btn-primary mr-1 fa-sm" type="submit">Simpan</button>
            </div>
          
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
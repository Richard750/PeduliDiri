@extends('layouts.master')

@section('title-web', 'Data Perjalanan')
@section('title-page', 'Catatan Perjalanan')

@section('body')

<!-- DataTables -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Perjalanan Anda.</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align:center;">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Lokasi</th>
            <th>Suhu (℃)</th>
            <th scope="col" >Opsi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{ $item->tanggal }}</td>
              <td>{{ $item->jam }}</td>
              <td style="text-align:left;">{{ $item->lokasi }}</td>
              <td>{{ $item->suhu }}</td>
              <td>
                
                {{-- <a href="{{ url('edit-perjalanan/'.$item->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a> --}}
                
                <form method="POST" action="/editPerjalanan">
                  <button class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#deleteModal-{{ $item->id }}">
                    <i class="fas fa-trash"></i>
                  </button>
                  {{ csrf_field() }}
                  <input id="id" type="hidden" class="form-control" name="id" value="{{ $item->id }}" required>

                  <button type="submit" class="btn btn-primary btn-sm" tabindex="3">
                    <i class="fas fa-edit"></i>
                  </button>
                </form>
              </td>
            </tr>

            <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus data?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">Catatan perjalanan akan dihapus selamanya. </div>
                  <div class="modal-footer">
                    <form method="POST" action="/deletePerjalanan" class="needs-validation">
                      {{ csrf_field() }}
                      <button class="btn btn-danger" type="button" data-dismiss="modal">
                        Tidak
                      </button>
                      <button name="delete" id="delete" class="btn btn-success align-center" type="submit" value="{{ $item->id }}">
                        Ya
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  @endsection
  
  
  {{-- <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    } );
  </script> --}}
  
  
  {{-- <th scope="col" >Opsi</th> --}}

{{-- <td>
  <form method="POST" action="/deletePerjalanan" class="needs-validation">
    {{ csrf_field() }}
    <button name="delete" id="delete" class="btn btn-danger align-center" type="submit" value="{{ $item->id }}" style="color:#fff; :75px; height:35px;">
      <i class="fa fa-trash" aria-hidden="true"></i>
    </button>
  </form>
</td> --}}
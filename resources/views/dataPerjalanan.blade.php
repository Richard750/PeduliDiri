@extends('layouts.master')

@section('title-web', 'Data Perjalanan')
@section('title-page', 'Catatan Perjalanan')

@section('body')

<!-- DataTales -->
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
                <form method="POST" action="/deletePerjalanan" class="needs-validation">
                  {{-- @method('delete') --}}
                  {{ csrf_field() }}
                  <button name="delete" id="delete" class="btn btn-danger align-center" type="submit" value="{{ $item->id }}" style="color:#fff; :75px; height:35px;">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
</div>

{{-- <script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script> --}}

@endsection
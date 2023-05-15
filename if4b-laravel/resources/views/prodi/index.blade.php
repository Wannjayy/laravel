@extends('layout.main')
@section('title','Halaman Prodi')
@section('subtitle','Prodi')

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        <h4 class="card-title">Program Studi</h4>
        <a href="{{route('prodi.create')}}" class="btn btn-primary">Tambah</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nama Prodi</th>
                <th>Nama Fakultas</th>
                <th>Created At</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataprodis as $item)
              <tr>
                <td>{{$item->nama_prodi}}</td>
                <td>{{$item->fakultas->nama_fakultas}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                  <form id="delete-form-{{ $item->id }}" action="{{ route('prodi.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                  </form>
                  <button type="submit" class="btn btn-danger" onclick="
                    event.preventDefault();
                    Swal.fire({
                      title: 'Apakah Anda yakin ingin menghapus Program Studi ini?',
                      showCancelButton: true,
                      confirmButtonText: `Hapus`,
                      cancelButtonText: `Batal`
                    }).then((result) => {
                      /* handle ketika pengguna menekan tombol Hapus */
                      if (result.isConfirmed) {
                        document.getElementById('delete-form-{{ $item->id }}').submit();
                      }
                    });
                  ">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection



{{-- <!-- {{$fikr}} --> --}}


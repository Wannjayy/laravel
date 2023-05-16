@extends('layout.main')
@section('title','Halaman Mahasiswa')
@section('subtitle','Mahasiswa')

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        <h4 class="card-title">Data Mahasiswa</h4>
        <a href="{{route('mahasiswa.create')}}" class="btn btn-primary">Tambah</a>

          <h5 class="mt-4">Data Mahasiswa</h5> 
          <div class="my-3 col-12 col-sm-8 col-md-6">
            <form action="" method="GET">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Cari">
                <button class="input-group-text btn btn-primary">Search</button>
              </div>
            </form>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>NPM</th>
                  <th>Foto</th>
                  <th>Nama Mahasiswa</th>
                  <th>Tanggal Lahir</th>
                  <th>Kota Lahir</th>
                  <th>Program Studi</th>
                  <th>Created At</th>
                  <th>
                    @foreach ($datamahasiswas as $item)
                    <form id="delete-form" action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    </form>
                    @endforeach
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
                          var selectedIds = getSelectedCheckboxValues();
                          if(selectedIds.length > 0){
                            document.getElementById('delete-form').submit();
                          }else{
                            Swal.fire('Silakan pilih minimal satu data yang akan dihapus', '', 'warning');
                          }
                        }
                      });
                    ">Hapus</button>
                  </th>
                </tr>
              </thead>
              <tbody>
                {{-- tampilkan baris data mahasiswa dengan program studi yang sesuai --}}
                @foreach ($datamahasiswas as $item) 
                    <tr>
                      <td>{{$item->npm}}</td>
                      <td><img src="{{ asset('images/mahasiswa/' . $item->foto) }}" alt="Foto" class="img-fluid"></td>
                      <td>{{$item->nama_mahasiswa}}</td>
                      <td>{{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d F Y')}}</td>
                      <td>{{$item->kota_lahir}}</td>
                      <td>{{$item->prodi->nama_prodi}}</td>
                      <td>{{$item->created_at}}</td>
                      <td><input type="checkbox" name="ids[]" value="{{$item->id}}"></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            <div class="mt-4" style="display: flex; justify-content:center;">{{$datamahasiswas->links()}}</div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
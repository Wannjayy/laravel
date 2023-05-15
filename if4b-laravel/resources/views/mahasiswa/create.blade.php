@extends('layout.main')
@section('title', 'Halaman Mahasiswa')
@section('subtitle', 'Mahasiswa')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Mahasiswa</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="{{ route('mahasiswa.store')}} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="npm">NPM</label>
                      <input type="text" class="form-control" name="npm" placeholder="npm">
                      @error('npm')
                         <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mahasiswa" placeholder="nama mahasiswa">
                        @error('nama_mahasiswa')
                           <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal lahir">
                        @error('tanggal_lahir')
                           <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kota_lahir">Kota Kelahiran</label>
                        <input type="text" class="form-control" name="kota_lahir" placeholder="kota kelahiran">
                        @error('kota_lahir')
                           <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" name="foto" placeholder="foto" accept="image/*" capture="camera">
                        @error('foto')
                           <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prodi_id">Program Studi</label>
                          <select class="form-control js-example-basic-single" name="prodi_id">
                            <option value="" selected disabled>-Pilih Program Studi-</option>
                            @foreach($prodi as $prodi)
                            <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
                            @endforeach
                          </select>
                          @error('prodi_id')
                             <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                    <button type="submit" class="btn  btn-primary me-2">Simpan</button>
                    <a  href="{{route('mahasiswa.index')}}" class="btn btn-rounded btn-light">Batal</a>
                  </form>
                </div>
              </div>
            </div>
</div>

@endsection

@extends('layout.main')
@section('title', 'Halaman Program Studi')
@section('subtitle', 'Program Studi')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Program Studi</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="{{ route('prodi.store')}} " method="post">
                    @csrf
                    <div class="form-group">
                      <label for="nama_prodi">Nama Program Studi</label>
                      <input type="text" class="form-control" name="nama_prodi" value="{{old('nama_prodi')}}" placeholder="nama prodi">
                      @error('nama_prodi')
                         <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                    <label for="fakultas_id">Fakultas Program Studi</label>
                      <select class="form-control js-example-basic-single" name="fakultas_id">
                        <option value="" selected disabled>-Pilih Fakultas-</option>
                        @foreach($fakultas as $fakultas)
                        <option value="{{ $fakultas->id }}">{{ $fakultas->nama_fakultas }}</option>
                        @endforeach
                      </select>
                      @error('fakultas_id')
                         <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>

                    <button type="submit" class="btn  btn-primary me-2">Simpan</button>
                    <a  href="{{route('prodi.index')}}" class="btn btn-rounded btn-light">Batal</a>
                  </form>
                </div>
              </div>
            </div>
</div>

@endsection

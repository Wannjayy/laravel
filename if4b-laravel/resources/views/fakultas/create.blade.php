@extends('layout.main')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Fakultas</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="{{route('fakultas.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="nama_fakultas">Nama Fakultas</label>
                      <input type="text" class="form-control" name="nama_fakultas" value="{{old('nama_fakultas')}}"  placeholder="Nama Fakultas">
                      @Error('nama_fakultas')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama_dekan">Nama Dekan</label>
                      <input type="text" class="form-control" name="nama_dekan" placeholder="Nama Dekan">
                      @Error('nama_dekan')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama_wakil_dekan">Nama Wakil Dekan</label>
                      <input type="text" class="form-control" name="nama_wakil_dekan" placeholder="Nama Wakil Dekan">
                      @Error('nama_wakil_dekan')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                      <i class="input-helper"></i></label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <a  href="{{route('fakultas.index')}}" class="btn btn-rounded btn-light">Batal</a>
                  </form>
                </div>
              </div>
            </div>
</div>

@endsection

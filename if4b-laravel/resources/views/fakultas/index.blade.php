@extends('layout.main')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
    {{--
<P>Ini Halaman Fakultas </P>     --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if (Session::get('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <h4 class="card-title">Fakultas</h4>
                    <a href="{{ route('fakultas.create') }}" class="btn btn-primary">Tambah</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Fakultas</th>
                                    <th>Nama Dekan</th>
                                    <th>Nama Wakil Dekan</th>
                                    <th>Program Studi</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datafakultas as $item)
                                    <tr>
                                        <td>{{ $item->nama_fakultas }}</td>
                                        <td>{{ $item->nama_dekan }}</td>
                                        <td>{{ $item->nama_wakil_dekan }}</td>
                                        <td>
                                            @foreach ($item->prodi as $prodi)
                                                {{ $prodi->nama_prodi }},
                                            @endforeach
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <form id="delete-form-{{ $item->id }}"
                                                action="{{ route('fakultas.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger"
                                                    onclick="
                            Swal.fire({
                                title: 'Apakah Anda yakin ingin menghapus Fakultas ini?',
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
                                            </form>
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
    <!-- row end -->
@endsection



{{-- <!-- {{$fikr}} --> --}}

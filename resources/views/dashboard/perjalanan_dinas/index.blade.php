
@extends('dashboard.layouts.app')

@section('container')
    @if(session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid d-flex justify-content-beetwen">
        <a href="/perjalanan/create" class="btn btn-success mb-3 me-lg-3"><i class="fas fa-plus-square"></i></a>
        {{-- <a href="/perjalanan/cetak" class="btn btn-dark mb-3" target="_blank"><i class="mdi mdi-printer"></i></a> --}}
    </div>
        <div class="container-fluid">
            <table class="table table-responsive table-striped " id="myTable">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Lama Perjalanan</th>
                    <th scope="col">Tempat Berangkat</th>
                    <th scope="col">Tempat Tujuan</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tanggal Berangkat</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($perjalanans as $perjalanan)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $perjalanan->kendaraan->nama }}</td>
                    <td>{{ $perjalanan->lama_perjalanan }} Hari</td>
                    <td>{{ $perjalanan->tempat_berangkat }}</td>
                    <td>{{ $perjalanan->tempat_tujuan }}</td>
                    <td>{{ $perjalanan->anggaran }}</td>
                    <td>{{ $perjalanan->tanggal_berangkat }}</td>
                    <td>{{ $perjalanan->tanggal_kembali }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="/perjalanan/{{ $perjalanan->id }}/edit" class="btn btn-warning me-1 btn-md"><i class="fas fa-edit"></i></a> 
                            <form action="/perjalanan/{{ $perjalanan->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0 ml-1 btn-md" onclick="confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                        </div>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @push('scripts')
        <script>
        $(function() {
            $('#perjalanans-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('perjalanan-data') !!}',
                columns: [
                    { data: 'kendaraan', name: 'kendaraan' },
                    { data: 'tempat_berangkat', name: 'tempat_berangkat' },
                    { data: 'tempat_tujuan', name: 'tempat_tujuan' },
                    { data: 'anggaran', name: 'anggaran' },
                    { data: 'tanggal_berangkat', name: 'tanggal_berangkat' },
                    { data: 'tanggal_kembali', name: 'tanggal_kembali' },
                ]
            });
        });
        </script>
        @endpush
@endsection

@extends('dashboard.layouts.app')

@section('container')
    @if(session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid d-flex justify-content-beetwen">
        <a href="/instansi/create" class="btn btn-success mb-3 me-lg-3"><i class="fas fa-plus-square"></i></a>
    </div>
        <div class="container container-fluid">
            <table class="table table-responsive table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP/Fax</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kode Pos</th>
                    <th scope="col">Domisili</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($instansis as $instansi)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $instansi->nama }}</td>
                    <td>{!! $instansi->alamat !!}</td>
                    <td>{{ $instansi->no_hp }}</td>
                    <td>{{ $instansi->email }}</td>
                    <td>{{ $instansi->kode_pos }}</td>
                    <td>{{ $instansi->domisili }}</td>
                    <td>
                        <a href="/instansi/{{ $instansi->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>|
                        <a href="/instansi/{{ $instansi->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>|
                        <form action="/instansi/{{ $instansi->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0" onclick="confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
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
            $('#instansis-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('instansi-data') !!}',
                columns: [
                    { data: 'nama', name: 'nama' },
                    { data: 'alamat', name: 'alamat' },
                    { data: 'no_hp', name: 'no_hp' },
                    { data: 'email', name: 'email' },
                    { data: 'kode_pos', name: 'kode_pos' },
                    { data: 'domisili', name: 'domisili' },
                    { data: 'gambar', name: 'gambar' },
                ]
            });
        });
        </script>
        @endpush
@endsection

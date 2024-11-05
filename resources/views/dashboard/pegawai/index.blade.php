@extends('dashboard.layouts.app')

@section('container')
    @if(session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid d-flex justify-content-beetwen">
        <a href="/pegawai/create" class="btn btn-success mb-3 me-lg-3"><i class="fas fa-plus-square"></i></a>
        {{-- <a href="/pegawai/cetak" class="btn btn-dark mb-3" target="_blank"><i class="mdi mdi-printer"></i></a> --}}
    </div>
        <div class="container container-fluid">
            <table class="table table-responsive table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nip</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pegawais as $pegawai)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->nip }}</td>
                    <td>
                        <a href="/pegawai/{{ $pegawai->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a> |
                        <form action="/pegawai/{{ $pegawai->id }}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="confirmed" value="true">
                        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
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
            $('#pegawais-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('pegawai-data') !!}',
                columns: [
                    { data: 'nama', name: 'nama' },
                    { data: 'nip', name: 'nip' },
                    { data: 'pengikut', name: 'pengikut' },
                ]
            });
        });
        </script>
        @endpush
@endsection

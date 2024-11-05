@extends('dashboard.layouts.app')

@section('container')
    @if(session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid d-flex justify-content-beetwen">
        <a href="/jabatan/create" class="btn btn-success mb-3 me-lg-3"><i class="fas fa-plus-square"></i></a>
        {{-- <a href="/jabatan/cetak" class="btn btn-dark mb-3" target="_blank"><i class="mdi mdi-printer"></i></a> --}}
    </div>
        <div class="container container-fluid">
            <table class="table table-responsive table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($jabatans as $jabatan)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $jabatan->nama }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="/jabatan/{{ $jabatan->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <form action="/jabatan/{{ $jabatan->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0 ml-1" onclick="confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
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
            $('#jabatans-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('jabatan-data') !!}',
                columns: [
                    { data: 'nama', name: 'nama' },
                ]
            });
        });
        </script>
        @endpush
@endsection

@extends('dashboard.layouts.app')

@section('container')
    @if(session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid d-flex justify-content-beetwen">
        <a href="/pangkat/create" class="btn btn-success mb-3 me-lg-3"><i class="fas fa-plus-square"></i></a>
        {{-- <a href="/pangkat/cetak" class="btn btn-dark mb-3" target="_blank"><i class="mdi mdi-printer"></i></a> --}}
    </div>
        <div class="container container-fluid">
            <table class="table table-responsive table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pangkat</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pangkats as $pangkat)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $pangkat->golongan }}/{{ $pangkat->ruang }}</td>
                    <td>
                        <a href="/pangkat/{{ $pangkat->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a> |
                        <form action="/pangkat/{{ $pangkat->id }}" method="post" class="d-inline">
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
            $('#pangkats-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('pangkat-data') !!}',
                columns: [
                    { data: 'golongan', name: 'golongan' },
                    { data: 'ruang', name: 'ruang' },
                ]
            });
        });
        </script>
        @endpush
@endsection

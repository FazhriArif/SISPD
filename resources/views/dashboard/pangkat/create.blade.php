@extends('dashboard.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Tambah Data Pangkat</h2>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="portlet light bordered">
                    <div class="form-body">
                        <form action="/pangkat" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <label for="golongan ruang" class="form-label d-flex justify-content-center">Masukan Pangkat</label><br>
                        <div class="mb-3 form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control @error('golongan')
                                is-invalid
                            @enderror" id="golongan" name="golongan" placeholder="Enter I II III IV ..." autofocus required value="{{ old('golongan') }}">
                            @error('golongan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="col-sm-6">
                            <input type="text" class="form-control @error('ruang')
                                is-invalid
                            @enderror" id="ruang" name="ruang" placeholder="Enter a b c d ..." autofocus required value="{{ old('ruang') }}">
                            @error('ruangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url()->previous() }}" class="btn btn-primary me-md-2 mr-2">Kembali</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('dashboard.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Create Data Instansi</h2>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="portlet light bordered">
                    <div class="form-body">
                        <form action="/instansi" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Instansi</label>
                            <input type="text" class="form-control @error('nama')
                                is-invalid
                            @enderror" id="nama" name="nama" placeholder="Enter Instansi..." autofocus required value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Instansi</label>
                            <input type="text" class="form-control @error('domisili')
                                is-invalid
                            @enderror" id="alamat" name="alamat" placeholder="Enter Alamat..." autofocus required value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No Telpon / Fax Instansi</label>
                            <input type="text" class="form-control @error('no_hp')
                                is-invalid
                            @enderror" id="no_hp" name="no_hp" placeholder="Enter No Telpon / Fax Instansi..." autofocus required value="{{ old('no_hp') }}">
                            @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Instansi</label>
                            <input type="text" class="form-control @error('email')
                                is-invalid
                            @enderror" id="email" name="email" placeholder="Enter Email Instansi..." autofocus required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kode_pos" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control @error('kode_pos')
                                is-invalid
                            @enderror" id="kode_pos" name="kode_pos" placeholder="Enter Kode Pos..." autofocus required value="{{ old('kode_pos') }}">
                            @error('kode_pos')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label for="domisili" class="form-label">Domisili</label>
                            <input type="text" class="form-control @error('domisili')
                                is-invalid
                            @enderror" id="domisili" name="domisili" placeholder="Enter Domisili..." autofocus required value="{{ old('domisili') }}">
                            @error('domisili')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="d-flex justify-content-center">
                            <a href="{{ url()->previous() }}" class="btn btn-primary me-md-2">Kembali</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

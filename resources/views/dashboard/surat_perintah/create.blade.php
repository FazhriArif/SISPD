@extends('dashboard.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Create Data</h2>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="portlet light bordered">
                    <div class="form-body">
                        <form action="/surat" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="mb-3">
                            <label for="pegawai_id" class="form-label">Pegawai</label>
                            <select class="form-select" name="pegawai_id">
                                @foreach($pegawais as $pegawai)
                                    @if(old('pegawai_id') == $pegawai->id)
                                        <option value="{{ $pegawai->id }}" selected>{{ $pegawai->nama }}</option>
                                    @else
                                        <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('pegawai_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="perjalanan_id" class="form-label">Tempat Tujuan Perjalanan Dinas</label>
                            <select class="form-select" name="perjalanan_id">
                                @foreach($perjalanans as $perjalanan)
                                    @if(old('perjalanan_id') == $perjalanan->id)
                                        <option value="{{ $perjalanan->id }}" selected>{{ $perjalanan->tempat_tujuan }}</option>
                                    @else
                                        <option value="{{ $perjalanan->id }}">{{ $perjalanan->tempat_tujuan }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('perjalanan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor SPPD</label>
                            <input type="text" class="form-control @error('nomor')
                                is-invalid
                            @enderror" id="nomor" name="nomor" placeholder="Masukan Nomor SPPD..." autofocus required value="{{ old('nomor') }}">
                            @error('nomor')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="uraian" class="form-label">Uraian</label>
                            <input id="uraian" type="hidden" name="uraian" value="{{ old('uraian') }}">
                            <trix-editor input="uraian"></trix-editor>
                            @error('uraian')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @can('admin')
                        <div class="mb-3">
                            <label for="status_id" class="form-label">Status Surat</label>
                            <select class="form-select" name="status_id">
                                @foreach($statuses as $status)
                                    @if(old('status_id') == $status->id)
                                        <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
                                    @else
                                        <option value="{{ $status->id }}">{{ $status->status }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('status_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @endcan
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

@extends('dashboard.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Tambah Data Perjalanan</h2>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="portlet light bordered">
                    <div class="form-body">
                        <form action="/perjalanan" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="mb-3">
                            <label for="kendaraan_id" class="form-label">Kendaraan</label>
                            <select class="form-select" name="kendaraan_id">
                                @foreach($kendaraans as $kendaraan)
                                    @if(old('kendaraan_id') == $kendaraan->id)
                                        <option value="{{ $kendaraan->id }}" selected>{{ $kendaraan->nama }}</option>
                                    @else
                                        <option value="{{ $kendaraan->id }}">{{ $kendaraan->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('kendaraan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="lama_perjalanan" class="form-label">Lamanya Perjalanan</label>
                            <input type="text" class="form-control @error('lama_perjalanan')
                                is-invalid
                            @enderror" id="lama_perjalanan" name="lama_perjalanan" placeholder="Masukan Durasi Perjalanan..." autofocus required value="{{ old('lama_perjalanan') }}">
                            @error('lama_perjalanan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tempat_berangkat" class="form-label">Tempat Berangkat</label>
                            <input type="text" class="form-control @error('tempat_berangkat')
                                is-invalid
                            @enderror" id="tempat_berangkat" name="tempat_berangkat" placeholder="Masukan Tempat..." autofocus required value="{{ old('tempat_berangkat') }}">
                            @error('tempat_berangkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tempat_tujuan" class="form-label">Tempat Tujuan</label>
                            <input type="text" class="form-control @error('tempat_tujuan')
                                is-invalid
                            @enderror" id="tempat_tujuan" name="tempat_tujuan" placeholder="Masukan Tempat..." autofocus required value="{{ old('tempat_tujuan') }}">
                            @error('tempat_tujuan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="anggaran" class="form-label">Anggaran</label>
                            <input type="text" class="form-control @error('anggaran')
                                is-invalid
                            @enderror" id="anggaran" name="anggaran" placeholder="Masukkan Anggaran..." autofocus required value="{{ old('anggaran') }}">
                            @error('anggaran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat</label>
                            <input type="date" class="form-control @error('tanggal_berangkat')
                                is-invalid
                            @enderror" id="tanggal_berangkat" name="tanggal_berangkat" placeholder="Masukan Tempat..." autofocus required value="{{ old('tanggal_berangkat') }}">
                            @error('tanggal_berangkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control @error('tanggal_kembali')
                                is-invalid
                            @enderror" id="tanggal_kembali" name="tanggal_kembali" placeholder="Masukan Tempat..." autofocus required value="{{ old('tanggal_kembali') }}">
                            @error('tanggal_kembali')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input id="alamat" type="hidden" name="alamat" value="{{ old('alamat') }}">
                            <trix-editor input="alamat"></trix-editor>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
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

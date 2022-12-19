@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6">

            @if(session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Data</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('sertifikat.simpan') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="no_sertifikat" class="form-label small">Nomor Sertifikat</label>
                                <input type="text" class="form-control" name="no_sertifikat" id="no_sertifikat" placeholder="Masukkan nomor sertifikat" value="{{ old('no_sertifikat') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="tanggal_berlaku" class="form-label small">Tanggal Berlaku</label>
                                <input type="date" class="form-control" name="tanggal_berlaku" id="tanggal_berlaku" value="{{ old('tanggal_berlaku') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="tanggal_berakhir" class="form-label small">Tanggal Berakhir</label>
                                <input type="date" class="form-control" name="tanggal_berakhir" id="tanggal_berakhir" value="{{ old('tanggal_berakhir') }}">
                            </div>
                        </div>
                        <button class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                    <form action="{{ route('progress.simpan') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label small">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ old('tanggal') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="uraian" class="form-label small">Uraian</label>
                                <textarea class="form-control" name="uraian" id="uraian" rows="3" placeholder="Ketikan sesuatu..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="status" class="form-label small">Status</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="selesai" value="selesai">
                                    <label class="form-check-label" for="selesai">
                                        Selesai
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="berjalan" value="berjalan">
                                    <label class="form-check-label" for="berjalan">
                                        Berjalan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="tertunda" value="tertunda">
                                    <label class="form-check-label" for="tertunda">
                                        Tertunda
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gagal" value="gagal">
                                    <label class="form-check-label" for="gagal">
                                        Gagal
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="link" class="form-label small">Link File</label>
                                <input type="text" class="form-control" name="link" id="uraian" placeholder="Masukkan link drive">
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
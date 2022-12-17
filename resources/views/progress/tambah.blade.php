@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6">
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
                                <input type="date" class="form-control" id="tanggal" value="{{ old('tanggal') }}">
                            </div>
                            <div class="mb-3">
                                <label for="uraian" class="form-label small">Uraian</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
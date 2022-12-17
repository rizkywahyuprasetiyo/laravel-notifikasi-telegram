@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="text-primary">Data Progress Report</h1>
            <p class="text-secondary">Kumpulan data progress report dari masing-masing divisi</p>
            <a class="btn btn-sm btn-primary mt-3" href="{{ route('progress.tambah') }}">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Status</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Senin, 10 Sep 2022</td>
                    <td>Telah keluar persetujuan WIUP PT. ABC</td>
                    <td>selesai</td>
                    <td><a href="#">Lihat</a></td>
                    <td><a class="px-1" href="#">Edit</a><a class="px-1" href="#">Hapus</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
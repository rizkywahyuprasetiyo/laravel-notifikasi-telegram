@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="text-primary">Data Sertifikat IUP</h1>
            <p class="text-secondary">Kumpulan data sertifikat IUP berdasarkan tanggal berakhir berlakunya sertifikat.</p>
            <a class="btn btn-sm btn-primary mt-3" href="{{ route('sertifikat.tambah') }}">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">

            @if(session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nomor Sertifikat</th>
                    <th>Tanggal Berkalu</th>
                    <th>Tanggal Berakhir</th>
                    <th>Sisa Hari</th>
                    <th>Aksi</th>
                </tr>

                @foreach($dataSertifikat as $index => $sertifikat)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $sertifikat->no_sertifikat }}</td>
                    <td>{{ $sertifikat->tanggal_berlaku->isoFormat('dddd, D MMMM YYYY') }}</td>
                    <td>{{ $sertifikat->tanggal_berakhir->isoFormat('dddd, D MMMM YYYY') }}</td>
                    <td>{{ $sertifikat->tanggal_berakhir->diffForHumans() }}</td>
                    <td><a class="px-1" href="#">Edit</a><a class="px-1" href="#">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
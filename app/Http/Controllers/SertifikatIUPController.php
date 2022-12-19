<?php

namespace App\Http\Controllers;

use App\Models\SertifikatIUP;
use App\Http\Requests\SertifikatIUPRequest;

class SertifikatIUPController extends Controller
{
    public function index(SertifikatIUP $sertifikat)
    {
        $dataSertifikat = $sertifikat->orderby('tanggal_berakhir', 'asc')->get();

        return view('sertifikatIUP.index', compact('dataSertifikat'));
    }

    public function tambah()
    {
        return view('sertifikatIUP.tambah');
    }

    public function simpan(SertifikatIUP $sertifikat, SertifikatIUPRequest $sertifikatIUPRequest)
    {
        $data = $sertifikatIUPRequest->validated();

        $sertifikat->create($data);

        return redirect(route('sertifikat.index'))->with('berhasil', 'Data sertifikat IUP berhasil ditambahkan.');
    }
}

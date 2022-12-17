<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;
use App\Http\Requests\ProgressRequest;
use App\Notifications\SendNotification;
use Illuminate\Support\Facades\Notification;

class ProgressController extends Controller
{
    public function index(Progress $progress)
    {
        $dataProgress = $progress->get();

        return view('progress.index', compact('dataProgress'));
    }

    public function tambah()
    {
        return view('progress.tambah');
    }

    public function simpan(Progress $progress, ProgressRequest $progressRequest)
    {
        $data = $progressRequest->validated();

        $dataProgress = $progress->create($data);

        Notification::send($dataProgress, new SendNotification());

        return back()->with('berhasil', 'Data progress berhasil ditambahkan.');
    }
}

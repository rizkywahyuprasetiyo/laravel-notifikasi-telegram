<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;

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
}

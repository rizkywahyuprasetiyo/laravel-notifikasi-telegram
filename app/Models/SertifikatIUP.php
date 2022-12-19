<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatIUP extends Model
{
    use HasFactory;

    protected $table = 'sertifikat_iup';

    protected $dates = ['tanggal_berlaku', 'tanggal_berakhir'];

    protected $fillable = ['no_sertifikat', 'tanggal_berlaku', 'tanggal_berakhir'];
}

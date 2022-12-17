<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $dates = ['tanggal'];

    protected $table = 'progress';

    protected $fillable = [
        'tanggal',
        'uraian',
        'status',
        'link'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $fillable = [
        'idDiag',
        'penyakit'
    ];

    public function gejalas()
    {
        return $this->belongsTo(Diagnosa::class, 'idDiag');
    }
}

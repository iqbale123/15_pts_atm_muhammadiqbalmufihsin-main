<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tariktunai extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'n0_rekening',
        'no_tujuan',
    ];

}

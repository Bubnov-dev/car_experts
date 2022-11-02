<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $casts = [
        'photosGeneralOut' => 'array',
        'photosGeneralIn' => 'array',
        'photosVIN' => 'array',
        'photosDocks' => 'array',
        'photosTires' => 'array',
        'paintedParts' => 'array',
        'photosBadParts' => 'array',
        'badParts' => 'array',
        'badPartsIn' => 'array',
        'badPartsOut' => 'array',
        'badPartsDirty' => 'array',
        'equipment' => 'array',
        'video' => 'array',

    ];

    protected $guarded = [];
}

<?php

namespace App\Models;

use App\Enums\FeatureStatuses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => FeatureStatuses::class
    ];
}

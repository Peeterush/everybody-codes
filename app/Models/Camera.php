<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    /** @use HasFactory<\Database\Factories\CameraFactory> */
    use HasFactory;

    protected $fillable = ['number', 'area', 'name', 'latitude', 'longitude'];

    protected $appends = ['code'];

    protected function getCodeAttribute()
    {
        return $this->area . '-' . $this->number;
    }
}

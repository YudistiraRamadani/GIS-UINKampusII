<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    use HasFactory;
    protected $table = 'buildings';
    protected $fillable = [
        'name',
        'address',
        'description',
        'opening_hours',
        'floors',
        'rooms_per_floor',
        'area',
        'latitude',
        'longitude',
        'additional_facilities',
        'contact_info',
        'image_path'
    ];
}

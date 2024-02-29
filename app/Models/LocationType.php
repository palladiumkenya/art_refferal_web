<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationType extends Model
{
    use HasFactory;
    public $table = 'tbl_location_type';
    public $timestamps = true;
    protected $fillable = [
        'name'
    ];
}

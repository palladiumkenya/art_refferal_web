<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityLocationDetail extends Model
{
    use HasFactory;

    public $table = 'tbl_location_details';
    public $timestamps = false;
    protected $primaryKey = 'location_details_id';
    protected $fillable = [
        'location_id',
        'location_type',
        'telephone',
        'email'
    ];
}

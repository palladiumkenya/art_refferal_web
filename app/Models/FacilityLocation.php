<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityLocation extends Model
{
    use HasFactory;
    public $table = 'tbl_location';
    protected $primaryKey = 'location_id';

    protected $fillable = [
        'mfl_code',
        'partner_id',
        'is_active'
    ];
}

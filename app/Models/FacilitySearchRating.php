<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilitySearchRating extends Model
{
    use HasFactory;

    public $table = 'tbl_facility_search_ratings';

    protected $fillable = [
        'mfl_code', 'rating', 'comment'
    ];
}

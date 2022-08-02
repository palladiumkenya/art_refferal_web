<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    public $table = 'tbl_provider';
    public $timestamps = false;

    protected $fillable = [
        'person_id', 'mfl_code', 'msisdn', 'created_date', 'created_by', 'updated_date', 'updated_by',
    ];

    public function person()
    {
        return $this->belongsTo('App\Models\Person', 'person_id', 'person_id');
    }
}

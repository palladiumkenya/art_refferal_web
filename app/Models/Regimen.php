<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    use HasFactory;
    public $table = 'tbl_regimen';
    protected $primaryKey = 'regimen_id';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderUser extends Model
{
    use HasFactory;
    public $table = 'tbl_user';

    protected $fillable = [
        'person_id', 'email', 'is_active', 'username'
    ];
}

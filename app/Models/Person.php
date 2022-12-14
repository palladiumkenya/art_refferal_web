<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    public $table = 'tbl_person';

    protected $primaryKey = 'person_id';

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
    ];



    public function user()
    {
        return $this->hasOne(User::class, 'person_id');
    }

    public function provider()
    {
        return $this->hasOne(Provider::class, 'person_id');
    }

}

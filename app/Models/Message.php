<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public $table = 'tbl_messages';

    protected $fillable = [
        'message_type',
        'message_content',
    ];
}

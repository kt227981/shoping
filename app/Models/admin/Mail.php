<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    public $table = 'mail';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'reply',
        'message',
    ];

}

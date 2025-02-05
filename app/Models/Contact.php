<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contactform';
    protected $fillable = [
        'id',
        'name',
        'lastname',
        'email',
        'phone',
        'message',
        'created_at',
    ];


}

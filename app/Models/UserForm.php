<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    use HasFactory;

    protected $table = 'user_forms';
    public $timestamps = false;

    protected $fillable = [
        'username', 'email', 'password', 'skills', 'gender', 'age',
    ];
}

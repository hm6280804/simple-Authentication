<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class User extends Model
// {
//     use HasFactory;
//     public $timestamps = false;
//     protected $guarded = [];
// }

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = [];
    
    // Optionally, you can define fillable fields if needed
    // protected $fillable = ['name', 'email', 'password'];

    // Optionally, you can hide sensitive fields from arrays
    // protected $hidden = ['password', 'remember_token'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Akun extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'role', 'image'];
}

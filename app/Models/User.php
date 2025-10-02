<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    // Which fields can be mass-assigned
    protected $fillable = [
        'first_name',
        'last_name',
        'usn',
        'email',
        'password',
        'phone_number',
        'role',
        'profile_picture',
        'last_login',
        'is_active',
    ];

    // Hide sensitive fields
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast fields to proper types
    protected $casts = [
        'is_active' => 'boolean',
        'last_login' => 'datetime',
    ];

    // Role checkers (helper methods)
    public function isStudent()
    {
        return $this->role === 0;
    }
  
    public function isTeacher()
    {
        return $this->role === 1;
    }

    public function isAdmin()
    {
        return $this->role === 2;
    }
}

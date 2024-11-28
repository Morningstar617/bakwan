<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable 
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Model
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'uid',
        'password',
        'role'
    ];

<<<<<<< HEAD
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

=======
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

}
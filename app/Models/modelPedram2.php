<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelPedram2 extends Model
{
    use HasFactory;//, HasApiTokens, Notifiable;

    protected $fillable = [
        'fname',
        'lname',
        'email_verified_at',
    ];

    protected $guarded = [
        'fname',
        'lname',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}

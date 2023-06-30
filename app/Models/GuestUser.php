<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class GuestUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'device_id',
        'writer_limit',
        'chat_limit',
        'image_limit',
        'fcmtoken',
    ];

    protected $hidden = [
        'id', 
        'created_at',
        'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'customer_id',
        'name',
        'phone',
        'email',
        'status',
        'password',
        'writer_limit',
        'chat_limit',
        'image_limit',
        'fcmtoken',
    ];
 
    public function subscription(): HasOne
    {
        return $this->hasOne(SubscriptionUser::class,'user_id');
    }
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Передача в компоненты inertia в нужном формате
    // Используется для добавления в JSON-представление модели атрибута formatted_created_at,
    // который представляет собой отформатированную версию created_at
    protected $appends = ['formatted_created_at'];

    public function getFormattedCreatedAtAttribute()
    {
        // return Carbon::parse($this->attributes['created_at'])->format('Y.m.d H:i:s');
        return Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }
}

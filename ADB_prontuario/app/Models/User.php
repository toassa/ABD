<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'num_USP';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_USP',
        'name',
        'email',
        'password',
        'CPF',
        'cargo',
        'administrador',
        'ativo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getIncrementing()
    {
        return false;
    }

    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'num_USP', 'num_USP');
    }
}

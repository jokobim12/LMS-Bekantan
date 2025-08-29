<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    // Relationship
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Helper Methods untuk Check Role
    public function hasRole($role)
    {
        return $this->role && $this->role->name === $role;
    }

    public function isPengajar()
    {
        return $this->hasRole('pengajar');
    }

    public function isSiswa()
    {
        return $this->hasRole('siswa');
    }

    public function isManager()
    {
        return $this->hasRole('manager');
    }

    public function getRoleNameAttribute()
    {
        return $this->role ? $this->role->display_name : 'No Role';
    }
}
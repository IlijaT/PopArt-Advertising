<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function publish($advert)
    {
        return $this->adverts()->save($advert);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // $role is a string not Role object
    public function assignRole($role)
    {
        return $this->roles()->sync(
            Role::whereName($role)->firstOrFail()
        );
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        foreach ($role as $r) {
            if ($this->hasRole($r->name)) {
                return true;
            }
        }

        return false;
    }
}

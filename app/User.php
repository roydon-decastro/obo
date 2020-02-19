<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Remark;

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

    
    public function remarks() 
    {
        return $this->hasMany(Remark::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isActive()
    {
        return $this->status === 'active';
    }

    public function hasBuildingAccess()
    {
        return $this->building === 'granted';
    }

    
    public function hasCivilAccess()
    {
        return $this->civil === 'granted';
    }

    
    public function hasElectricalAccess()
    {
        return $this->electrical === 'granted';
    }

    
    public function hasElectronicsAccess()
    {
        return $this->electronics === 'granted';
    }

    
    public function hasMechanicalAccess()
    {
        return $this->mechanical === 'granted';
    }

    
    public function hasPlumbingAccess()
    {
        return $this->plumbing === 'granted';
    }

    public function hasUpdateAccess()
    {
        return $this->editaccess === 'granted';
    }

}

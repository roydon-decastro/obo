<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    //
    protected $fillable = ['name'];

    //permit relationship
    public function permits() 
    {
        return $this->hasMany(Permit::class);
    }
}

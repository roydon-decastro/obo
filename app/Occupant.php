<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupant extends Model
{
    //
    protected $fillable = ['name'];

    
    public function permits()
    {
        return $this->belongsToMany(Permit::class);
    }
}

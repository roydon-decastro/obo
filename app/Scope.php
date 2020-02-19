<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scope extends Model
{
    //
    protected $fillable = ['name'];

    public function permits()
    {
        return $this->belongsToMany(Permit::class);
    }
}

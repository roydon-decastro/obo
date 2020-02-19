<?php

namespace App;
use App\Permit;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    //
    protected $guarded = [];

    public function permit() 
    {
        return $this->belongsTo(Permit::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    
}

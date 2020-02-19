<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use OwenIt\Auditing\Contracts\Auditable;
use App\Remark;

class Permit extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    //
    protected $fillable = [
        'type', 'state_id', 'fname', 'lname', 'mi_name', 'tin', 'ownerform', 'address', 'barangay_id', 'zipcode', 'telephone', 'loc_lot', 'loc_blk',
        'loc_street', 'loc_brgy', 'tct', 'taxdec', 'scope_id', 'useofoccupancy', 'storeys', 'floorarea', 'cost', 'start','end',
        'image', 'email', 'category_id', 'application_id'
    ];

    public function scopeImmediate($query)
    {
        return $query->where('accepted_date', '<=', Carbon::now()->subDays(2)->toDateTimeString())
        ->where('state_id', '<', '5');   //Complete
    }

    public function scopeNewpermits($query)
    {
        return $query->where('state_id',1);
    }

    public function scopeCompleted($query)
    {
        return $query->where('state_id','>',4);
    }

    public function scopeProcessing($query)
    {
        return $query->where('state_id','>',1)
                     ->where('state_id','<=',5);
    }




    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function state() 
    {
        return $this->belongsTo(State::class);
    }


    public function barangay() 
    {
        return $this->belongsTo(Barangay::class);
    }

    public function scopes() //plural for many-to-many
    {
        return $this->belongsToMany(Scope::class);
    }

    public function occupants() //plural for many-to-many
    {
        return $this->belongsToMany(Occupant::class);
    }

    public function remarks() 
    {
        return $this->hasMany(Remark::class);
    }
/**
 * Checks if permit has scopes
 * @ return bool
 */
    public function hasScope($scopeId)
    {
        return in_array($scopeId, $this->scopes->pluck('id')->toArray());
    }

/**
 * Checks if permit has occupants
 * @ return bool
 */
public function hasOccupant($occupantId)
{
    return in_array($occupantId, $this->occupants->pluck('id')->toArray());
}


}

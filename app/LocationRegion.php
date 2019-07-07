<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationRegion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'location_regions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias','name','translit',
        'type','available',
    ];

    /**
     * Get the administrative center associated with the region.
     */
    public function adminCenter()
    {
        return $this->hasOne('App\LocationRegionCenter', 'region_id');
    }

    /**
     * Get the districts associated with the region.
     */
    public function districts()
    {
        return $this->hasMany('App\LocationRegionDistrict', 'region_id');
    }
    
}

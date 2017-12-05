<?php

namespace App;

use App\Weight;
use App\Tournament;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Boxer extends Model
{
    protected $guarded = [];

    protected $with = ['weights'];

    protected $appends = ['overall', 'age', 'image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tournaments()
    {
    	return $this->belongsToMany(Tournament::class);
    }

    public function weights()
    {
        return $this->belongsTo(Weight::class, 'weight_id');
    }

    public function similar()
    {
        $ovr = $this->overall;

        $boxers = Boxer::where('id', '!=', $this->id)->get();
        
        return $boxers->filter(function($key) use ($ovr) {
            return abs($key->overall - $ovr) < 4 ;
        });
    }

    public function getOverallAttribute()
    {
        return round((($this->power + $this->speed + $this->defense + $this->offense + $this->chin + $this->stamina) / 6 ));
    }

    public function getAgeAttribute()
    {
        $dt = Carbon::createFromFormat('Y-m-d', $this->dob);
        
        return $dt->diffInYears(Carbon::now());
    }

    public function getImageAttribute()
    {
        return asset($this->image_path);
    }
	
    public function scopeFilter($query, $filter)
    {
    	if ($country = $filter['country']) {
    		$query->where('country', $country);
    	}
    	if ($weight = $filter['weight']) {
    		$query->where('weight', $weight);
    	}
    }
}

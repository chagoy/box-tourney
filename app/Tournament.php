<?php

namespace App;

use App\Boxer;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $guarded = [];

    protected $with = ['boxers'];

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function boxers()
    {
    	return $this->belongsToMany(Boxer::class);
    }

    public function path()
    {
        return "/tournament/{$this->slug}";
    }
}

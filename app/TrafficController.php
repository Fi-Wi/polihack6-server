<?php

namespace App;

use App\TrafficLight;
use Illuminate\Database\Eloquent\Model;

class TrafficController extends Model
{
    protected $guard = [];

    public function trafficLights()
    {
        return $this->hasMany(TrafficLight::class);
    }
}

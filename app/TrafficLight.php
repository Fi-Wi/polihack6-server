<?php

namespace App;

use App\TrafficController;
use Illuminate\Database\Eloquent\Model;

class TrafficLight extends Model
{
    protected $guard = [];

    public function trafficController()
    {
        return $this->belongsTo(TrafficController::class);
    }
}

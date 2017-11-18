<?php

namespace App\Http\Controllers;

use App\TrafficController;
use Illuminate\Http\Request;

class TrafficControllerController extends Controller
{
    public function index()
    {
        return TrafficController::all();
    }

    public function store(Request $request)
    {
        return TrafficController::create($request->all());
    }

    public function show(TrafficController $trafficController)
    {
        return $trafficController->with('trafficLights');
    }

    public function destroy(TrafficController $trafficController)
    {
        $trafficController->trafficLights->each->delete();
        $trafficController->delete();
    }
}

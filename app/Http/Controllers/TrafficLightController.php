<?php

namespace App\Http\Controllers;

use App\TrafficLight;
use Illuminate\Http\Request;

class TrafficLightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TrafficLight::all();
    }

    public function store(Request $request)
    {
        return TrafficLight::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrafficLight  $trafficLight
     * @return \Illuminate\Http\Response
     */
    public function show(TrafficLight $trafficLight)
    {
        return $trafficLight;
    }

    public function destroy(TrafficLight $trafficLight)
    {
        $trafficLight->delete();
    }
}

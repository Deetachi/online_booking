<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\User;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('view_vehicles',  compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assigned_drivers = Vehicle::pluck('user_id');
        $drivers = User::all();
        return view('add_vehicle',  compact('drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle();

        $vehicle->number = $request->number;
        $vehicle->name = $request->name;
        $vehicle->description = $request->description;
        $vehicle->user_id = $request->driver;
        $vehicle->save();

        return redirect()->route('view_vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $drivers = User::all();
        return view('edit_vehicle',  compact('vehicle', 'drivers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->number = $request->number;
        $vehicle->name = $request->name;
        $vehicle->description = $request->description;
        $vehicle->user_id = $request->user_id;
        $vehicle->save();

        return redirect()->route('view_vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        Vehicle::destroy($vehicle->id);
        $notification = array(
            'message' => 'Vehicle Removed Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view_vehicles')->with($notification);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halls = Hall::all();
        return view('view_halls', compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hall = new Hall();

        $hall->name = $request->name;
        $hall->description = $request->description;
        $hall->occupancy = $request->occupancy;
        $hall->location = $request->location;
        $hall->save();

        return redirect()->route('view_halls');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HallBooking  $hallBooking
     * @return \Illuminate\Http\Response
     */
    public function show(Hall $hall)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HallBooking  $hallBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(Hall $hall)
    {
        return view('edit_hall',  compact('hall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HallBooking  $hallBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hall $hall)
    {
        $hall->name = $request->name;
        $hall->description = $request->description;
        $hall->occupancy = $request->occupancy;
        $hall->location = $request->location;
        $hall->save();

        return redirect()->route('view_halls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HallBooking  $hallBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hall $hall)
    {
        Hall::destroy($hall->id);
        $notification = array(
            'message' => 'Hall Removed Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view_halls')->with($notification);
    }
}

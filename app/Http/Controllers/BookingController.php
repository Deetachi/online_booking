<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Vehicle;
use App\Models\User;
use App\Models\Role;
use App\Models\Hall;
use App\Mail\VehicleBookingAdminMail;
use App\Mail\VehicleBookingUserMail;
use App\Mail\HallBookingAdminMail;
use App\Mail\HallBookingUserMail;
use App\Mail\VehicleBookingDriverMail;

use Illuminate\Http\Request;
use Mail;
use Auth;

class BookingController extends Controller
{
    public function vehicle_booking(Request $request, $id) {
        $driver_detail = Vehicle::find($id)->user;
        $vehicle_detail = Vehicle::find($id);
        return view('book_vehicle',  compact('driver_detail', 'id', 'vehicle_detail'));
    }

    public function hall_booking(Request $request, $id) {
        $hall_detail = Hall::find($id);
        return view('book_hall',  compact('id', 'hall_detail'));
    }

    public function apply_vehicle_booking(Request $request, $id) {
        $timestamp_from = strtotime($request->from_date);
        $timestamp_to = strtotime($request->to_date);

        $vehicle_bookings = Booking::where([
            'bookable_type'=>'Vehicle',
            'bookable_id'=>$id
        ]);

        $booked = false;
        foreach($vehicle_bookings as $booking) {
            if($this->check_time_overlap($timestamp_from, $timestamp_to, $booking->from_timestamp, $booking->to_timestamp)) {
                $booked = true;
                break;
            }
        }

        if($booked) {
            return redirect()->route('vehicle_booking')->withErrors('Sorry the vehicle is already booked');
        }

        $booking = new Booking();

        $booking->user_id = Auth::id();
        $booking->bookable_type = 'Vehicle';
        $booking->bookable_id = $id;
        $booking->from_timestamp = $timestamp_from;
        $booking->to_timestamp = $timestamp_to;
        $booking->location = $request->travel_option;
        $booking->save();

        $super_admin_role_id = Role::where(['name' => 'super_admin'])->first()->id;
        $super_admin_email = User::where(['role_id' => $super_admin_role_id])->first()->email;
        // $driver_email = Vehicle::find($id)->user->email;
        $user_email = User::find(Auth::id())->email;

        Mail::to($super_admin_email)->send(new VehicleBookingAdminMail($booking));
        Mail::to($user_email)->send(new VehicleBookingUserMail($booking));
        // Mail::to($driver_email)->send(new VehicleBookingDriverMail($booking));

        return redirect()->route('view_vehicles');
    }

    public function apply_hall_booking(Request $request, $id) {
        $timestamp_from = strtotime($request->from_date);
        $timestamp_to = strtotime($request->to_date);

        $hall_bookings = Booking::where([
            'bookable_type'=>'Hall',
            'bookable_id'=>$id
        ]);

        $booked = false;
        foreach($hall_bookings as $booking) {
            if($this->check_time_overlap($timestamp_from, $timestamp_to, $booking->from_timestamp, $booking->to_timestamp)) {
                $booked = true;
                break;
            }
        }

        if($booked) {
            return redirect()->route('hall_booking')->withErrors('Sorry the Hall is already booked');
        }

        $booking = new Booking();

        $booking->user_id = Auth::id();
        $booking->bookable_type = 'Hall';
        $booking->bookable_id = $id;
        $booking->from_timestamp = $timestamp_from;
        $booking->to_timestamp = $timestamp_to;
        $booking->location = 'Default';
        $booking->save();

        $super_admin_role_id = Role::where(['name' => 'super_admin'])->first()->id;
        $super_admin_email = User::where(['role_id' => $super_admin_role_id])->first()->email;
        $user_email = User::find(Auth::id())['email'];

        // Mail::to($super_admin_email)->send(new HallBookingAdminMail($booking));
        // Mail::to($user_email)->send(new HallBookingUserMail($booking));

        return redirect()->route('view_halls');
    }


    function check_time_overlap($start_time1, $end_time1, $start_time2, $end_time2) {
        return (($start_time1) <=  ($end_time2) && ($start_time2) < ($end_time1) ? true : false);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle_bookings = Booking::where(['bookable_type'=>'Vehicle'])->get();
        $hall_bookings = Booking::where(['bookable_type'=>'Hall'])->get();
        return view('dashboard.index',  compact('vehicle_bookings', 'hall_bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}

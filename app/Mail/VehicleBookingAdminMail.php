<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VehicleBookingAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $vehicle_booking;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        $this->vehicle_booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Vehicle Booking Request')
                    ->view('emails.vehicleBookingRequest');
    }
}

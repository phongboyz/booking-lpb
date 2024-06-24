<?php

namespace App\Livewire\Fontend\Member;

use Livewire\Component;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\LogBooking;

class ListBookingComponent extends Component
{
    
    public function mount(){
        $log = LogBooking::where('read',1)->update(['read'=>0]);
    }

    public function render()
    {
        $data = BookingDetail::join('bookings','booking_details.booking_code','=','bookings.code')->where('bookings.user_id',auth()->user()->id)->get();
        return view('livewire.fontend.member.list-booking-component',compact('data'));
    }
}

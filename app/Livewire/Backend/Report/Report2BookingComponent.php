<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\LogBooking;
use App\Models\CheckInOut;

class Report2BookingComponent extends Component
{
    public function render()
    {
        $data = Booking::where('approve_id',auth()->user()->id)->orderBy('id','asc')->get();
        return view('livewire.backend.report.report2-booking-component',compact('data'))->layout('components.layouts.backend.app');
    }

    public function print(){
        $this->dispatch('refresh_print');
    }
}

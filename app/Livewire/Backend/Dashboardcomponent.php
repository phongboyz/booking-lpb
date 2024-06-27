<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Booking;

class Dashboardcomponent extends Component
{
    public function render()
    {
        if(auth()->user()->rolename->name == 'admin'){
            $hotel = count(Hotel::get());
            $new = count(Booking::whereIn('status',[2,3])->get());
            $pending = count(Booking::where('status',1)->get());
            $cancel = count(Booking::where('status',0)->get());
        }else{
            $hotel = count(Hotel::where('user_id',auth()->user()->id)->get());
            $new = count(Booking::whereIn('status',[2,3])->where('approve_id',auth()->user()->id)->get());
            $pending = count(Booking::where('status',1)->where('approve_id',auth()->user()->id)->get());
            $cancel = count(Booking::where('status',0)->where('approve_id',auth()->user()->id)->get());
        }
        return view('livewire.backend.dashboardcomponent',compact('hotel','new','pending','cancel'))->layout('components.layouts.backend.app');
    }
}

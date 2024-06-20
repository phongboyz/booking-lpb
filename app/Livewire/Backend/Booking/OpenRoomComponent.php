<?php

namespace App\Livewire\Backend\Booking;

use Livewire\Component;
use App\Models\District;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Booking;
use App\Models\BookingDetail;

class OpenRoomComponent extends Component
{
    public $data;

    public function render()
    {
        $this->data = Room::where('user_id',auth()->user()->id)->get();
        return view('livewire.backend.booking.open-room-component')->layout('components.layouts.backend.app');
    }
}

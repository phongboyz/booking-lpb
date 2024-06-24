<?php

namespace App\Livewire\Backend\Booking;

use Livewire\Component;
use App\Models\District;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\CheckInOut;

class OpenRoomComponent extends Component
{
    public $data;
    public $room_id;
    public $code, $name, $phone;

    public function render()
    {
        $this->data = Room::where('user_id',auth()->user()->id)->get();
        return view('livewire.backend.booking.open-room-component')->layout('components.layouts.backend.app');
    }

    public function open($ids){
        $this->room_id = $ids;
        $room = Room::find($id);
        $this->dispatch('show-open');
    }

    public function checkin(){

    }

    public function close($ids){
        $room = Room::find($ids);

        $checkin = CheckInOut::where('hotel_id',$room->hotel_id)->where('room_id',$room->id)->where('status',0)->first();
        $checkin->checkout = date('Y-m-d');
        $checkin->status = 1;
        $checkin->save();

        $room->status = 1;
        $room->save();

        session()->flash('success', 'check out ສຳເລັດ');
        return redirect(route('openrooms'));
    }

    public function checkout(){

    }
}

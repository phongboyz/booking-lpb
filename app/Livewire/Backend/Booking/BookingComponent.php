<?php

namespace App\Livewire\Backend\Booking;

use Livewire\Component;
use App\Models\District;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\LogBooking;
use App\Models\CheckInOut;

class BookingComponent extends Component
{
    public $data, $count, $provinces;
    public $pro_id, $name, $detail, $img, $imgs;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $details = [], $pic;

    public function render()
    {
        $this->data = Booking::whereAny(['code','name','phone'],'LIKE','%'.$this->search.'%')->where('approve_id',auth()->user()->id)->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = Booking::whereAny(['code','name','phone'],'LIKE','%'.$this->search.'%')->where('approve_id',auth()->user()->id)->limit($this->dataQ)->count();
        return view('livewire.backend.booking.booking-component')->layout('components.layouts.backend.app');
    }

    public function dataQS(){
        $this->data = Booking::whereAny(['code','name','phone'],'LIKE','%'.$this->search.'%')->where('approve_id',auth()->user()->id)->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = Booking::whereAny(['code','name','phone'],'LIKE','%'.$this->search.'%')->where('approve_id',auth()->user()->id)->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = Booking::whereAny(['code','name','phone'],'LIKE','%'.$this->search.'%')->where('approve_id',auth()->user()->id)->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = Booking::whereAny(['code','name','phone'],'LIKE','%'.$this->search.'%')->where('approve_id',auth()->user()->id)->limit($this->dataQ)->count();
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->name = null;
        $this->pro_id = null;
    }

    public function confirm($ids){
        $data = Booking::find($ids);
        $de = BookingDetail::where('booking_code',$data->code)->get();

        // foreach($de as $item){
        //     $room = Room::find($item->room_id);
        //     $room->status = 0;
        //     $room->save();
        // }

        if($data->form == 'member'){
            $log = new LogBooking();
            $log->booking_code = $data->code;
            $log->user_id = $data->user_id;
            $log->status = 2;
            $log->save();
        }

        $data->status = 2;
        $data->save();

        session()->flash('success', 'ອະນຸມັດສຳເລັດ');
        return redirect(route('bookings'));
    }

    public function reject($ids){
        $data = Booking::find($ids);

        if($data->form == 'member'){
            $log = new LogBooking();
            $log->booking_code = $data->code;
            $log->user_id = $data->user_id;
            $log->status = 0;
            $log->save();
        }

        $data->status = 0;
        $data->save();

        session()->flash('success', 'ຍົກເລີກສຳເລັດ');
        return redirect(route('bookings'));
    }

    public function showDetail($ids){
        $this->details = BookingDetail::where('booking_code',$ids)->get();
        $data = Booking::where('code',$ids)->first();
        $this->pic = $data->img;

        $this->dispatch('show-del');
    }

    public function open($ids){
        $data = Booking::find($ids);
        $de = BookingDetail::where('booking_code',$data->code)->get();

        foreach($de as $item){
            $room = Room::find($item->room_id);

            $checkin = new CheckInOut();
            $checkin->code = $data->code;
            $checkin->checin = date('Y-m-d');
            $checkin->hotel_id = $data->hotel_id;
            $checkin->room_id = $room->id;
            $checkin->from = $data->form;

            if($data->form == 'member'){$checkin->user_id = $data->user_id;}
            
            $checkin->name = $data->name;
            $checkin->phone = $data->phone;
            $checkin->total = $data->total;
            $checkin->status = 0;
            $checkin->save();

            $room->status = 0;
            $room->save();
        }
        $data->status = 3;
        $data->save();

        session()->flash('success', 'check in ສຳເລັດ');
        return redirect(route('openrooms'));
    }
}

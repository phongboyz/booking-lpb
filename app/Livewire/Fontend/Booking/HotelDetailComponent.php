<?php

namespace App\Livewire\Fontend\Booking;

use Livewire\Component;
use App\Models\District;
use App\Models\Hotel;

class HotelDetailComponent extends Component
{
    public $cus = 1, $room = 1, $resualt = 1 .' ຄົນ '. 1 .' ຫ້ອງ', $dopdown = 'hide';
    public $dis_id, $dis_ids, $date;

    public function mount(){
        $dis = session('disId');
        if($dis){
            $this->dis_ids = $dis['value'];
        }
        
        $this->date = session('checkInDate');
        $this->cus = session('cusCount');
        $this->room = session('roomCount');

        $this->resualt = $this->cus .' ຄົນ '. $this->room .' ຫ້ອງ';
        // dd($this->dis_id);
    }

    public function render()
    {
        $districts = District::orderBy('id','asc')->get();
        $hotels = Hotel::where('dis_id',$this->dis_ids)->get();
        
        return view('livewire.fontend.booking.hotel-detail-component',compact('districts','hotels'));
    }

    public function addCusRoom(){
        if($this->dopdown == 'show'){
            $this->dopdown = 'hide';
        }else{
            $this->dopdown = 'show';
        }
    }

    public function delCus(){
        $this->cus -= 1;
        $this->resualt = $this->cus .' ຄົນ '. $this->room .' ຫ້ອງ';
    }
    public function addCus(){
        $this->cus += 1;
        $this->resualt = $this->cus .' ຄົນ '. $this->room .' ຫ້ອງ';
    }

    public function delRoom(){
        $this->room -= 1;
        $this->resualt = $this->cus .' ຄົນ '. $this->room .' ຫ້ອງ';
    }
    public function addRoom(){
        $this->room += 1;
        $this->resualt = $this->cus .' ຄົນ '. $this->room .' ຫ້ອງ';
    }

    public function search(){
        $this->validate([
            'dis_id'=>'required',
            'date'=>'required',
        ],[
            'dis_id.required'=>'ກະລຸນາເລືອກ ເມືອງ ກ່ອນ!',
            'date.required'=>'ກະລຸນາເລືອກ ຊ່ວງວັນເຂົ້າພັກ ກ່ອນ!',
        ]);

        $this->dis_ids = $this->dis_id;
        session()->flash('disId', $this->dis_id);
        session()->flash('checkInDate', $this->date);
        session()->flash('cusCount', $this->cus);
        session()->flash('roomCount', $this->room);
        
        return redirect(route('hotel-detail'));
    }
}

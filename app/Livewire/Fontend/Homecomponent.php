<?php

namespace App\Livewire\Fontend;

use Livewire\Component;
use App\Models\District;
use App\Models\Hotel;

class Homecomponent extends Component
{
    public $cus = 1, $room = 1, $resualt = 1 .' ຄົນ '. 1 .' ຫ້ອງ', $dopdown = 'hide';
    public $dis_id, $date, $enddate;

    public function mount(){
        $this->date = date('Y-m-d');
        $this->enddate = date('Y-m-d');
    }

    public function render()
    {
        $districts = District::orderBy('id','asc')->get();
        $hotels = Hotel::limit(4)->get();
        return view('livewire.fontend.homecomponent',compact('districts','hotels'));
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

        // dd($this->date);
        session()->flash('disId', $this->dis_id);
        session()->flash('checkInDate', $this->date);
        session()->flash('checkOutDate', $this->enddate);
        session()->flash('cusCount', $this->cus);
        session()->flash('roomCount', $this->room);
        
        return redirect(route('hotel-detail'));
    }
}

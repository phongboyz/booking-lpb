<?php

namespace App\Livewire\Fontend\Booking;

use Livewire\Component;
use App\Models\District;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Booking;
use App\Models\BookingDetail;
use Livewire\WithFileUploads;

class HotelRoomComponent extends Component
{
    use WithFileUploads;
    public $info = 'show';
    public $hotel_id;
    public $code, $name, $phone, $img, $imgs;
    public $disname, $disphone;
    public $sum=0, $approve_id;
    public $cus = 1, $room = 1, $resualt = 1 .' ຄົນ '. 1 .' ຫ້ອງ', $dopdown = 'hide';
    public $dis_id, $dis_ids, $date, $enddate, $sumdate = 0, $total = 0;

    public function mount($id){
        $this->hotel_id = $id;
        $data = Hotel::find($this->hotel_id);
        if($data){
            $this->approve_id = $data->user_id;
        }
        if(auth()->check() == true){
            $this->name = auth()->user()->fname.' '.auth()->user()->lname;
            $this->phone = auth()->user()->phone;
        }
        $this->date = session('checkInDate');
        $this->enddate = session('checkOutDate');
        $this->cus = session('cusCount');
        $this->room = session('roomCount');
    }

    public function render()
    {

        $hotels = Hotel::find($this->hotel_id);
        $rooms = Room::where('hotel_id',$this->hotel_id)->where('status',1)->get();
        $details = BookingDetail::where('booking_code',$this->code)->get();
        return view('livewire.fontend.booking.hotel-room-component',compact('hotels','rooms','details'));
    }

    public function calDate(){
        $this->validate([
            'date'=>'required',
            'enddate'=>'required',
        ],[
            'date.required'=>'ກະລຸນາເລືອກ ວັນທີເຂົ້າທີ່ພັກ ກ່ອນ!',
            'enddate.required'=>'ກະລຸນາເລືອກ ວັນທີອອກທີ່ພັກ ກ່ອນ!',
        ]);
        if(!empty($this->date) && !empty($this->enddate)){
            $datetime1 = strtotime(date('Y-m-d',strtotime($this->date)));
            $datetime2 = strtotime(date('Y-m-d',strtotime($this->enddate)));
            $secs = $datetime2 - $datetime1;
            $this->sumdate = $secs / 86400;
        }
    }

    public function addInfo(){
        $this->validate([
            'name'=>'required',
            'phone'=>'required',
        ],[
            'name.required'=>'ກະລຸນາເພີ່ມ ຊື່ຜູ້ຈອງ ກ່ອນ!',
            'phone.required'=>'ກະລຸນາເພີ່ມ ເບີໂທ ກ່ອນ!',
        ]);
        
       $sub = substr($this->phone,-4);
       $this->disname = 'disabled';
       $this->disphone = 'disabled';
       $this->info = 'none';
       $this->code = date('ymdhis').$sub;
    }

    public function addRoom($ids){
        $this->validate([
            'name'=>'required',
            'phone'=>'required',
        ],[
            'name.required'=>'ກະລຸນາເພີ່ມ ຊື່ຜູ້ຈອງ ກ່ອນ!',
            'phone.required'=>'ກະລຸນາເພີ່ມ ເບີໂທ ກ່ອນ!',
        ]);
        
       $sub = substr($this->phone,-4);
       $this->disname = 'disabled';
       $this->disphone = 'disabled';
       $this->info = 'none';
       if(empty($this->code)){
        $this->code = date('ymdhis').$sub;
       }

       $room = Room::find($ids);
        $check = BookingDetail::where('room_id',$ids)->where('booking_code',$this->code)->first();
        if($check){
            $this->dispatch('alert',type: 'error', message:'ທ່ານໄດ້ເພີ່ມຫ້ອງນີ້ແລ້ວ ກະລຸນາເລືອກຫ້ອງໃໝ່!');
        }else{
            $detail = new BookingDetail();
            $detail->booking_code = $this->code;
            $detail->room_id = $ids;
            $detail->room = $room->name;
            $detail->price = $room->price;
            $detail->save();
     
            $this->sum += ($room->price * $this->sumdate);
        }
       
    }

    public function payment(){
        $this->validate([
            'img'=>'required',
            'date'=>'required',
            'enddate'=>'required',
        ],[
            'img.required'=>'ກະລຸນາເພີ່ມ ຮູບພາບຊຳລະ ກ່ອນ!',
            'date.required'=>'ກະລຸນາເລືອກ ວັນທີເຂົ້າທີ່ພັກ ກ່ອນ!',
            'enddate.required'=>'ກະລຸນາເລືອກ ວັນທີອອກທີ່ພັກ ກ່ອນ!',
        ]);

        if (!empty($this->img)) {
            $this->validate([
                'img' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img->getClientOriginalName(). '.' . $this->img->extension();
            $this->img->storeAs('upload/payment/', $imgName);
            $this->imgs = 'upload/payment/'.$imgName;
        }

        $data = new Booking();
        $data->code = $this->code;
        $data->hotel_id = $this->hotel_id;
        $data->checkin = $this->date;
        $data->checkout = $this->enddate;
        if(auth()->check() == 0){
            $data->form = 'general';
        }else{
            $data->form = 'member'; 
        }   
        $data->name = $this->name;
        $data->phone = $this->phone;
        $data->pay_type = 'aon';
        $data->total = $this->sum;
        $data->img = $this->imgs;
        if(auth()->check() == 1){
            $data->user_id = auth()->user()->id; 
        }  
        $data->approve_id = $this->approve_id;
        $data->save();

        session()->flash('success', 'ສັ່ງຈອງສຳເລັດ');
        return redirect(route('hotel-room',$this->hotel_id));
    }
}

<?php

namespace App\Livewire\Backend\Hotel;

use Livewire\Component;
use App\Models\District;
use App\Models\Hotel;
use Livewire\WithFileUploads;

class HotelComponent extends Component
{
    use WithFileUploads;
    public $data, $count, $provinces, $districts;
    public $dis_id, $name, $phone, $address, $detail, $price, $promotion1, $promotion2, $promotion3, $img1, $img1s, $img2, $img2s, $img3, $img3s, $img4, $img4s, $img5, $img5s, $img6, $img6s, $img7, $img7s, $img8, $img8s, $location;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    
    public function render()
    {
        $this->districts = District::orderBy('id','desc')->get();
        if(auth()->user()->rolename->name == 'admin'){
            $this->data = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
            $this->count = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        }else{
            $this->data = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->get();
            $this->count = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
        }
        return view('livewire.backend.hotel.hotel-component')->layout('components.layouts.backend.app');
    }

    public function dataQS(){
        if(auth()->user()->rolename->name == 'admin'){
            $this->data = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
            $this->count = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        }else{
            $this->data = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->get();
            $this->count = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
        }
    }

    public function searchData(){
        if(auth()->user()->rolename->name == 'admin'){
            $this->data = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
            $this->count = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        }else{
            $this->data = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->get();
            $this->count = Hotel::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
        }
    }

    public function add(){
        $this->addId = 'add';
    }

    public function uploads(){
        $this->form = 'show';
    }

    public function hideAdd(){
        $this->addId = null;
    }

    public function hide(){
        if ($this->form == 'show'){ $this->form = 'hide'; }else{ $this->form = 'show'; }
        $this->resetField();
    }

    public function store() 
    {
        $this->validate([
            'dis_id'=>'required',
            'name'=>'required',
            'price'=>'required',
        ],[
            'dis_id.required'=>'ກະລຸນາເລືອກ ເມືອງ ກ່ອນ!',
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ໂຮງແຮມ ກ່ອນ!',
            'price.required'=>'ກະລຸນາປ້ອນ ລາຄາເລີ່ມຕົ້ນ ກ່ອນ!',
        ]);

        if (!empty($this->img1)) {
            if ($this->img1s) {
                unlink($this->img1s);
            }
            $this->validate([
                'img1' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img1->getClientOriginalName().'.'.$this->img1->extension();
            $this->img1->storeAs('upload/hotels/', $imgName);
            $this->img1s = 'upload/hotels/'.$imgName;
        }
        if (!empty($this->img2)) {
            if ($this->img2s) {
                unlink($this->img2s);
            }
            $this->validate([
                'img2' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img2->getClientOriginalName().'.'.$this->img2->extension();
            $this->img2->storeAs('upload/hotels/', $imgName);
            $this->img2s = 'upload/hotels/'.$imgName;
        }
        if (!empty($this->img3)) {
            if ($this->img3s) {
                unlink($this->img3s);
            }
            $this->validate([
                'img3' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img3->getClientOriginalName().'.'.$this->img3->extension();
            $this->img3->storeAs('upload/hotels/', $imgName);
            $this->img3s = 'upload/hotels/'.$imgName;
        }
        if (!empty($this->img4)) {
            if ($this->img4s) {
                unlink($this->img4s);
            }
            $this->validate([
                'img4' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img4->getClientOriginalName().'.'.$this->img4->extension();
            $this->img4->storeAs('upload/hotels/', $imgName);
            $this->img4s = 'upload/hotels/'.$imgName;
        }
        if (!empty($this->img5)) {
            if ($this->img5s) {
                unlink($this->img5s);
            }
            $this->validate([
                'img5' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img5->getClientOriginalName().'.'.$this->img5->extension();
            $this->img5->storeAs('upload/hotels/', $imgName);
            $this->img5s = 'upload/hotels/'.$imgName;
        }
        if (!empty($this->img6)) {
            if ($this->img6s) {
                unlink($this->img6s);
            }
            $this->validate([
                'img6' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img6->getClientOriginalName().'.'.$this->img6->extension();
            $this->img6->storeAs('upload/hotels/', $imgName);
            $this->img6s = 'upload/hotels/'.$imgName;
        }
        if (!empty($this->img7)) {
            if ($this->img7s) {
                unlink($this->img7s);
            }
            $this->validate([
                'img7' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img7->getClientOriginalName().'.'.$this->img7->extension();
            $this->img7->storeAs('upload/hotels/', $imgName);
            $this->img7s = 'upload/hotels/'.$imgName;
        }
        if (!empty($this->img8)) {
            if ($this->img8s) {
                unlink($this->img8s);
            }
            $this->validate([
                'img8' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img8->getClientOriginalName().'.'.$this->img8->extension();
            $this->img8->storeAs('upload/hotels/', $imgName);
            $this->img8s = 'upload/hotels/'.$imgName;
        }

        if($this->editId){
            Hotel::where('id',$this->editId)->update([
                'dis_id'=>$this->dis_id,
                'name'=>$this->name,
                'phone'=>$this->phone,
                'address'=>$this->address,
                'detail'=>$this->detail,
                'price'=>$this->price,
                'promotion1'=>$this->promotion1,
                'promotion2'=>$this->promotion2,
                'promotion3'=>$this->promotion3,
                'img1'=>$this->img1s,
                'img2'=>$this->img2s,
                'img3'=>$this->img3s,
                'img4'=>$this->img4s,
                'img5'=>$this->img5s,
                'img6'=>$this->img6s,
                'img7'=>$this->img7s,
                'img8'=>$this->img8s,
                'location'=>$this->location,
                'user_id'=>auth()->user()->id
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Hotel::insert([
                'dis_id'=>$this->dis_id,
                'name'=>$this->name,
                'phone'=>$this->phone,
                'address'=>$this->address,
                'detail'=>$this->detail,
                'price'=>$this->price,
                'promotion1'=>$this->promotion1,
                'promotion2'=>$this->promotion2,
                'promotion3'=>$this->promotion3,
                'img1'=>$this->img1s,
                'img2'=>$this->img2s,
                'img3'=>$this->img3s,
                'img4'=>$this->img4s,
                'img5'=>$this->img5s,
                'img6'=>$this->img6s,
                'img7'=>$this->img7s,
                'img8'=>$this->img8s,
                'location'=>$this->location,
                'user_id'=>auth()->user()->id
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        return redirect(route('hotels'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Hotel::find($ids);
        $this->dis_id = $data->dis_id;
        $this->name = $data->name;
        $this->phone = $data->phone;
        $this->address = $data->address;
        $this->detail = $data->detail;
        $this->price = $data->price;
        $this->promotion1 = $data->promotion1;
        $this->promotion2 = $data->promotion2;
        $this->promotion3 = $data->promotion3;
        $this->img1s = $data->img1;
        $this->img2s = $data->img2;
        $this->img3s = $data->img3;
        $this->img4s = $data->img4;
        $this->img5s = $data->img5;
        $this->img6s = $data->img6;
        $this->img7s = $data->img7;
        $this->img8s = $data->img8;
        $this->location = $data->location;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Hotel::find($ids);
        $this->delName = 'ຊື່ໂຮງແຮມ: '.$data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Hotel::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('hotels'));
    }

    public function changeActive($ids){
        $data = Hotel::find($ids);
        $data->active = 0;
        $data->save();
        session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        return redirect(route('hotels'));
    }

    public function changeUnActive($ids){
        $data = Hotel::find($ids);
        $data->active = 1;
        $data->save();
        session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        return redirect(route('hotels'));
    }
}

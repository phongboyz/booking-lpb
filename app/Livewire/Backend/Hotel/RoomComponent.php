<?php

namespace App\Livewire\Backend\Hotel;

use Livewire\Component;
use App\Models\Building;
use App\Models\Hotel;
use App\Models\Room;
use Livewire\WithFileUploads;

class RoomComponent extends Component
{
    use WithFileUploads;
    public $data, $count, $hotels = [], $buildings = [];
    public $hotel_id, $buil_id, $cate, $type, $name, $price, $img, $imgs;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;

    public function render()
    {
        $this->hotels = Hotel::where('user_id', auth()->user()->id)->where('active',1)->orderBy('id','desc')->get();

        if($this->hotel_id){
            $this->buildings = Building::where('hotel_id',$this->hotel_id)->where('user_id', auth()->user()->id)->orderBy('id','desc')->get();
        }
        
        $this->data = Room::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->get();
        $this->count = Room::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
        return view('livewire.backend.hotel.room-component')->layout('components.layouts.backend.app');
    }
    
    public function dataQS(){
        $this->data = Room::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = Room::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = Room::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = Room::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->name = null;
        $this->price = null;
        $this->img = null;
        $this->imgs = null;
        $this->hotel_id = null;
        $this->buil_id = null;
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

    public function hotelSelected(){
        $this->form = 'show';
        if($this->hotel_id){
            $this->buildings = Building::where('hotel_id',$this->hotel_id)->where('user_id', auth()->user()->id)->orderBy('id','desc')->get();
        }
    }
    
    public function store() 
    {
        $this->validate([
            'hotel_id'=>'required',
            'buil_id'=>'required',
            'cate'=>'required',
            'type'=>'required',
            'name'=>'required',
            'price'=>'required',
        ],[
            'hotel_id.required'=>'ກະລຸນາເລືອກ ໂຮງແຮມ ກ່ອນ!',
            'buil_id.required'=>'ກະລຸນາເລືອກ ຕຶກ ກ່ອນ!',
            'cate.required'=>'ກະລຸນາເລືອກ ປະເພດຫ້ອງ ກ່ອນ!',
            'type.required'=>'ກະລຸນາເລືອກ ປະເພດຕຽງ ກ່ອນ!',
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ / ເບີຫ້ອງ ກ່ອນ!',
            'price.required'=>'ກະລຸນາປ້ອນ ລາຄາ ກ່ອນ!',
        ]);

        if (!empty($this->img)) {
            if ($this->imgs) {
                unlink($this->imgs);
            }
            $this->validate([
                'img' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis').'-'.$this->img->getClientOriginalName(). '.' . $this->img->extension();
            $this->img->storeAs('upload/rooms/', $imgName);
            $this->imgs = 'upload/rooms/'.$imgName;
        }

        if($this->editId){
            Room::where('id',$this->editId)->update([
                'hotel_id'=>$this->hotel_id,
                'buil_id'=>$this->buil_id,
                'cate'=>$this->cate,
                'type'=>$this->type,
                'name'=>$this->name,
                'price'=>$this->price,
                'img'=>$this->imgs,
                'user_id'=>auth()->user()->id,
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Room::insert([
                'hotel_id'=>$this->hotel_id,
                'buil_id'=>$this->buil_id,
                'cate'=>$this->cate,
                'type'=>$this->type,
                'name'=>$this->name,
                'price'=>$this->price,
                'img'=>$this->imgs,
                'user_id'=>auth()->user()->id,
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('rooms'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Room::find($ids);
        $this->hotel_id = $data->hotel_id;
        $this->buil_id = $data->buil_id;
        $this->cate = $data->cate;
        $this->type = $data->type;
        $this->name = $data->name;
        $this->price = $data->price;
        $this->imgs = $data->img;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Room::find($ids);
        $this->delName = 'ຫ້ອງພັກ: '.$data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Room::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('rooms'));
    }

    public function changeActive($ids){
        $data = Room::find($ids);
        $data->active = 0;
        $data->save();
        session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        return redirect(route('rooms'));
    }

    public function changeUnActive($ids){
        $data = Room::find($ids);
        $data->active = 1;
        $data->save();
        session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        return redirect(route('rooms'));
    }
}

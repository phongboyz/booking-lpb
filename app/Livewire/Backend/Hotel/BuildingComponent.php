<?php

namespace App\Livewire\Backend\Hotel;

use Livewire\Component;
use App\Models\Building;
use App\Models\Hotel;

class BuildingComponent extends Component
{
    public $data, $count, $hotels;
    public $hotel_id, $name;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;

    public function render()
    {
        $this->hotels = Hotel::where('user_id', auth()->user()->id)->where('active',1)->orderBy('id','desc')->get();
        $this->data = Building::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->get();
        $this->count = Building::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
        return view('livewire.backend.hotel.building-component')->layout('components.layouts.backend.app');
    }
    
    public function dataQS(){
        $this->data = Building::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = Building::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = Building::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = Building::whereAny(['name'],'LIKE','%'.$this->search.'%')->where('user_id',auth()->user()->id)->limit($this->dataQ)->count();
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->name = null;
        $this->hotel_id = null;
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
            'hotel_id'=>'required',
            'name'=>'required',
        ],[
            'hotel_id.required'=>'ກະລຸນາເລືອກ ໂຮງແຮມ ກ່ອນ!',
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ຕຶກ ກ່ອນ!',
        ]);

        if($this->editId){
            Building::where('id',$this->editId)->update([
                'hotel_id'=>$this->hotel_id,
                'name'=>$this->name,
                'user_id'=>auth()->user()->id,
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Building::insert([
                'hotel_id'=>$this->hotel_id,
                'name'=>$this->name,
                'user_id'=>auth()->user()->id,
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('buildings'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Building::find($ids);
        $this->hotel_id = $data->hotel_id;
        $this->name = $data->name;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Building::find($ids);
        $this->delName = 'ຕຶກ: '.$data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Building::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('buildings'));
    }
}

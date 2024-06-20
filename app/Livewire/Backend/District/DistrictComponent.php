<?php

namespace App\Livewire\Backend\District;

use Livewire\Component;
use App\Models\District;
use Livewire\WithFileUploads;

class DistrictComponent extends Component
{
    use WithFileUploads;
    public $data, $count, $provinces;
    public $pro_id, $name, $detail, $img, $imgs;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;

    public function render()
    {
        $this->data = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        return view('livewire.backend.district.district-component')->layout('components.layouts.backend.app');
    }

    public function dataQS(){
        $this->data = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->orderBy('id','asc')->limit($this->dataQ)->get();
        $this->count = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->name = null;
        $this->pro_id = null;
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
            'name'=>'required',
        ],[
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ເມືອງ ກ່ອນ!',
        ]);

        if (!empty($this->img)) {
            if ($this->imgs) {
                unlink($this->imgs);
            }
            $this->validate([
                'img' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis') . '.' . $this->img->extension();
            $this->img->storeAs('upload/district/', $imgName);
            $this->imgs = 'upload/district/'.$imgName;
        }
        

        if($this->editId){
            District::where('id',$this->editId)->update([
                'name'=>$this->name,
                'img'=>$this->imgs,
                'detail'=>$this->detail
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            District::insert([
                'name'=>$this->name,
                'img'=>$this->imgs,
                'detail'=>$this->detail
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('districts'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = District::find($ids);
        $this->name = $data->name;
        $this->imgs = $data->img;
        $this->detail = $data->detail;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = District::find($ids);
        $this->delName = 'ເມືອງ: '.$data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        District::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('districts'));
    }
}

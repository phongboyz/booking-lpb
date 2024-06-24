<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Room;

class Report3RoomComponent extends Component
{
    public function render()
    {
        $data = Room::where('user_id',auth()->user()->id)->orderBy('id','asc')->get();
        return view('livewire.backend.report.report3-room-component',compact('data'))->layout('components.layouts.backend.app');
    }

    public function print(){
        $this->dispatch('refresh_print');
    }
}

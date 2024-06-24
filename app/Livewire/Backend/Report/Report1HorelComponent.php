<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Hotel;

class Report1HorelComponent extends Component
{
    public function render()
    {
        $data = Hotel::where('user_id',auth()->user()->id)->get();
        return view('livewire.backend.report.report1-horel-component',compact('data'))->layout('components.layouts.backend.app');
    }

    public function print(){
            $this->dispatch('refresh_print');
    }
}

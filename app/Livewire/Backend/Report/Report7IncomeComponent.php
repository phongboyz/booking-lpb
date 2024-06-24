<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\CheckInOut;

class Report7IncomeComponent extends Component
{
    public function render()
    {
        $data = CheckInOut::where('approve_id',auth()->user()->id)->where('status',1)->get();
        $sum = CheckInOut::where('approve_id',auth()->user()->id)->where('status',1)->sum('total');
        return view('livewire.backend.report.report7-income-component',compact('data','sum'))->layout('components.layouts.backend.app');
    }

    public function print(){
        $this->dispatch('refresh_print');
    }
}

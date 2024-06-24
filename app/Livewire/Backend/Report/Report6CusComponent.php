<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\User;

class Report6CusComponent extends Component
{
    public function render()
    {
        $data = User::where('role_id',3)->get();
        return view('livewire.backend.report.report6-cus-component',compact('data'))->layout('components.layouts.backend.app');
    }

    public function print(){
        $this->dispatch('refresh_print');
    }
}

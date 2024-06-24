<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\User;

class Report8UserComponent extends Component
{
    public function render()
    {
        $data = User::orderBy('id','asc')->get();
        return view('livewire.backend.report.report8-user-component',compact('data'))->layout('components.layouts.backend.app');
    }

    public function print(){
        $this->dispatch('refresh_print');
    }
}

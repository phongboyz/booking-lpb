<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;

class Report4CateRoomComponent extends Component
{
    public function render()
    {
        return view('livewire.backend.report.report4-cate-room-component');
    }

    public function print(){
        $this->dispatch('refresh_print');
    }
}

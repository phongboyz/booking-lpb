<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;

class Report5PayComponent extends Component
{
    public function render()
    {
        return view('livewire.backend.report.report5-pay-component');
    }

    public function print(){
        $this->dispatch('refresh_print');
    }
}

<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class Dashboardcomponent extends Component
{
    public function render()
    {
        return view('livewire.backend.dashboardcomponent')->layout('components.layouts.backend.app');
    }
}

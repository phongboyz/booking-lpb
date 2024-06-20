<?php

namespace App\Livewire\Fontend;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        return view('livewire.fontend.contact-component');
    }

    public function send(){
        session()->flash('success', 'ສົ່ງສຳເລັດ');
        return redirect(route('contact'));
    }
}

<?php

namespace App\Livewire\Fontend;

use Livewire\Component;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginComponent extends Component
{
    public $username, $password;

    public function render()
    {
        return view('livewire.fontend.login-component');
    }

    public function login(){
        $this->validate([
            'username'=>'required',
            'password'=>'required',
        ],[
            'username.required'=>'ກະລຸນາປ້ອນ ຊື່ຜຸ້ໃຊ້ ກ່ອນ!',
            'password.required'=>'ກະລຸນາປ້ອນ ລະຫັດຜ່ານ ກ່ອນ!',
        ]);
        if(Auth::attempt([
            'username'=> $this->username,
            'password'=> $this->password
        ]))
        {
            if(auth()->user()->active == 1){
                session()->flash('success', 'ເຂົ້າລະບົບສຳເລັດ');
                return redirect(route('home'));
            }else{
                $this->dispatch('alert',type: 'error', message:'ບັນຊີທ່ານຖືກປິດໃຊ້ງານ ກະລຸນາຕິດຕໍ່ຫາຜູ້ໃຫ້ບໍລິການ!');
            }
        }else{
            $this->dispatch('alert',type: 'error', message:'ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ, ກະລຸນາລອງໃໝ່!');
            $this->password = null;
        }
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        
        session()->flash('success', 'ອອກລະບົບສຳເລັດ');
        return redirect('/');
    }
}

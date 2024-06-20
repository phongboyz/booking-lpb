<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class ProfileComponent extends Component
{
    use WithFileUploads;
    public $users, $count;
    public $username, $password, $confirm_password, $phone, $role_id, $branch_id, $profile, $profiles;
    public $addId;
    public $branch, $role;

    public function mount(){
        $data = User::find(auth()->user()->id);
        $this->profiles = $data->profile;
        $this->username = $data->username;
        $this->phone = $data->phone;
        $this->role = $data->rolename->name;
    }

    public function render()
    {
        return view('livewire.auth.profile-component')->layout('components.layouts.backend.app');
    }

    public function store(){

        if (!empty($this->profile)) {
            if ($this->profiles) {
                unlink($this->profiles);
            }
            $this->validate([
                'profile' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis') . '.' . $this->profile->extension();
            $this->profile->storeAs('upload/users/', $imgName);
            $this->profiles = 'upload/users/'.$imgName;
        }

        if($this->password){
            
            $this->validate([
                'password'=>'required|min:6|required_with:confirm_password|same:confirm_password',
                'confirm_password'=>'required|min:6|required_with:password|same:password',
            ],[
                'password.required'=>'ກະລຸນາປ້ອນ ລະຫັດຜ່ານ ກ່ອນ!',
                'password.min'=>'ກະລຸນາປ້ອນລະຫັດຜ່ານ 6 ຕົວຂຶ້ນໄປ',
                'password.same'=>'ລະຫັດຜ່ານ ແລະ ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ',
                'confirm_password.required'=>'ກະລຸນາປ້ອນ ຢືນຢັນລະຫັດຜ່ານ ກ່ອນ!',
                'confirm_password.min'=>'ກະລຸນາປ້ອນຢືນຢັນລະຫັດຜ່ານ 6 ຕົວຂຶ້ນໄປ',
                'confirm_password.same'=>'ລະຫັດຜ່ານ ແລະ ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ',
            ]);
            User::where('id',auth()->user()->id)->update([
                'password'=>bcrypt($this->password),
                'phone'=>$this->phone,
                'profile'=>$this->profiles
            ]);
            
        }else{

            User::where('id',auth()->user()->id)->update([
                'phone'=>$this->phone,
                'profile'=>$this->profiles
            ]);

        }
        
        session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        return redirect(route('profiles'));
    }
}

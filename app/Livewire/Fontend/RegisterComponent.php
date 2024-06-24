<?php

namespace App\Livewire\Fontend;

use Livewire\Component;
use App\Models\User;

class RegisterComponent extends Component
{
    public $users, $count;
    public $username, $fname, $lname, $password, $confirm_password, $phone, $role_id = 1, $branch_id, $profile, $profiles;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $roles, $branchs;

    public function render()
    {
        return view('livewire.fontend.register-component');
    }

    public function store() 
    {
        $this->validate([
            'username'=>'required',
            'password'=>'required|min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password'=>'required|min:6|required_with:password|same:password',
            'fname'=>'required',
            'lname'=>'required',
            'phone'=>'required',
        ],[
            'username.required'=>'ກະລຸນາປ້ອນ ຊື່ເຂົ້າໃຊ້ງານລະບົບ ກ່ອນ!',
            'password.required'=>'ກະລຸນາປ້ອນ ລະຫັດຜ່ານ ກ່ອນ!',
                'password.min'=>'ກະລຸນາປ້ອນລະຫັດຜ່ານ 6 ຕົວຂຶ້ນໄປ',
                'password.same'=>'ລະຫັດຜ່ານ ແລະ ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ',
                'confirm_password.required'=>'ກະລຸນາປ້ອນ ຢືນຢັນລະຫັດຜ່ານ ກ່ອນ!',
                'confirm_password.min'=>'ກະລຸນາປ້ອນຢືນຢັນລະຫັດຜ່ານ 6 ຕົວຂຶ້ນໄປ',
                'confirm_password.same'=>'ລະຫັດຜ່ານ ແລະ ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ',
            'fname.required'=>'ກະລຸນາປ້ອນ ຊື່ແທ້ຜູ້ໃຊ້ ກ່ອນ!',
            'lname.required'=>'ກະລຸນາປ້ອນ ນາມສະກຸນ ກ່ອນ!',
            'phone.required'=>'ກະລຸນາປ້ອນ ເບີໂທ ກ່ອນ!',
        ]);

            User::insert([
                'username'=>$this->username,
                'fname'=>$this->fname,
                'lname'=>$this->lname,
                'password'=>bcrypt($this->password),
                'phone'=>$this->phone,
                'role_id'=>3
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        
        
        return redirect(route('login-cus'));
    }
}

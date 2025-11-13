<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    #[Title('Register')]
    #[Validate]
    public $name, $email, $password, $password_confirmation, $showPassword;

    public function rules()
    {
        return [
            'name' => 'required|min:8',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama harus diisi !',
            'name.min' => 'Nama minimal harus 8 karakter',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Yang di isikan harus berupa email !',
            'email.unique' => 'Email sudah di gunakan',
            'password.required' => 'Password harus diisi !',
            'password.min' => 'Password minimal harus 8 karakter',
            'password.confirmed' => 'Password tidak sesuai',
        ];
    }

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        return redirect(route('login'))->with('berhasil-register', 'Berhasil Registrasi');
    }

    public function showp2assword()
    {
        $this->showPassword = !$this->showPassword;
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}

<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

class Login extends Component
{

    #[Title('Login')]
    #[Validate]
    public $email;
    public $password;
    public $remember;
    public $showPassword;

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Yang di isikan bukan berupa email !',
            'password.required' => 'Password harus diisi !',
        ];
    }

    public function login(Request $request)
    {
        $credentials = $this->validate();
        $remember = $this->remember;

        if (Auth::attempt($credentials, $remember)) {
            session()->regenerate();
            $request->cookie();
            if (Auth::id() === 1){
                return redirect(route('admin.gallery'));

            }
            return redirect(route('beranda'));
        }

        return redirect()->back()->with('message', 'Email atau Password salah');
    }


    public function showpassword() {
        $this->showPassword = !$this->showPassword;
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

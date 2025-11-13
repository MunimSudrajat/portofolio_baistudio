<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    #[Validate]
    #[Title('Lupa Password')]
    public $email;

    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email wajib di isi !',
            'email.email' => 'Yang di isikan harus berupa email !',
            'email.exists' => 'Email tidak ada !',
        ];
    }

    public function sendresetlink()
    {
        $this->validate();

        $status = Password::sendResetLink(['email' => $this->email]);

      return $status === Password::RESET_LINK_SENT ?
          back()->with('message', 'Password berhasil dikirim') :
          back()->with('invalidMessage', 'Password gagal dikirim');

    }


    public function render()
    {
        return view('livewire.auth.forgotpassword');
    }
}

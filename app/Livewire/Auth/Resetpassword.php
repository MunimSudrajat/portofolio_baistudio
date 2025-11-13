<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class Resetpassword extends Component
{
    #[Title('Reset Password')]
    #[Validate]
    public $email;
    public $password;
    public $password_confirmation;
    public $token;

    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Tidak boleh kosong !',
            'email.email' => 'Yang dimasukkan harus berupa email',
            'email.exists' => 'Email tidak ada',
            'email.required' => 'Tidak boleh kosong !',
            'password.required' => 'Tidak boleh kosong !',
            'password.min' => 'Password minimal harus 8 karakter !',
            'password.confirmed' => 'Konfirmasi password harus sama !'
        ];
    }

    public function mount($token)
    {
        $this->token = $token;
    }

    public function resetpassword()
    {
        $this->validate();

        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token
            ],
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }

        );
        return back()->with('message', 'Berhasil mengganti password');
    }

    public function render()
    {
        return view('livewire.auth.resetpassword');
    }
}

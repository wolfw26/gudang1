<?php

namespace App\Livewire\Sales;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $username;
    public $password;

    public function Login()
    {
        if (!Auth::attempt([
            'name' => $this->username,
            'password' => $this->password
        ])) {
            $this->addError('loginErr', 'Periksa kembali email/kata sandi anda');
            return null;
        }
        $this->reset('username', 'password');
        return redirect()->route('sales.dasboard');
    }
    public function render()
    {
        return view('livewire.sales.login')
            ->extends('layout.login')
            ->section('konten');
    }
}

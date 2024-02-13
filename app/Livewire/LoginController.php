<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Validate;

class LoginController extends Component
{
    #[Validate]
    public $email, $password, $remember;

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }

    public function loginUser()
    {
        $this->validate();
        $throttleKey = strtolower($this->email) . '|' . request()->ip();
        if (!Auth::attempt($this->only(['email', 'password']), $this->remember)) {
            RateLimiter::hit($throttleKey);
            $this->addError('loginErr', 'Periksa kembali email/kata sandi anda');
            return null;
        }

        RateLimiter::clear($throttleKey);

        // Reset data pada komponen Livewire
        $this->reset('email', 'password', 'remember');

        // Redirect ke halaman HOME setelah login berhasil
        $this->redirect('/home');
        // return redirect()->to(RouteServiceProvider::HOME);
    }
    public function render()
    {
        if (Auth::check()) {
            // Jika sudah login, arahkan ke dashboard atau halaman sesuai
            $this->redirect('/home'); // Ganti '/dashboard' dengan rute yang sesuai
        }
        return view('livewire.login-controller')
            ->extends('layout.login')
            ->section('konten');
    }
}

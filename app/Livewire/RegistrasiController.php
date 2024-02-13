<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegistrasiController extends Component
{
    #[Validate]
    public $name;
    #[Validate]
    public $password;
    #[Validate]
    public $email;

    public function rules()
    {
        return [
            'name' => 'required|min:5|unique:users',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users'
        ];
    }

    public function Save()
    {
        $data = $this->validate();
        $regitered = User::create($data);

        if ($regitered) {
            return redirect()->route('login');
        }
    }
    public function render()
    {
        return view('livewire.registrasi-controller')
            ->extends('layout.login')
            ->section('konten');
    }
}

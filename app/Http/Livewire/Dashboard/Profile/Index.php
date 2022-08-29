<?php

namespace App\Http\Livewire\Dashboard\Profile;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use App\Rules\PhoneNumber;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $phone;
    public $user;
    public function mount(){
        $this->user=User::where('id',auth()->user()->id)->first();
        $this->name=$this->user->name;
        $this->email=$this->user->email;
        $this->phone=$this->user->phone;
    }
    public function updateUser(){
        $validatedData = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', new PhoneNumber],
            'password' => ['confirmed',Password::defaults()],
        ]);
 
        auth()->user()->update($validatedData);
        if ($this->password) {
            auth()->user()->update(['password'=>bcrypt($validatedData['password'])]);
         
        }
        $this->dispatchBrowserEvent('name-updated');
    }
    public function render()
    {
        return view('livewire.dashboard.profile.index')->layoutData(['title' => 'Profile Dashboard | Grandez']);
    }
}

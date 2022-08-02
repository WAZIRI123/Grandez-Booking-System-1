<?php

namespace App\Http\Livewire\Package;

use App\Models\Package;
use Livewire\Component;

class Show extends Component
{
    public $activities;
    public function mount()
    {
        $this->fill([
        'activities' => Package::all(),
        ]);
    }
    public function render()
    {
        return view('livewire.package.show')->layout('layouts.main', ['title' => 'Activities  |Grandez']);
    }
}

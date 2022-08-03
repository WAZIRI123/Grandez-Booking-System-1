<?php

namespace App\Http\Livewire\Car;

use App\Models\CarRental;
use Livewire\Component;

class Show extends Component
{
    public $cars;
    public function mount()
    {
        $this->fill([
        'cars' => CarRental::all(),
        ]);
    }
    public function render()
    {
        return view('livewire.car.show')->layout('layouts.main', ['title' => 'cars  |Grandez']);
    }
}

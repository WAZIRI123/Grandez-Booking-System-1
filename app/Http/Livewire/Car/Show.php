<?php

namespace App\Http\Livewire\Car;

use Livewire\WithPagination;
use App\Models\CarRental;
use App\Models\Transfer;
use Livewire\Component;

class Show extends Component
{
    use WithPagination;
    public $cars;
    public function mount()
    {
        $this->fill([
        'cars' => CarRental::all(),
        ]);
    }
    public function render()
    {
        return view('livewire.car.show',[
            'transfers' => Transfer::paginate(5),
        ])->layout('layouts.main', ['title' => 'cars  |Grandez']);
    }
}

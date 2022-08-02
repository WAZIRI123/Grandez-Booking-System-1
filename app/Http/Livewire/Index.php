<?php

namespace App\Http\Livewire;

use App\Models\Package;
use App\Models\PackageType;
use App\Models\Reservation;
use Livewire\Component;

class Index extends Component
{
    public $packageType;
    public function mount()
    {
        $this->fill([
        'packageType' => PackageType::all(),
        ]);
    }

    public function render()
    {
        return view('livewire.index')->layout('layouts.main', ['title' => 'Make Your Vacation Easier  |Grandez']);
    }
}

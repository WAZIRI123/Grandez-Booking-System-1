<?php

namespace App\Http\Livewire\Package;

use App\Models\Package;
use Livewire\Component;

class Show extends Component
{
    public $packagies;
    public function mount()
    {
        $this->fill([
        'packagies' => Package::all(),
        ]);
    }
    public function render()
    {
        return view('livewire.package.show')->layout('layouts.main', ['title' => 'packagies  |Grandez']);
    }
}

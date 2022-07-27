<?php

namespace App\Http\Livewire;
use App\Models\Package;
use Livewire\Component;

class Index extends Component
{
    public $packagies;
    
    public function mount()
    {
        $this->fill([
            'packagies' => Package::orderBy('name')->get(),
        ]);
       
    }
    public function render()
    {
        return view('livewire.index')->layout('layouts.main', ['title' => 'Make Your Vacation Easier  |Grandez']);
    }
}

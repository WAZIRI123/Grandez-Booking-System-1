<?php

namespace App\Http\Livewire\Activity;

use App\Models\Activity;
use Livewire\Component;

class Show extends Component
{
    public $activities;
    public function mount()
    {
        $this->fill([
        'activities' => Activity::all(),
        ]);
    }
    public function render()
    {
        return view('livewire.activity.show')->layout('layouts.main', ['title' => 'Activities  |Grandez']);
    }
}

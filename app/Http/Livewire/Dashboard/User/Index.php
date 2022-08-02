<?php

namespace App\Http\Livewire\Dashboard\User;

use App\Models\FacilityReview;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public $totalReservations;

    public function render()
    {
        return view('livewire.dashboard.user.index')->layoutData(['title' => 'User Dashboard | Grandezza Booking System ']);
    }

    public function mount()
    {
        $this->fill([
            'totalReservations' => auth()->user()->reservations->count(),
        ]);
    }
}

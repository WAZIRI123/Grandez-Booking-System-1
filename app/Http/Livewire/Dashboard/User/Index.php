<?php

namespace App\Http\Livewire\Dashboard\User;

use App\Models\FacilityReview;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public $Reservations;
    public $CarReservations;
    public $TransferReservations;
    public $PackageReservations;
    public function render()
    {
        return view('livewire.dashboard.user.index')->layoutData(['title' => 'User Dashboard | Grandezza Booking System ']);
    }

    public function mount()
    {
        $this->fill([
            'Reservations' => auth()->user()->reservations->count(),
            'PackageReservations' => auth()->user()->packagereservations->count(),
            'CarReservations' => auth()->user()->carreservations->count(),
            'TransferReservations' => auth()->user()->transferreservations->count(),
        ]);
    }
}

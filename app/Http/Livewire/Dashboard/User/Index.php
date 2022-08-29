<?php

namespace App\Http\Livewire\Dashboard\User;

use App\Models\CarReservation;
use App\Models\FacilityReview;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $Reservations;
    public $CarReservations;
    public $TransferReservations;
    public $PackageReservations;
    public function render()
    {
        return view('livewire.dashboard.user.index',['carreservations'=>CarReservation::latest()->paginate(5)])->layoutData(['title' => 'User Dashboard | Grandezza Booking System ']);
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

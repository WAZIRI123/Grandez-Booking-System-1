<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\About;
use App\Models\CarReservation;
use App\Models\Package;
use App\Models\Galery;
use App\Models\PackageReservation;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\transferReservation;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    // public $totalRooms;
    public $Reservations;
    public $CarReservations;
    public $TransferReservations;
    public $PackageReservations;

    public function render()
    {
        return view('livewire.dashboard.admin.index',['carreservations'=>CarReservation::latest()->paginate(5)])->layoutData(['title' => 'Admin Dashboard | Grandezza Booking System']);
    }

    public function mount()
    {
        $this->fill([
            'Reservations' =>Reservation::latest()->count(),
            'PackageReservations' => PackageReservation::latest()->count(),
            'CarReservations' => CarReservation::latest()->count(),
            'TransferReservations' => transferReservation::latest()->count(),
        ]);
    }


}

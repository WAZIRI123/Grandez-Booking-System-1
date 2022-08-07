<?php

namespace App\Http\Livewire\Dashboard\User\Reservation;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Reservation;
use App\Models\Package;
use App\Enums\ReservationStatus;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $selected_reservation;
    public $message;

    protected $listeners = ['reservation:canceled' => 'reservationcanceled'];

    public function reservationcanceled()
    {
        $this->dispatchBrowserEvent('reservation:canceled');
    }

    public function render()
    {
        return view('livewire.dashboard.user.reservation.index', [
            'reservations' => Reservation::where('user_id', auth()->id())->latest()->paginate(5)
        ])->layoutData(['title' => 'Reservation Dashboard | Grandez']);
    }

    public function cancel($code)
    {
        $this->selected_reservation = $code;
    }

    public function canceled()
    {
        $this->validate(['message' => ['required']]);

        $reservation = Reservation::firstWhere('code', $this->selected_reservation);
        $room = Package::firstWhere('code', $reservation->package->code);
        
        $reservation->update(['status' => 'canceled', 'message' => $this->message]);

        $this->emitSelf('reservation:canceled');
    }
}

<?php

namespace App\Http\Livewire\Dashboard\User\CarReservation;

use App\Models\CarReservation;
use App\Models\Package;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $selected_carreservation;
    public $message;
    public $rejected;
    public $confirmed;
    public $carreservation;
    public $waiting;
    public $total;
    protected $listeners = ['carreservation:canceled' => 'carreservationcanceled'];

    public function carreservationcanceled()
    {
        $this->dispatchBrowserEvent('carreservation:canceled');
    }
    public function render()
    {
        $this->carreservation = CarReservation::where('user_id', auth()->id())->get();
        return view('livewire.dashboard.user.car-reservation.index')->layoutData(['title' => 'package-reservation Dashboard | Grandez']);
    }
    public function cancel($code)
    {
        $this->selected_carreservation = $code;
    }

    public function canceled()
    {
        $this->validate(['message' => ['required']]);

        $carreservation = CarReservation::firstWhere('code', $this->selected_carreservation);

        $room = Package::firstWhere('code', $carreservation->package->code);

        $carreservation->update(['status' => 'canceled', 'message' => $this->message]);

        $this->emitSelf('carreservation:canceled');
    }
}

<?php

namespace App\Http\Livewire\Dashboard\User\TransferReservation;

use App\Models\Package;
use App\Models\transferReservation;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $selected_transferreservation;
    public $message;
    public $rejected;
    public $confirmed;
    public $transferreservation;
    public $waiting;
    public $total;
    protected $listeners = ['transferreservation:canceled' => 'transferreservationcanceled'];

    public function transferreservationcanceled()
    {
        $this->dispatchBrowserEvent('transferreservation:canceled');
    }
    public function render()
    {
        $this->transferreservation = transferReservation::where('user_id', auth()->id())->get();
        return view('livewire.dashboard.user.transfer-reservation.index',[
            'transferreservations' => transferReservation::where('user_id', auth()->id())->latest()->paginate(5)
        ])->layoutData(['title' => 'package-reservation Dashboard | Grandez']);
    }
    public function cancel($code)
    {
        $this->selected_transferreservation = $code;
    }

    public function canceled()
    {
        $this->validate(['message' => ['required']]);

        $transferreservation = transferReservation::firstWhere('code', $this->selected_transferreservation);

        $room = Package::firstWhere('code', $transferreservation->package->code);

        $transferreservation->update(['status' => 'canceled', 'message' => $this->message]);

        $this->emitSelf('transferreservation:canceled');
    }
}

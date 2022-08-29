<?php

namespace App\Http\Livewire\Dashboard\Admin\TransferReservation;

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
    public $status;
    public $total;
    protected $listeners = ['transferreservation:canceled' => 'transferreservationcanceled'];

    public function transferreservationcanceled()
    {
        $this->dispatchBrowserEvent('transferreservation:canceled');
    }
    public function render()
    {
        $this->transferreservation = transferReservation::latest()->get();
        return view('livewire.dashboard.admin.transfer-reservation.index',[
            'transferreservations' => transferReservation::latest()->paginate(5)
        ])->layoutData(['title' => 'transfer-reservation Dashboard | Grandez']);
    }
    public function changeStatus($reservationId){
        if ($this->status) {
           transferReservation::where('id',$reservationId)->update(['status'=>$this->status]);
           $this->reset();
        }
    }
}

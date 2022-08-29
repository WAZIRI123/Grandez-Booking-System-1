<?php

namespace App\Http\Livewire\Dashboard\Admin\Reservation;

use App\Models\Reservation;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $selected_reservation;
    public $message;
    public $rejected;
    public $status;
    public $confirmed;
    public $reservation;
    public $waiting;
    public $total;
    public function render()
    {
        $this->reservation= Reservation::latest()->get();
        return view('livewire.dashboard.admin.reservation.index',[
            'reservations'=>Reservation::latest()->latest()->paginate(5)
            ])->layoutData(['title' => 'Reservation Dashboard | Grandez']);
    }
    public function changeStatus($reservationId){
        if ($this->status) {
           Reservation::where('id',$reservationId)->update(['status'=>$this->status]);
           $this->reset();
        }
    }

}

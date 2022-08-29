<?php

namespace App\Http\Livewire\Dashboard\Admin\PackageReservation;

use App\Models\PackageReservation;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $selected_packagereservation;
    public $message;
    public $rejected;
    public $confirmed;
    public $packagereservation;
    public $waiting;
    public $status;
    public $total;
    protected $listeners = ['packagereservation:canceled' => 'packagereservationcanceled'];

    public function render()
    {
        $this->packagereservation = PackageReservation::latest()->get();
        return view('livewire.dashboard.admin.package-reservation.index',[
            'packagereservations' => PackageReservation::latest()->paginate(5)
        ])->layoutData(['title' => 'package-reservation Dashboard | Grandez']);
    }
    public function changeStatus($reservationId){
        if ($this->status) {
           PackageReservation::where('id',$reservationId)->update(['status'=>$this->status]);
           $this->reset();
        }
    }
}

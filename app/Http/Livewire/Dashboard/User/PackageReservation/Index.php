<?php

namespace App\Http\Livewire\Dashboard\User\PackageReservation;

use App\Models\Package;
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
    public $total;
    protected $listeners = ['packagereservation:canceled' => 'packagereservationcanceled'];

    public function render()
    {
        $this->packagereservation = PackageReservation::where('user_id', auth()->id())->get();

        return view('livewire.dashboard.user.package-reservation.index', [
            'packagereservations' => PackageReservation::where('user_id', auth()->id())->latest()->paginate(5)
        ])->layoutData(['title' => 'package-reservation Dashboard | Grandez']);
    }
    public function cancel($code)
    {
        $this->selected_packagereservation = $code;
    }

}

<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\About;
use App\Models\Package;
use App\Models\Galery;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    // public $totalRooms;
    public $totalPackagies;
    public $totalGalery;
    public $about;
    public $image;
    public $text;
    public $title;

    public function render()
    {
        return view('livewire.dashboard.admin.index')->layoutData(['title' => 'Admin Dashboard | Grandezza Booking System']);
    }

    public function mount()
    {
        $this->fill([
          
            'totalPackagies' => Package::latest()->get()->count(),
           
        ]);

        $this->fill([
           
        ]);
    }


}

<?php

namespace App\Http\Livewire\Transfer;

use App\Models\Transfer;
use App\Models\transferReservation;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
    public $transfer;
    public $price;
    public $min_date;
    public $date;
    public function mount(Transfer $transfer)
    {
      $this->transfer = $transfer;
      $this->price = $transfer->price;
      $this->min_date = date('Y-m-d');
    }
    public function reservation()
    {
      $rules = [
        'date' => ['required', 'date', 'after:' . Carbon::parse($this->min_date)->yesterday()->toDateString()],
    ];
    $validatedData = $this->validate($rules);
    $validatedData['transfer_id'] = $this->transfer->id;
    $validatedData['user_id'] = auth()->id();
    $validatedData['code'] = str(uniqid('Grandezza-') . date('Ymd'))->upper();
    transferReservation::updateOrCreate(['transfer_id'=>$this->transfer->id,'date'=>$this->date],$validatedData);
    $this->dispatchBrowserEvent('reservation:created');

    }
      
    public function render()
    {
        return view('livewire.transfer.index')->layout('layouts.main');
    }
}

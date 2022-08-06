<?php

namespace App\Http\Livewire\Car;

use App\Models\CarRental;
use App\Models\CarReservation;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
    public $car;
    public $totalPrice;
    public $minStart_date;
    public $minEnd_date;
    public $start_date;
    public $end_date ;
    public $totalDays;
    public function mount(CarRental $car)
    {
      $this->car = $car;
      $this->price = $car->price;
      $this->minStart_date = date('Y-m-d');
      $this->minEnd_date =Carbon::parse(date('Y-m-d'))->add(1, 'day')->toDateString();
     
    }
    public function reservation()
    {
      $rules = [
        'start_date' => ['required', 'date', 'after:' . Carbon::parse($this->minStart_date)->yesterday()->toDateString()],
        'end_date' => ['required', 'date', 'after:' . Carbon::parse($this->minEnd_date)->yesterday()->toDateString()],
    ];
    $validatedData = $this->validate($rules);
    $validatedData['car_id'] = $this->car->id;
    $validatedData['total_price'] = $this->totalPrice;
    $validatedData['user_id'] = auth()->id();
    $validatedData['code'] = str(uniqid('Grandezza-') . date('Ymd'))->upper();
    CarReservation::updateOrCreate(['car_id'=>$this->car->id,'start_date'=>$this->start_date,'end_date'=>$this->end_date],$validatedData);
    $this->dispatchBrowserEvent('reservation:created');
  
    }
      
    public function setTotalPrice(){
      if ($this->start_date >= $this->end_date) { 
        $this->reset('end_date');
    }

     $this->totalDays = Carbon::parse($this->start_date)->diffInDays($this->end_date);
      if ($this->totalDays !=null) {
        
        $this->totalPrice=$this->price*$this->totalDays;
      }else {
        $this->totalPrice=$this->price;
      }
 
    }
    public function lastpage(){

      session(['car' => $this->car->slug]);
    }
    public function render()
    {
        return view('livewire.car.index')->layout('layouts.main');
    }
}

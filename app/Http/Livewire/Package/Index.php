<?php


namespace App\Http\Livewire\Package;

use App\Enums\ReservationStatus;
use Carbon\Carbon;
use App\Models\Package;
use App\Models\Reservation;
use Livewire\Component;

class Index extends Component
{
  public $package;
  public $price;
  public $number_of_visitor=1;
  public $check_in;
  public $minCheckIn ;
  public $totalPrice;
  public  $perperson=1;
  public function mount(Package $package)
  {
      $this->package = $package;
      $this->price = $this->price;
      $this->minCheckIn = date('Y-m-d');
    $this->setPrice();
  }
  public function reservation()
  {
    $rules = [
      'check_in' => ['required', 'date', 'after:' . Carbon::parse($this->minCheckIn)->yesterday()->toDateString()],
      'number_of_visitor' => ['required', 'numeric'],
      'price' => ['required', 'numeric'],
  ];
  $validatedData = $this->validate($rules);
  $validatedData['package_id'] = $this->package->id;
  $validatedData['date'] = date('Y-m-d');
  $validatedData['total_price'] = $this->totalPrice;
  $validatedData['user_id'] = auth()->id();
  $validatedData['code'] = str(uniqid('Grandezza-') . date('Ymd'))->upper();
  Reservation::create($validatedData);
  $this->dispatchBrowserEvent('reservation:created');

  }

  public function setPrice()
  {
    switch ($this->package->id) {
        // price of package number 1   
      case 1:
        switch ($this->perperson) {
          case 2:
            $this->price = 120;
            break;
          case 3:
            $this->price = 110;
            break;
            case '':
              $this->price = 180;
              break;
          case $this->perperson > 3:
            $this->price = 100;
            break;
          default:
            $this->price =180;
        }
        break;
        // price of package number 2
      case 2:
        switch ($this->perperson) {
          case 2:
            $this->price = 80;
            break;
          case 3:
            $this->price = 65;
            break;
            case '':
              $this->price = 95;
              break;
          case $this->perperson > 3:
            $this->price = 55;
            break;
          default:
            $this->price = 95;
        }
        break;
        // price of package number 3
      case 3:
        switch ($this->perperson) {
          case 2:
            $this->price = 85;
            break;
          case 3:
            $this->price = 75;
            break;
            case '':
              $this->price = 125;
              break;
          case $this->perperson > 3:
            $this->price = 65;
            break;
          default:
            $this->price = 125;
        }
        break;
        // price of package number 4
      case 4:
        switch ($this->perperson) {
          case 2:
            $this->price = 80;
            break;
          case 3:
            $this->price = 70;
            break;
            case '':
              $this->price = 120;
              break;
          case $this->perperson > 3:
            $this->price = 65;
            break;
          default:
            $this->price = 120;
        }
        break;
        // price of package number 5
      case 5:
        switch ($this->perperson) {
          case 2:
            $this->price = 70;
            break;
          case 3:
            $this->price = 60;
            break;
            case '':
              $this->price = 90;
              break;
          case $this->perperson > 3:
            $this->price = 50;
            break;
          default:
            $this->price = 90;
        }
        break;
        // price of package number 6
      case 6:
        switch ($this->perperson) {
          case 2:
            $this->price = 125;
            break;
          case 3:
            $this->price = 95;
            break;
            case '':
              $this->price = 160;
              break;
          case $this->perperson > 3:
            $this->price = 85;
            break;
          default:
            $this->price = 160;
        }
        break;
    }
    $this->setTotalPrice();
  }
  public function setTotalPrice(){
    if (is_numeric($this->number_of_visitor)) {
      
      $this->totalPrice=$this->price*$this->number_of_visitor;
    }else {
      $this->totalPrice=$this->price;
    }
   
  }
  public function render()
  {
    return view('livewire.package.index')->layout('layouts.main');
  }
}

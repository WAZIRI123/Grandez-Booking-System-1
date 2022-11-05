<?php


namespace App\Http\Livewire\Activity;

use App\Enums\ReservationStatus;
use App\Mail\Reservation as MailReservation;
use Carbon\Carbon;
use App\Models\Activity;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
  public $activity;
  public $price;
  public $check_in;
  public $minCheckIn ;
  public $totalPrice;
  public  $perperson=1;
  public function mount(Activity $activity)
  {
      $this->activity = $activity;
      $this->price = $this->price;
      $this->minCheckIn = date('Y-m-d');
    $this->setPrice();
  }
  public function reservation()
  {
    $rules = [
      'check_in' => ['required', 'date', 'after:' . Carbon::parse($this->minCheckIn)->yesterday()->toDateString()],
      'price' => ['required', 'numeric'],
  ];
  $validatedData = $this->validate($rules);
  $validatedData['activity_id'] = $this->activity->id;
  $validatedData['date'] = date('Y-m-d');
  $validatedData['total_price'] = $this->totalPrice;
  $validatedData['no_of_visitors'] = $this->perperson;
  $validatedData['user_id'] = auth()->id();
  $validatedData['code'] = str(uniqid('Grandezza-') . date('Ymd'))->upper();
  Reservation::updateOrCreate(['activity_id'=>$this->activity->id,'check_in'=>$this->check_in,'user_id'=>auth()->user()->id],$validatedData);
  $this->dispatchBrowserEvent('reservation:created');
  
  Mail::to('info@grandezzazanzibar.com')->send(new MailReservation(auth()->user()->email));
  }

  public function setPrice()
  {
    switch ($this->activity->id) {
        // price of activity number 1   
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
        // price of activity number 2
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
        // price of activity number 3
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
        // price of activity number 4
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
        // price of activity number 5
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
        // price of activity number 6
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
  public function lastpage(){

    session(['activity' => $this->activity->slug]);
  }
  public function setTotalPrice(){
    if (is_numeric($this->perperson)) {
      
      $this->totalPrice=$this->price*$this->perperson;
    }else {
      $this->totalPrice=$this->price;
    }
   
  }
  public function render()
  {
    return view('livewire.activity.index')->layout('layouts.main');
  }
}

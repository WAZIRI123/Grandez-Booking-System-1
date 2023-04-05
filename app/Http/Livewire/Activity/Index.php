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
      $prices = [
        //SAFARIBLUE
          1 => [
              1 => 190,
              2 => 150,
              3 => 130,
              'gt4'=> 105,
              'gt10'=> 85,
          ],
          // add more activities here with their respective prices
//NUNGWIDHOWSUNSETCRUISE
          2 => [
            1 => 115,
            2 => 95,
            3 => 80,
            'gt4'=> 70,
            'gt10'=> 60,
        ],

//PRISON ISLAND TOUR
        3 => [
          1 => 140,
          2 => 95,
          3 => 85,
          'gt4'=> 75,
          'gt10'=> 65,
      ],
//MNEMBAISLAND

      4 => [
        1 => 190,
        2 => 150,
        3 =>130,
        'gt4'=> 105,
        'gt10'=> 85,
    ],
//SPICE TOUR
    5 => [
      1 => 100,
      2 => 85,
      3 =>75,
      'gt4'=> 65,
      'gt10'=> 55,
  ],

  //NAKUPENDA ISLAND
  6 => [
    1 => 170,
    2 => 140,
    3 =>105,
    'gt4'=> 95,
    'gt10'=> 85,
],

      ];
  
      $activityId = $this->activity->id;
      $numPersons = $this->perperson;
  
      if (!isset($prices[$activityId])) {
          // handle unknown activity ID
          $this->price = 0;
      } elseif ($numPersons >= 4 && $numPersons <= 9) {
          $this->price = $prices[$activityId]['gt4'];
      } 
      elseif ($numPersons >= 10) {
        $this->price = $prices[$activityId]['gt10'];
    }
      elseif (!isset($prices[$activityId][$numPersons])) {
          // handle unknown number of persons for this activity
          $this->price = 0;
      } else {
          $this->price = $prices[$activityId][$numPersons];
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

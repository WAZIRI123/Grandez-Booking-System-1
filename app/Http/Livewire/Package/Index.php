<?php

namespace App\Http\Livewire\Package;

use App\Models\Package;
use App\Models\PackageActivities;
use App\Models\PackageReservation;
use App\Models\PackageReservationDetails;
use App\Models\PackageType;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
  public $package;
  public $perperson;
  public $packageType;
  public $type = 1;
  public $accomodationPrice;
  public $sumAccomodationPrice;
  public $total_days;
  public $totalPrice;
  // public $packageActivities;
  // public $selectedActivity;
  public $sumActivitiesPrice;
  public $arrivalPrice;
  public $departurePrice = 20;
  public $activityPrice = 0;
  public $minStart_date;
  public $minEnd_date;
  public $start_date;
  public $end_date;
  public $totalDays;
  public function mount(Package $package)
  {
    $this->packageActivities = PackageActivities::all();
    $this->packageType = PackageType::all();
    $this->package = $package;
    $this->total_days = intval($package->total_days);
    $this->minStart_date = date('Y-m-d');
  }
  public function reservation()
  {
    $this->setTotalPrice();
    $rules = [
      'start_date' => ['required', 'date', 'after:' . Carbon::parse($this->minStart_date)->yesterday()->toDateString()],
      'packageType' => ['required'],
    ];
    $validatedData = $this->validate($rules);
    $validatedData['package_id'] = $this->package->id;
    $validatedData['end_date'] = Carbon::parse($this->start_date)->addDay($this->totalDays)->toDateString();
    $validatedData['total_price'] = $this->totalPrice;
    $validatedData['no_of_visitors'] = $this->perperson;
    $validatedData['user_id'] = auth()->id();
    $validatedData['code'] = str(uniqid('Grandezza-') . date('Ymd'))->upper();
    $reserveId = PackageReservation::updateOrCreate(['package_id' => $this->package->id, 'start_date' => $this->start_date], $validatedData);
    $this->dispatchBrowserEvent('reservation:created');
  }

  public function  setActivitiPrice()
  {
      $numberOfPersons = $this->perperson;
  
      if ($numberOfPersons < 1) {
          return;
      }
  
      $packagePrices = [
          1 => [
               2 => [1 => 580, 2 => 390, 3 => 320, 4 => 300], //budjet
              3 => [1 => 620, 2 => 435, 3 => 370, 4 => 350],//standard
              1 => [1 => 1435, 2 => 1100, 3 => 950, 4 => 920] //luxury
          ],
          // add prices for other packages here

          2 => [
            2 => [1 => 860, 2 => 580, 3 => 480, 4 => 420], //budjet
           3 => [1 => 920, 2 => 650, 3 => 550, 4 => 490],//standard
           1 => [1 => 2135, 2 => 1700, 3 => 1640, 4 => 1540] //luxury
       ],

       
       3 => [
        2 => [1 => 1090, 2 => 725, 3 => 610, 4 => 570], //budjet
       3 => [1 => 1250, 2 => 865, 3 => 710, 4 => 640],//standard
       1 => [1 => 3230, 2 => 1905, 3 => 1470, 4 => 1320] //luxury
   ],

   4 => [
    2 => [1 => 1140, 2 => 925, 3 => 760, 4 => 710], //budjet
   3 => [1 => 1620, 2 => 1100, 3 => 895, 4 => 855],//standard
   1 => [1 => 4085, 2 => 2395, 3 => 1840, 4 => 1650] //luxury
],

5 => [
  2 => [1 => 1370, 2 => 995, 3 => 830, 4 => 760], //budjet
 3 => [1 => 2150, 2 => 1385, 3 => 1120, 4 => 1070],//standard
 1 => [1 => 11390, 2 => 6515, 3 => 5010, 4 => 4810] //luxury
],

6 => [
  2 => [1 => 1600, 2 => 1170, 3 => 960, 4 => 880], //budjet
 3 => [1 => 2510, 2 => 1625, 3 => 1320, 4 => 1230],//standard
 1 => [1 => 13290, 2 => 7610, 3 => 5855, 4 => 5755] //luxury
],


      ];
  
      $activityType = $this->type;
      $packageId = $this->package->id;
    
      if (isset($packagePrices[$packageId][$activityType])) {
       
          $priceTable = $packagePrices[$packageId][$activityType];
          $maxNumberOfPersons = max(array_keys($priceTable));
  
          $price = $priceTable[min($numberOfPersons, $maxNumberOfPersons)];
          $this->sumActivitiesPrice = $price;
      }
  }
 



  public function setTotalPrice()
  {
    
    $this->sumActivitiesPrice = 0;
    $this->sumAccomodationPrice = 0;
    $this->setActivitiPrice();
    if ($this->perperson > 0 && is_numeric($this->perperson)) {
      $this->totalPrice =
        ($this->sumActivitiesPrice) * $this->perperson;
    }
  }
  public function lastpage()
  {

    session(['package' => $this->package->slug]);
  }
 
  public function render()
  {
    return view('livewire.package.index')->layout('layouts.main');
  }
}

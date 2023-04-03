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
  public function setActivitiPrice()
  {
    switch ($this->package->id) {
      case 1:
        switch ($this->type){
          case '2': //bu
            switch ($this->perperson) {
              case 1:
                $this->sumActivitiesPrice = 580;
                break;
              case 2:
                $this->sumActivitiesPrice =  390;
                break;
              case 3:
                $this->sumActivitiesPrice =  320;
                break;
              case 4:
              $this->sumActivitiesPrice =  300;
            }
            break;

            case '3': //standard
              switch ($this->perperson) {
                case 1:
                  $this->sumActivitiesPrice = 620;
                  break;
                case 2:
                  $this->sumActivitiesPrice =  435;
                  break;
                case 3:
                  $this->sumActivitiesPrice =  370;
                  break;
                default:
                $this->sumActivitiesPrice =  350;
              }
              break; 

              
            case '1': //luxury
              switch ($this->perperson) {
                case 1:
                  $this->sumActivitiesPrice = 1435;
                  break;
                case 2:
                  $this->sumActivitiesPrice =  1100;
                  break;
                case 3:
                  $this->sumActivitiesPrice =  950;
                  break;
                default:
                $this->sumActivitiesPrice =   920;
              }
              break; 

        }
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

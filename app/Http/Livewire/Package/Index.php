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
  public $packageActivities;
  public $selectedActivity;
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
    foreach ($this->selectedActivity as $key => $value) {
      foreach ($value as $key1 => $value1) {
        if (array_filter($value) && $value1 != false) {
          $details = [];
          $details['activity_id'] = $key;
          $details['day'] = $key1;
          $details['reservation_id'] = $reserveId->id;
          PackageReservationDetails::create($details);
        }
      }
    }
    $this->dispatchBrowserEvent('reservation:created');
  }
  public function setActivitiPrice()
  {

      // foreach day do this later && have the  increaeting sum each time
      if ($this->selectedActivity > 0) {
        foreach ($this->selectedActivity as $key => $value) {
          if ($value != false) {
            foreach ($value as $key1 => $value1) {
              if (array_filter($value) && $value1 != false) {
                switch ($key) {
                    // price of activity number 1  
                  case '1'://prison island
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 170;
                        break;
                      case '':
                        $this->activityPrice = 125;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 225;
                        break;
                      default:
                        $this->activityPrice = 125;
                    }
                    break;
                    // price of activity number 2
                  case '2'://spice tour
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 140;
                        break;
                      case '':
                        $this->activityPrice = 90;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 180;
                        break;
                      default:
                        $this->activityPrice = 90;
                    }
                    break;
                    // price of activity number 3
                  case '3'://stone town tour
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 160;
                        break;
                      case '':
                        $this->activityPrice = 95;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 195;
                        break;
                      default:
                        $this->activityPrice = 95;
                    }
                    break;
                    // price of activity number 4

                    // price of activity number 5
                  case '4'://swim with the turtles
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 160;
                        break;
                      case '':
                        $this->activityPrice = 95;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 225;
                        break;
                      default:
                        $this->activityPrice = 95;
                    }
                    break;
                    //
                  case '5'://kuza carve
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 160;
                        break;
                      case '':
                        $this->activityPrice = 95;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 225;
                        break;
                      default:
                        $this->activityPrice = 95;
                    }

                    break;
                    //
                  case '6'://the rock restourant
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 120;
                        break;
                      case '':
                        $this->activityPrice = 120;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 120;
                        break;
                      default:
                        $this->activityPrice = 120;
                    }
                    break;
                    // 
                  case '7'://jozani forest
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 160;
                        break;
                      case '':
                        $this->activityPrice = 105;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 210;
                        break;
                      default:
                        $this->activityPrice = 105;
                    }
                    break;
                    // price of activity number 6
                  case '8'://nakupenda sandbank
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 250;
                        break;
                      case '':
                        $this->activityPrice = 160;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 285;
                        break;
                      default:
                        $this->activityPrice = 160;
                    }
                    break;
                  case '9'://donation
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 100;
                        break;
                      case '':
                        $this->activityPrice = 50;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 150;
                        break;
                      default:
                        $this->activityPrice = 50;
                    }
                    break;
                  
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 250;
                        break;
                      case '':
                        $this->activityPrice = 160;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 285;
                        break;
                      default:
                        $this->activityPrice = 160;
                    }
                    break;
     
                    switch ($this->perperson) {
                      case 2:
                        $this->activityPrice = 100;
                        break;
                      case '':
                        $this->activityPrice = 50;
                        break;
                      case $this->perperson >= 3:
                        $this->activityPrice = 150;
                        break;
                      default:
                        $this->activityPrice = 50;
                    }
                    break;
                  case '12'://rest
                    $this->activityPrice = 0;
                }
                $this->sumActivitiesPrice += $this->activityPrice;

              }
            }
          }
        }
      }
    
  }
  public function setAccomodationPrice()
  {
    switch ($this->package->id) {
      case '1':
      case '2':
        switch ($this->type) {
            // price of activity number 1   
          case '2': //bu
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 30;
                break;
              case '':
                $this->accomodationPrice = 20;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 45;
                break;
              default:
                $this->accomodationPrice = 20;
            }
            break;
            // price of activity number 2
          case '3'://standard
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 150;
                break;
              case '':
                $this->accomodationPrice = 120;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 180;
                break;
              default:
                $this->accomodationPrice = 120;
            }
            break;
            // price of activity number 3
          case '1'://lux
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 800;
                break;
              case '':
                $this->accomodationPrice = 520;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 1040;
                break;
              default:
                $this->accomodationPrice = 520;
            }
            break;
        }
        break;
      case '3':
      case '4':
        switch ($this->type) {
            // price of activity number 1   
          case '2'://bu
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 80;
                break;
              case '':
                $this->accomodationPrice = 80;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 95;
                break;
              default:
                $this->accomodationPrice = 80;
            }
            break;
            // price of activity number 2
          case '3'://standard
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 160;
                break;
              case '':
                $this->accomodationPrice = 130;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 185;
                break;
              default:
                $this->accomodationPrice = 130;
            }
            break;
            // price of activity number 3
          case '1'://lux
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 680;
                break;
              case '':
                $this->accomodationPrice = 625;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 750;
                break;
              default:
                $this->accomodationPrice = 625;
            }
            break;
        }
        break;

      case '5':
      case '6':
        switch ($this->type) {
            // price of activity number 1   
          case '2'://bu
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 58;
                break;
              case '':
                $this->accomodationPrice = 40;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 77;
                break;
              default:
                $this->accomodationPrice = 40;
            }
            break;
            // price of activity number 2
          case '3'://standard
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 200;
                break;
              case '':
                $this->accomodationPrice = 180;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 235;
                break;
              default:
                $this->accomodationPrice = 180;
            }
            break;
            // price of activity number 3
          case '1'://lux
            switch ($this->perperson) {
              case 2:
                $this->accomodationPrice = 1790;
                break;
              case '':
                $this->accomodationPrice = 1620;
                break;
              case $this->perperson >= 3:
                $this->accomodationPrice = 2060;
                break;
              default:
                $this->accomodationPrice = 1620;
            }
            break;
        }
        break;
    }

    $this->sumAccomodationPrice = $this->accomodationPrice * floor($this->total_days);
  }
  public function setArrivalPrice()
  {
    switch ($this->package->id) {
      case '1':
      case '2':
        switch ($this->type) {
            // price of activity number 1   
          case '3'://stan
          case '2'://bu
            switch ($this->perperson) {
              case 2:
                $this->arrivalPrice = 20;
                break;
              case '':
                $this->arrivalPrice = 20;
                break;
              case $this->perperson >= 3:
                $this->arrivalPrice = 20;
                break;
              default:
                $this->arrivalPrice = 20;
            }
            break;
            // price of activity number 2
          case '1'://lux
            switch ($this->perperson) {
              case 2:
                $this->arrivalPrice = 35;
                break;
              case '':
                $this->arrivalPrice = 35;
                break;
              case $this->perperson >= 3:
                $this->arrivalPrice = 35;
                break;
              default:
                $this->arrivalPrice = 35;
            }
            break;
        }
        break;
      case '3':
      case '4':
      case '5':
      case '6':
        switch ($this->type) {
            // price of activity number 1   
          case '3'://stan
          case '2'://bu
          case '1'://lux
            switch ($this->perperson) {
              case 2:
                $this->arrivalPrice = 50;
                break;
              case '':
                $this->arrivalPrice = 50;
                break;
              case $this->perperson >= 3:
                $this->arrivalPrice = 50;
                break;
              default:
                $this->arrivalPrice = 50;
            }
            break;
        }
    }
  }

  public function setTotalPrice()
  {
    $this->sumActivitiesPrice = 0;
    $this->sumAccomodationPrice = 0;
    $this->setArrivalPrice();
    $this->setDeparturePrice();
    $this->setAccomodationPrice();
    $this->setActivitiPrice();
    if ($this->perperson > 0 && is_numeric($this->perperson)) {
      $this->totalPrice =
        ($this->sumActivitiesPrice + $this->sumAccomodationPrice + $this->arrivalPrice + $this->departurePrice) * $this->perperson;
    }
  }
  public function lastpage()
  {

    session(['package' => $this->package->slug]);
  }
  public function setDeparturePrice()
  {
    switch ($this->package->id) {
      case '1':
      case '2':
        $this->arrivalPrice = 20;
        break;
      case '3':
      case '4':
      case '5':
      case '6':
        $this->arrivalPrice = 50;
    }
  }
  public function render()
  {
    return view('livewire.package.index')->layout('layouts.main');
  }
}

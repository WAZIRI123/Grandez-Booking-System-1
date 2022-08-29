<?php

namespace App\Providers;

use App\Models\CarReservation;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\Schema::defaultStringLength(121);
   

        Blade::directive('convert', function ($money) {
            return "<?php echo '$'.number_format($money, 2); ?>";
        });
        Password::defaults(function () {
            return Password::min(8)
                           ->mixedCase()
                           ->uncompromised();
        });
        View::composer(['livewire.dashboard.user.car-reservation.index','livewire.dashboard.user.index'], function ($view) {
            $view->with('carreservations',CarReservation::where('user_id', auth()->id())->latest()->paginate(5));
        });
        
    }
}

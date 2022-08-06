<?php

namespace App\View\Components;
use App\Models\Package;
use Illuminate\View\Component;

class Nav extends Component
{
    public $dashboardLink;
    public $packagies;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->packagies = Package::latest()->orderBy('package_type_id')->orderBy('name')->get();
        
        if (auth()->check()) {
            if (auth()->user()->hasRole('user')) {
                $this->dashboardLink = route('dashboard.user.index');
            }

            if (auth()->user()->hasRole('admin')) {
                $this->dashboardLink = route('dashboard.admin.index');
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav');
    }
}

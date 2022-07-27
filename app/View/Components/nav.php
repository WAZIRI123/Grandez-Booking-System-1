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

@props(['packagies'])
<nav class="py-4 fixed inset-x-0 top-0 z-50 bg-white">
    <div x-data="{ menu: (window.innerWidth >= 768) ? true : false }" class="container mx-auto px-8 flex items-center justify-between relative">
        <div class="flex items-center">
            <a href="{{ route('index') }}">
                <img src="{{ asset("img/brand/logo-1.png") }}" class="w-25 h-25 object-cover rounded-tr-xl rounded-bl-xl" alt="">
            </a>
           
        </div>
         <button x-on:click="menu = (window.innerWidth >= 768) ? true : !menu" class="md:hidden btn btn-icon"><i class='bx bx-menu'></i></button>
        <div x-show="menu" x-on:click.outside="menu = (window.innerWidth >= 768) ? true : false" x-transition.duration.300ms class="flex md:flex-row flex-col md:items-center md:space-x-10 md:space-y-0 space-y-2 md:relative absolute md:top-auto top-[120%] md:p-0 py-4  md:inset-x-auto inset-x-0 md:px-0 px-8 bg-white">
            <x-nav-link :href="route('index')" :active="Route::currentRouteNamed('index') ? 'active' : ''">Home</x-nav-link>
            @if(Route::currentRouteNamed('activities.*'))
            <i class="fa fa-angle-right"></i>
            <div x-data="{ open: false }">
                <x-nav-link href="/activities" :active="Route::currentRouteNamed('activities.*') ? 'active' : ''" x-on:click="(e) => {e.preventDefault(); open = !open;}">Activities</x-nav-link>
            </div>
            @endif
            @if(Route::currentRouteNamed('cars.*'))
            <i class="fa fa-angle-right"></i>
            <div x-data="{ open: false }">
                <x-nav-link href="/cars" :active="Route::currentRouteNamed('cars.*') ? 'active' : ''" x-on:click="(e) => {e.preventDefault(); open = !open;}">Cars</x-nav-link>
            </div>
            @endif
            @if(Route::currentRouteNamed('transfers.*'))
            <i class="fa fa-angle-right"></i>
            <div x-data="{ open: false }">
                <x-nav-link href="/transfers" :active="Route::currentRouteNamed('transfers.*') ? 'active' : ''" x-on:click="(e) => {e.preventDefault(); open = !open;}">Transfers</x-nav-link>
            </div>
            @endif
            @if(Route::currentRouteNamed('packagies.*'))
            <i class="fa fa-angle-right"></i>
            <div x-data="{ open: false }">
                <x-nav-link href="/transfers" :active="Route::currentRouteNamed('packagies.*') ? 'active' : ''" x-on:click="(e) => {e.preventDefault(); open = !open;}">Packagies</x-nav-link>
            </div>
            @endif
            @auth
            <a href="{{ $dashboardLink }}">
                <img class="w-10 h-10 object-cover rounded-tr-xl rounded-bl-xl" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="{{ auth()->user()->avatar }}">
            </a>
            @endauth
        </div>
    </div>
</nav>

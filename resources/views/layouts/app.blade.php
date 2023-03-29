@props(['title'])

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/css/custom.css', 'resources/js/app.js','resources/js/ckeditor.js']);
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>{{ $title }}</title>
    <style>
        .editor__editable,
        /* Classic build. */
        main .ck-editor[role='application'] .ck.ck-content {
            min-height: 400px;
            max-height: 400px;
        }
    </style>
    <livewire:styles />
</head>

<body>
    <div x-data="{ menuOpen: false }" class="flex min-h-screen custom-scrollbar">
            <div class="">
                @if (auth()->user()->hasRole('user'))
                @include('layouts.partials.admin.userAside')
                @endif
                @if (auth()->user()->hasRole('admin'))
                @include('layouts.partials.admin.adminAside')
                @endif
                @if (auth()->user()->hasRole('receptionist'))
                <div class="space-y-2">
                    <span class="font['poppins'] uppercase tracking-widest text-gray-400 font-bold px-6 text-sm">Receptionist</span>
                    <div class="grid gap-2">
                        <a href="{{ route('dashboard.receptionist.index') }}" class="{{ !Route::currentRouteNamed('dashboard.receptionist.index') ? 'hover:bg-gray-100' : 'bg-gray-100' }} py-4 px-6 rounded-tr-xl rounded-bl-xl flex items-center gap-2 transition-all duration-300 group">
                            <i class="bx bx-category text-xl {{ !Route::currentRouteNamed('dashboard.receptionist.index') ? 'text-gray-400 group-hover:text-gray-600' : 'text-gray-800' }} transition-all duration-300"></i>
                            <span class="font-semibold {{ !Route::currentRouteNamed('dashboard.receptionist.index') ? 'text-gray-400 group-hover:text-gray-600' : 'text-gray-800' }} transition-all duration-300">Dasbboard</span>
                        </a>
                    </div>
                    <div class="grid gap-2">
                        <a href="{{ route('dashboard.receptionist.reservations.index') }}" class="{{ !Route::currentRouteNamed('dashboard.receptionist.reservations.*') ? 'hover:bg-gray-100' : 'bg-gray-100' }} py-4 px-6 rounded-tr-xl rounded-bl-xl flex items-center gap-2 transition-all duration-300 group">
                            <i class="bx bx-receipt text-xl {{ !Route::currentRouteNamed('dashboard.receptionist.reservations.*') ? 'text-gray-400 group-hover:text-gray-600' : 'text-gray-800' }} transition-all duration-300"></i>
                            <span class="font-semibold {{ !Route::currentRouteNamed('dashboard.receptionist.reservations.*') ? 'text-gray-400 group-hover:text-gray-600' : 'text-gray-800' }} transition-all duration-300">Reservation</span>
                        </a>
                    </div>
                    @endif
                    <!-- <div class="space-y-2">
                        <span class="font['poppins'] uppercase tracking-widest text-gray-400 font-bold px-6 text-sm">Account</span>
                        <div class="grid gap-2">
                            <a href="#" class="hover:bg-gray-100 py-4 px-6 rounded-tr-xl rounded-bl-xl flex items-center gap-2 transition-all duration-300 group">
                                <i class='bx bx-user text-xl text-gray-400 group-hover:text-gray-600 transition-all duration-300'></i>
                                <span class="font-semibold text-gray-400 group-hover:text-gray-600 transition-all duration-300">Profile</span>
                            </a>
                        </div>
                        <div class="grid gap-2">
                            <a href="#" class="hover:bg-gray-100 py-4 px-6 rounded-tr-xl rounded-bl-xl flex items-center gap-2 transition-all duration-300 group">
                                <i class='bx bx-cog text-xl text-gray-400 group-hover:text-gray-600 transition-all duration-300'></i>
                                <span class="font-semibold text-gray-400 group-hover:text-gray-600 transition-all duration-300">Setting</span>
                            </a>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="grid gap-2">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="hover:bg-gray-100 py-4 px-6 rounded-tr-xl rounded-bl-xl flex items-center gap-2 transition-all duration-300 group">
                                <i class='bx bx-log-out text-xl text-gray-400 group-hover:text-gray-600 transition-all duration-300'></i>
                                <span class="font-semibold text-gray-400 group-hover:text-gray-600 transition-all duration-300">Logout</span>
                            </a>
                        </form>
                    </div> -->
                </div>
        <div class="lg:pl-64 w-full flex flex-col">
        @include('layouts.partials.admin.navbar')
            {{ $slot }}
        </div>
    </div>
    <livewire:scripts />
    {{ $js ?? '' }}
</body>

</html>
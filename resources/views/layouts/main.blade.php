<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
       
        <title>{{ config('app.name', 'Grandez Booking System') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <!-- Scripts -->
        @livewireStyles 
        @stack('jquery')
</head>
<body class="font-['Quicksand']">
    <div class="relative overflow-x-hidden min-h-screen flex flex-col justify-between">
        <x-nav/>
       {{ $slot }}
        
        <footer class="py-8 border-t border-gray-200">
            <div class="container px-10 mx-auto grid md:grid-cols-5 sm:grid-cols-3 grid-cols-2 gap-10">
                <div class="space-y-2">
                    <span class="uppercase tracking-widest text-gray-800 font-bold font-['poppins']">Help</span>
                    <div class="flex flex-col space-y-2">
                        <a class="text-sm text-gray-600 hover:underline" href="#">Help Center</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">FAQ</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">Privacy Policy</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">Cookie Policy</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">Terms of Use</a>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="uppercase tracking-widest text-gray-800 font-bold font-['poppins']">Rooms</span>
                    <div class="flex flex-col space-y-2">
                        <a class="text-sm text-gray-600 hover:underline" href="#">Type</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#package">Package</a>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="uppercase tracking-widest text-gray-800 font-bold font-['poppins']">About Us</span>
                    <div class="flex flex-col space-y-2">
                        <a class="text-sm text-gray-600 hover:underline" href="#">info@grandezzazanzibar.com</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">GRANDEZZA TOURS & TRAVEL P.O. BOX 2224, KIEMBE SAMAKI –ZANZIBAR</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">+255719 280 165</a>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="uppercase tracking-widest text-gray-800 font-bold font-['poppins']">Partner</span>
                    <div class="flex flex-col space-y-2">
                        <a class="text-sm text-gray-600 hover:underline" href="#">Serengete Hotel</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">Kiembe Samaki Hotel</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">Serengete Hotel</a>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="uppercase tracking-widest text-gray-800 font-bold font-['poppins']">Social media</span>
                    <div class="flex flex-col space-y-2">
                        <a class="text-sm text-gray-600 hover:underline" href="#">Grandezza</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#">Grandezza</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <livewire:scripts />
    @stack('scripts')
</body>
</html>
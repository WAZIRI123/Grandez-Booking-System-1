<div>
<!-- start:Page content -->
<div class="h-full bg-gray-200 p-8">
    <!-- start::Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10">
        <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
            <div class="flex items-center justify-between">
                <span class="font-bold text-sm text-indigo-600">Activities</span>
                <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">Reservation</span>
            </div>
            <div class="flex items-center justify-between mt-6">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-indigo-400 bg-opacity-20 rounded-full text-indigo-600 border border-indigo-600" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 17h13.4a3 3 0 0 0 2.5 -1.34l3.1 -4.66h0h-6.23a4 4 0 0 0 -1.49 .29l-3.56 1.42a4 4 0 0 1 -1.49 .29h-3.73h0h-1l-1.5 4z" />
                        <line x1="6" y1="13" x2="7.5" y2="8" />
                        <path d="M6 8h8l2 3" />
                    </svg>

                </div>
                <div class="flex flex-col">
                    <div class="flex items-end">
                        <span class="text-2xl 2xl:text-4xl font-bold">{{ $Reservations }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
            <div class="flex items-center justify-between">
                <span class="font-bold text-sm text-green-600">Packagies</span>
                <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">Reservation</span>
            </div>
            <div class="flex items-center justify-between mt-6">
                <div>
                    <svg class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-green-400 bg-opacity-20 rounded-full text-green-600 border border-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-end">
                        <span class="text-2xl 2xl:text-4xl font-bold">{{ $PackageReservations }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
            <div class="flex items-center justify-between">
                <span class="font-bold text-sm text-blue-600">Car Rentals</span>
                <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">Reservation</span>
            </div>
            <div class="flex items-center justify-between mt-6">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-blue-400 bg-opacity-20 rounded-full text-yellow-600 border border-yellow-600" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="7" cy="17" r="2" />
                        <circle cx="17" cy="17" r="2" />
                        <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-end">
                        <span class="text-2xl 2xl:text-4xl font-bold">{{ $CarReservations }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
            <div class="flex items-center justify-between">
                <span class="font-bold text-sm text-yellow-600">Transfer</span>
                <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">Reservation</span>
            </div>
            <div class="flex items-center justify-between mt-6">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-yellow-400 bg-opacity-20 rounded-full text-yellow-600 border border-yellow-600" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 5h10l2 2l-2 2h-10a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                        <path d="M13 13h-7l-2 2l2 2h7a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1" />
                        <line x1="12" y1="22" x2="12" y2="17" />
                        <line x1="12" y1="13" x2="12" y2="9" />
                        <line x1="12" y1="5" x2="12" y2="3" />
                    </svg>

                </div>
                <div class="flex flex-col">
                    <div class="flex items-end">
                        <span class="text-2xl 2xl:text-4xl font-bold">{{ $TransferReservations }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::Stats -->
    <!-- start::Table -->
    <div class="bg-white rounded-lg px-8 py-6 my-16 overflow-x-scroll custom-scrollbar">
        <h4 class="text-xl font-semibold">Recent Reservations</h4>
        <table class="w-full my-8 whitespace-nowrap">
            <thead class="bg-secondary text-gray-100 font-bold">
                <td>
                </td>
                <td class="py-2 pl-2">
                    Start Date
                </td>
                <td class="py-2 pl-2">
                    Car
                </td>
                <td class="py-2 pl-2">
                    End Date
                </td>
                <td class="py-2 pl-2">
                Status
                </td>
                <td class="py-2 pl-2">
                    Total Price
                </td>
            </thead>
            <tbody class="text-sm">
                @forelse ($carreservations as $carreservation)
                <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                    <td class="py-3 pl-2">
                        <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                    </td>
                    <td class="py-3 pl-2">
                        {{$carreservation->start_date}}
                    </td>
                    <td class="py-3 pl-2 capitalize">
                        {{$carreservation->cars->name}}
                    </td>
                    <td class="py-3 pl-2">
                        <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">{{$carreservation->end_date}}</span>
                    </td>
                    <td class="py-3 pl-2">
                    {{$carreservation->status}}
                    </td>
                    <td class="py-3 pl-2">
                        <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">${{$carreservation->total_price}}</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="td">There is nothing here</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $carreservations->links() }}
    </div>
    <!-- end::Table -->
</div>
<!-- end:Page content -->
</div>
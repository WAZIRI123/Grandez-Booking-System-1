<div>
    <!-- start:Page content -->
    <div class="h-full bg-gray-200 p-8">
        <!-- start::Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10">
            <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-sm text-indigo-600">Approved</span>
                    <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">Reservation</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-indigo-400 bg-opacity-20 rounded-full text-indigo-600 border border-indigo-600" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l5 5l10 -10" />
                        </svg>

                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl 2xl:text-4xl font-bold">{{ $reservation->where('status',App\Enums\ReservationStatus::Confirmed)->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-sm text-green-600">canceled</span>
                    <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">Reservation</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-green-400 bg-opacity-20 rounded-full text-green-600 border border-green-600" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="9" />
                            <path d="M10 10l4 4m0 -4l-4 4" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl 2xl:text-4xl font-bold">{{ $reservation->where('status',App\Enums\ReservationStatus::Rejected)->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-sm text-blue-600">Waiting</span>
                    <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">Reservation</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-blue-400 bg-opacity-20 rounded-full text-yellow-600 border border-yellow-600" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="7.5" y1="4.21" x2="7.5" y2="4.22" />
                            <line x1="4.21" y1="7.5" x2="4.21" y2="7.51" />
                            <line x1="3" y1="12" x2="3" y2="12.01" />
                            <line x1="4.21" y1="16.5" x2="4.21" y2="16.51" />
                            <line x1="7.5" y1="19.79" x2="7.5" y2="19.8" />
                            <line x1="12" y1="21" x2="12" y2="21.01" />
                            <line x1="16.5" y1="19.79" x2="16.5" y2="19.8" />
                            <line x1="19.79" y1="16.5" x2="19.79" y2="16.51" />
                            <line x1="21" y1="12" x2="21" y2="12.01" />
                            <line x1="19.79" y1="7.5" x2="19.79" y2="7.51" />
                            <line x1="16.5" y1="4.21" x2="16.5" y2="4.22" />
                            <line x1="12" y1="3" x2="12" y2="3.01" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl 2xl:text-4xl font-bold">{{ $reservation->where('status',App\Enums\ReservationStatus::Waiting)->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-sm text-yellow-600">Total</span>
                    <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">Reservation</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-yellow-400 bg-opacity-20 rounded-full text-yellow-600 border border-yellow-600" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="4" y1="8" x2="20" y2="8" />
                            <line x1="4" y1="16" x2="20" y2="16" />
                        </svg>


                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl 2xl:text-4xl font-bold">{{ $reservation->count() }}</span>
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
                        Check In
                    </td>
                    <td class="py-2 pl-2">
                        Activity
                    </td>
                    <td class="py-2 pl-2">
                        Number of visitors
                    </td>
                    <td class="py-2 pl-2">
                        Price
                    </td>
                    <td class="py-2 pl-2">
                        Status
                    </td>
                    <td class="py-2 pl-2">
                        Action
                    </td>
                    <td class="py-2 pl-2">
                        Total Price
                    </td>
                </thead>
                <tbody class="text-sm">
                    @forelse ($reservations as $reservation)
                    <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                        <td class="py-3 pl-2">
                            <input type="checkbox" class="rounded focus:ring-0 checked:bg-red-500 ml-2">
                        </td>
                        <td class="py-3 pl-2">
                            {{$reservation->check_in}}
                        </td>
                        <td class="py-3 pl-2 capitalize">
                            {{$reservation->activities->name}}
                        </td>
                        <td class="py-3 pl-2">
                            {{$reservation->no_of_visitors}} peoples
                        </td>
                        <td class="py-3 pl-2">
                            <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">${{$reservation->price}}</span>
                        </td>
                        <td class="py-3 pl-2">
                            {{$reservation->status->value}}
                        </td>
                        <td class="py-3 pl-2">
                            <!-- start::Rounded Select -->
                            <div class="flex flex-col">
                                <select name="{{$reservation->id}}" wire:model="status" wire:change="changeStatus({{$reservation->id}})" id="{{$reservation->id}}" class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg">
                                    <option>Change Status</option>
                                    <option value="{{App\Enums\ReservationStatus::Confirmed->value}}">Approve</option>
                                    <option value="{{App\Enums\ReservationStatus::Rejected->value}}">Cancel</option>
                                </select>
                            </div>
                            <!-- end::Rounded Select -->
                        </td>
                        <td class="py-3 pl-2">
                            <a href="#" class="bg-primary hover:bg-opacity-90 px-2 py-1 mr-2 text-gray-100 rounded-lg">${{$reservation->total_price}}</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="td">There is nothing here</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $reservations->links() }}
        </div>
    </div>
    <!-- end::Table -->
    <!-- end:Page content -->
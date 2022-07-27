<section class="">
               @auth
                    @if (auth()->user()->hasVerifiedEmail())
                        @if (!auth()->user()->hasRole('user'))
                            <div x-data="{ open: false }" class="flex sm:flex-row flex-col sm:space-x-2 sm:space-y-0 space-y-2 sm:items-end">
                                <div class="form-control">
                                    <label class="label" for="check_in">Check In</label>
                                    <input min="2022-01-01" class="w-full input" id="check_in" type="date">
                                </div>
                                <div class="form-control">
                                    <label class="label" for="check_out">Check Out</label>
                                    <input min="2022-01-01" class="w-full input" id="check_out" type="date">
                                </div>
                                <button x-on:click="open = true" class="btn">Check availability</button>
                                <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50">
                                    <div x-show="open" x-transition.duration.300ms.opacity class="fixed inset-0 bg-black/50"></div>
                                    <div x-show="open" x-transition.duration.300ms x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4">
                                        <div x-on:click.stop x-trap.noscroll.inert="open" class="relative max-w-md w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4 text-center">
                                            <i class='bx bx-info-circle text-8xl text-blue-600'></i>
                                            <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')">You Can't Do It</h2>
                                            <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                                                Your role is not a user so you can't place an order!
                                            </p>
                                            <div class="flex space-x-2 justify-center">
                                                <button type="button" x-on:click="open = false" class="btn">
                                                    Oh.. Okay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div x-data="{ open: false }" class="flex sm:flex-row flex-col sm:space-x-2 sm:space-y-0 space-y-2 sm:items-end">
                                <div class="form-control">
                                    <label for="check_in" class="label">Check In</label>
                                    <input class="input" type="date" name="check_in" id="check_in" wire:model='check_in' wire:change='setCheckIn' min="{{ $minCheckIn }}">
                                    @error('check_in')
                                        <span class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-control">
                                    <label for="check_out" class="label">Check Out</label>
                                    <input class="input" type="date" name="check_out" id="check_out" wire:model='check_out' wire:change='setCheckOut' min="{{ $minCheckOut }}">
                                    @error('check_out')
                                        <span class="invalid">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button x-on:click="open = true" class="btn">Check availability</button>
                                <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50">
                                    <div x-show="open" x-transition.duration.300ms.opacity class="fixed inset-0 bg-black/50"></div>
                                    <div x-show="open" x-transition.duration.300ms x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4">
                                        <form method="POST" action="#" wire:submit.prevent='reservation' x-on:click.stop x-trap.noscroll.inert="open" class="relative max-w-xl w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4">
                                            <div class="text-center space-y-4">
                                                <i class='bx bx-info-circle text-8xl text-blue-600'></i>
                                                <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')">Choose Your Favorite Room</h2>
                                                <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                                                    If you want to see a list of what rooms we provide, you can see it <a class="underline" href="">here</a>.
                                                </p>
                                            </div>
                                            <div class="grid sm:grid-cols-2 gap-4 items-start">
                                                <div class="form-control">
                                                    <label for="check_in_modal" class="label">Check In</label>
                                                    <input class="input" type="date" name="check_in" id="check_in_modal" wire:model='check_in' wire:change='setCheckIn' min="{{ $minCheckIn }}">
                                                    @error('check_in')
                                                        <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-control">
                                                    <label for="check_out_modal" class="label">Check Out</label>
                                                    <input class="input" type="date" name="check_out" id="check_out_modal" wire:model='check_out' wire:change='setCheckOut' min="{{ $minCheckOut }}">
                                                    @error('check_out')
                                                        <span class="invalid">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-control">
                                                    <label for="selected_room" class="label">Room</label>
                                                    <select class="select" name="selected_room" id="selected_room" wire:change='setPrice' wire:model='selected_room'>

                                                    </select>

                                                </div>
                                                <div class="form-control">
                                                    <label for="total_rooms" class="label">Total Rooms</label>
                                                    <input class="input" type="number" name="total_rooms" id="total_rooms" wire:model='total_rooms' wire:keyup='setPrice'>

                                                </div>
                                            </div>

                                            <div class="flex space-x-2 justify-center">
                                                <button class="btn">
                                                    Confirm
                                                </button>
                                                <button type="button" wire:click="resetAll" x-on:click="open = false" class="btn btn-outline">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ open: false }">
                                <div x-show="open" @reservation:created.window="open = true" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50">
                                    <div x-show="open" x-transition.duration.300ms.opacity class="fixed inset-0 bg-black/50"></div>
                                    <div x-show="open" x-transition.duration.300ms x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4">
                                        <div x-on:click.stop x-trap.noscroll.inert="open" class="relative max-w-md w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4">
                                            <div class="text-center space-y-4">
                                                <i class='bx bx-check-circle text-8xl text-green-600'></i>
                                                <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')">Reservation Successfully</h2>
                                                <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                                                    You have successfully made a reservation! Wait for confirmation from the receptionist first. You can view your reservation data on the dashboard.
                                                </p>
                                            </div>
                                            <div class="flex space-x-2 justify-center">
                                                <a href="" class="btn">
                                                    View Reservations
                                                </a>
                                                <button type="button" x-on:click="open = false" class="btn btn-outline">
                                                    Okay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div x-data="{ open: false }" class="flex sm:flex-row flex-col sm:space-x-2 sm:space-y-0 space-y-2 sm:items-end">
                            <div class="form-control">
                                <label class="label" for="check_in">Check In</label>
                                <input min="2022-01-01" class="w-full input" id="check_in" type="date">
                            </div>
                            <div class="form-control">
                                <label class="label" for="check_out">Check Out</label>
                                <input min="2022-01-01" class="w-full input" id="check_out" type="date">
                            </div>
                            <button x-on:click="open = true" class="btn">Check availability</button>
                            <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50">
                                <div x-show="open" x-transition.duration.300ms.opacity class="fixed inset-0 bg-black/50"></div>
                                <div x-show="open" x-transition.duration.300ms x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4">
                                    <div x-on:click.stop x-trap.noscroll.inert="open" class="relative max-w-md w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4 text-center">
                                        <i class='bx bx-info-circle text-8xl text-blue-600'></i>
                                        <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')">Email Verification First</h2>
                                        <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                                            You must verify your email first after logging in!
                                        </p>
                                        <div class="flex space-x-2 justify-center">
                                            <a href="{{ route('verification.notice') }}" class="btn">
                                                Verification
                                            </a>
                                            <button type="button" x-on:click="open = false" class="btn btn-outline">
                                                Later
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div x-data="{ open: false }" class="flex sm:flex-row flex-col sm:space-x-2 sm:space-y-0 space-y-2 sm:items-end">
                        <div class="form-control">
                            <label class="label" for="check_in">Check In</label>
                            <input min="2022-01-01" class="w-full input" id="check_in" type="date">
                        </div>
                        <div class="form-control">
                            <label class="label" for="check_out">Check Out</label>
                            <input min="2022-01-01" class="w-full input" id="check_out" type="date">
                        </div>
                        <button x-on:click="open = true" class="btn">Check availability</button>
                        <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50">
                            <div x-show="open" x-transition.duration.300ms.opacity class="fixed inset-0 bg-black/50"></div>
                            <div x-show="open" x-transition.duration.300ms x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4">
                                <div x-on:click.stop x-trap.noscroll.inert="open" class="relative max-w-md w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4 text-center">
                                    <i class='bx bx-info-circle text-8xl text-blue-600'></i>
                                    <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')">Must Login First</h2>
                                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                                        You must login first before making a reservation!
                                    </p>
                                    <div class="flex space-x-2 justify-center">
                                        <a href="{{ route('login') }}" class="btn">
                                            Login
                                        </a>
                                        <button type="button" x-on:click="open = false" class="btn btn-outline">
                                            Later
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
    </section>
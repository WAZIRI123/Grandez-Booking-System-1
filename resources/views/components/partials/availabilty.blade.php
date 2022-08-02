<section class="">
                    <div x-data="{ open: false }" class="flex sm:flex-row flex-col sm:space-x-2 sm:space-y-0 space-y-2 sm:items-end">
                        <div class="form-control">
                            <label class="label" for="check_in">Check In</label>
                            <input min="{{$minCheck}}" class="w-full input" wire:model="check_in" type="date">
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
    </section>
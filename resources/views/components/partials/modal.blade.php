<div x-cloak  class="mt-6 inline" x-data="{ open: false }">
            <!-- Button (blue), duh! -->
            <a class="inline-block px-7  py-3 border-2 border-transparent bg-transparent 
            text-white font-medium text-sm leading-snug uppercase rounded-full focus:outline-none 
            focus:ring-0 transition duration-150 ease-in-out" @click="open = true"
             data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">
                Instructions</a>
            <!-- Dialog (full screen) -->
            <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);" x-show="open"  >
                <!-- A basic modal dialog with title, body and one button to close -->
                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-medium leading-6 text-gray-900 underline underline-offset-4">
                        Instruction how to use the system
                        </h3>
                        <div class="mt-2">
                                <ul class="list-decimal">
                                    <li class="text-black"> Signup by click Register Button On Top Left Side  </li>
                                    <li class="text-black">Login</li>
                                    <li class="text-black">Select the Package of interest in list below</li>
                                    <li class="text-black">Fill out Reservation form</li>
                                    <li class="text-black">Press your Order And checkout</li>
                                </ul>
                        </div>
                    </div>
                    <!-- One big close button.  --->
                    <div class="mt-5 sm:mt-6">
                        <span class="flex w-full rounded-md shadow-sm">
                            <button @click="open = false" class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                            Close 
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
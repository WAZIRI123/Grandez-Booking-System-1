<section wire:id="KI0QkpyiTf37MeygITfD" class="mt-28 mb-10">
    <div class="container px-8 mx-auto grid lg:grid-cols-12 gap-10">
        <main class="w-full space-y-6 lg:col-span-7">
            <div class="aspect-[16/9] overflow-hidden rounded-tl-2xl rounded-br-2xl relative z-10">
                <img src="http://127.0.0.1:8000/storage/img/package/package2.jpg" class="w-full block hover:scale-110 transition-all duration-300" alt="4 DAYS | 3 NIGHTS PACKAGE">
            </div>
            <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                <div class="flex items-center gap-1 text-gray-800">
                    <i class="bx bx-show"></i>
                    <span class="text-sm capitalize"></span>
                </div>
                <div class="flex items-center gap-1 text-gray-800">
                    <i class="bx bx-star"></i>
                    <span class="text-sm capitalize"></span>
                </div>
                <div class="flex items-center gap-1 text-gray-800">
                    <i class="bx bx-chat"></i>
                    <span class="text-sm capitalize"></span>
                </div>
                <div class="flex items-center gap-1 text-gray-800">
                    <i class="bx bx-money"></i>
                    <span class="text-sm capitalize"></span>
                </div>
            </div>
            <div class="prose sm:prose-base prose max-w-none prose-img:rounded-tr-xl prose-img:rounded-bl-xl prose-img:w-full">
                <h1>4 DAYS | 3 NIGHTS PACKAGE</h1>

                <blockquote>
                    explore zanzibar in 4 DAYS | 3 NIGHTS PACKAGE
                </blockquote>

                <div class="px-2 mb-12">
                    <!-- start::Background Color On Active -->
                    <h4 class="text-xl font-semibold mb-4">Package Description</h4>
                                        <div x-data="{ accordion1: false, accordion2: false, accordion3: false ,accordion4: false}">
                        <div class="border border-gray-300">
                            <button @click="
                                         accordion2 = false,
                                         accordion3 = false,
                                         accordion4 = false,
                                         accordion1 = !accordion1
                                     " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                Day 1: ARRIVAL
                            </button>
                            <div x-show="accordion1" x-collapse.duration.500ms="" style="display: none; height: 0px; overflow: hidden;" hidden="">
                                <div class="px-4 py-2">
                                    <p>Arrive Zanzibar airport/ferry and transfer to the hotel for check-in and overnight. </p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-gray-300">
                            <button @click="
                                         accordion1 = false,
                                         accordion3 = false,
                                         accordion4 = false,
                                         accordion2 = !accordion2
                                     " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                Day 2: STONE TOWN + PRISON ISLAND + SPICE TOUR
                            </button>
                            <div x-show="accordion2" x-collapse.duration.500ms="" style="display: none; height: 0px; overflow: hidden;" hidden="">
                                <div class="px-4 py-2">
                                    <p>At 9:00 am the driver/guide will take you to Stone Town Tour, this tour takes around 
                the historical culture and architectural important town of Zanzibar with a century 
                history. It includes a visit to former slave market site, now stands as Anglican church 
                built in 1871, town market, visit the Zanzibar Memorial Museum, Old Arab Fort, 
                Palace Museum, Old Indian dispensary (Cultural Center) to Maruhubi Palace Ruins 
                via Living Stone House.
                After stone town tour the guide will take you to meet the boat captain heading to 
                Prison Island home of Aldabra giant tortoises. Flanged by an amazing beach of reef 
                sanctuary, the island is ideal for swimming, snorkelling and beach relaxation.
                After Prison Island you will begin the trip to Spice farm tour. On this tour you will 
                see and taste the tropical fruits, spices plantation or plots in the island. A variety of 
                spices plants used as ornament, medicines, flowers, fruits and another interesting 
                flora can be seen during spice tour. After the tour, the driver will take you back to 
                your hotel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-gray-300">
                            <button @click="
                                         accordion1 = false,
                                         accordion2 = false,
                                         accordion4 = false,
                                         accordion3 = !accordion3
                                     " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                Day 3: FULL DAY SAFARI BLUE TOUR
                            </button>
                            <div x-show="accordion3" x-collapse.duration.500ms="" style="display: none; height: 0px; overflow: hidden;" hidden="">
                                <div class="px-4 py-2">
                                    <p>At 08:00 am the driver will pick you from the hotel to meet a boat captain at Fumba 
                town and you will start a trip heading to Safari Blue. In safari blue you will stay down 
                on the sandbank where you can relax and having sunbathing, swimming and 
                snorkelling. The professional guide will show you coral reef and different type of fish. 
                After snorkelling you will go to Kwale Island where you will have the buffet barbeque 
                lunch that will include fish, lobster, calamari, rice, and fried potatoes saved with 
                sauces all served hot from grilled, soft drinks such as soda, with beer. When the tides permit you will explore the natural blue lagoon found in the Kwale Island. The 
                lagoon is surrounded by mangrove forest and you will swim in the lagoon for 
                unforgettable memory. As a safari blue come to an end, the driver will take you back 
                to your hotel.</p>
                                </div>
                            </div>
                        </div>
                        <!-- more -->
                        <div class="border border-gray-300">
                            <button @click="
                                         accordion1 = false,
                                         accordion2 = false,
                                         accordion3 = false,
                                         accordion4 = !accordion4
                                     " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                Day 4: DEPARTURE
                            </button>
                            <div x-show="accordion4" x-collapse.duration.500ms="" style="display: none; height: 0px; overflow: hidden;" hidden="">
                                <div class="px-4 py-2">
                                    <p>Pick up from the hotel and transfer to the airport/ferry for departure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 5 days -->
                                    </div>
            </div>

        </main>
        <aside class="relative  lg:col-span-5 space-y-4 ">

            <div class="space-y-2">
                <h2 class="text-2xl text-gray-800 font-bold">Reservation</h2>
                <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                    Interested in this package? Hurry up and book before it's too late! <span class="font-bold"> package available.</span>
                </p>
            </div>
            <hr>
                        <div x-data="{ open: false }">
                <div class="grid gap-4">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="form-control">
                            <label for="start_date" class="label">Check In</label>
                            <input class="w-full input" type="date" name="start_date" min="2023-04-05" wire:model="start_date" id="start_date">
                                                    </div>
                        <div class="form-control">
                            <label for="total_package" class="label">Package Type</label>
                            <select class="w-full input" wire:change="setTotalPrice" wire:model="type" name="packageType" required="">
                                <option value="">
                                    Package Type
                                </option>
                                                                <option value="1">LUXURY PACKAGE</option>
                                                                <option value="2">BUDGET PACKAGE</option>
                                                                <option value="3">STANDARD PACKAGE</option>
                                                            </select>
                        </div>
                        <div class="form-control">
                            <label for="total_package" class="label" id="waziri" x-text="checked"></label>
                            <input class="w-full input" type="number" name="perPerson" wire:keyup="setTotalPrice" id="perPerson" value="" wire:model="perperson">
                        </div>
                        <!-- <div class="form-control">
                     <label for="activity" class="label">Activity</label>
                     <div class="grid  grid-cols-3 gap-4">
                                                      <div class="flex justify-between" x-data="{ open: false }">
                                 <div class="">
                                     <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-between rounded-tr-lg rounded-bl-lg py-2 px-4">
                                         <div><span @click="open=true">day 2 <i class=' bx bx-chevron-down  ' @click="open=true" x-show="!open"></i></span></div>
                                         <div><span @click="open=false" x-show="open"> <i class='  bx bx-minus  ' @click="open=false"></i></span></div>
                                     </div>
                                     <div class="checkdiv" >
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >prison island</span>
                                         <input  value="1" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.1.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="1">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >spice tour</span>
                                         <input  value="2" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.2.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="2">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >stone town tour</span>
                                         <input  value="3" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.3.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="3">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >swim with the turles</span>
                                         <input  value="4" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.4.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="4">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >kuza carve</span>
                                         <input  value="5" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.5.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="5">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >the rock restaurant</span>
                                         <input  value="6" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.6.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="6">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >jozani forest</span>
                                         <input  value="7" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.7.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="7">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >nakupenda sandbank</span>
                                         <input  value="8" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.8.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="8">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >donation</span>
                                         <input  value="9" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.9.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="9">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >rest</span>
                                         <input  value="10" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.10.2"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="10">
                                     </div>
                                                                          </div>
                                 </div>
                             </div>
                                                          <div class="flex justify-between" x-data="{ open: false }">
                                 <div class="">
                                     <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-between rounded-tr-lg rounded-bl-lg py-2 px-4">
                                         <div><span @click="open=true">day 3 <i class=' bx bx-chevron-down  ' @click="open=true" x-show="!open"></i></span></div>
                                         <div><span @click="open=false" x-show="open"> <i class='  bx bx-minus  ' @click="open=false"></i></span></div>
                                     </div>
                                     <div class="checkdiv" >
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >prison island</span>
                                         <input  value="1" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.1.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="1">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >spice tour</span>
                                         <input  value="2" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.2.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="2">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >stone town tour</span>
                                         <input  value="3" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.3.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="3">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >swim with the turles</span>
                                         <input  value="4" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.4.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="4">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >kuza carve</span>
                                         <input  value="5" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.5.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="5">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >the rock restaurant</span>
                                         <input  value="6" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.6.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="6">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >jozani forest</span>
                                         <input  value="7" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.7.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="7">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >nakupenda sandbank</span>
                                         <input  value="8" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.8.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="8">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >donation</span>
                                         <input  value="9" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.9.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="9">
                                     </div>
                                                                          <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                         <span >rest</span>
                                         <input  value="10" class="checkbox cursor-pointer"  
                                          wire:model="selectedActivity.10.3"
                                         type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="10">
                                     </div>
                                                                          </div>
                                 </div>
                             </div>
                                                  </div>
                 </div> -->
                    </div>
                                        <button x-on:click="open = true" class="btn" wire:click="lastpage">Booking</button>
                </div>
                <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50" aria-labelledby="modal-title-1">
                    <div x-show="open" x-transition.duration.300ms.opacity="" class="fixed inset-0 bg-black/50" style="display: none;"></div>
                    <div x-show="open" x-transition.duration.300ms="" x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4" style="display: none;">
                        <div x-on:click.stop="" x-trap.noscroll.inert="open" class="relative max-w-md w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4 text-center">
                            <i class="bx bx-info-circle text-8xl text-blue-600"></i>
                            <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')" id="modal-title-1">Must Login First</h2>
                            <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                                You must login first before making a reservation!
                            </p>
                            <div class="flex space-x-2 justify-center">
                                <a href="http://127.0.0.1:8000/login" class="btn">
                                    Login
                                </a>
                                <a href="http://127.0.0.1:8000/register" class="btn btn-outline">
                                    Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </aside>
            </div>

</section>
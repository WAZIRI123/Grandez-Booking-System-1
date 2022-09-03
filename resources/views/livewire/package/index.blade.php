   @push('jquery')
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   @endpush
   <section class="mt-28 mb-10">
       <div class="container px-8 mx-auto grid lg:grid-cols-12 gap-10">
           <main class="w-full space-y-6 lg:col-span-7">
               <div class="aspect-[16/9] overflow-hidden rounded-tl-2xl rounded-br-2xl relative z-10">
                   <img src="{{ asset("storage/$package->image") }}" class="w-full block hover:scale-110 transition-all duration-300" alt="{{ $package->name }}">
               </div>
               <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                   <div class="flex items-center gap-1 text-gray-800">
                       <i class='bx bx-show'></i>
                       <span class="text-sm capitalize"></span>
                   </div>
                   <div class="flex items-center gap-1 text-gray-800">
                       <i class='bx bx-star'></i>
                       <span class="text-sm capitalize"></span>
                   </div>
                   <div class="flex items-center gap-1 text-gray-800">
                       <i class='bx bx-chat'></i>
                       <span class="text-sm capitalize"></span>
                   </div>
                   <div class="flex items-center gap-1 text-gray-800">
                       <i class='bx bx-money'></i>
                       <span class="text-sm capitalize"></span>
                   </div>
               </div>
               <div class="prose sm:prose-base prose max-w-none prose-img:rounded-tr-xl prose-img:rounded-bl-xl prose-img:w-full">
                   <h1>{{ $package->name }}</h1>

                   <blockquote>
                       explore zanzibar in {{ $package->name }}
                   </blockquote>

                   <div class="px-2 mb-12">
                       <!-- start::Background Color On Active -->
                       <h4 class="text-xl font-semibold mb-4">Package Description</h4>
                       @if(ceil ($package->total_days)==3)
                       <div x-data="{ accordion1: false, accordion2: false, accordion3: false }">
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion1 = !accordion1
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 1: ARRIVAL
                               </button>
                               <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day1 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion3 = false,
                                            accordion2 = !accordion2
                                        " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 2: STONE TOWN + PRISON ISLAND + SPICE TOUR
                               </button>
                               <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day2 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = !accordion3
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 3: DEPARTURE
                               </button>
                               <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day3 !!}
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- 4 days -->
                       @elseif(ceil ($package->total_days)==4)
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
                               <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day1 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion3 = false,
                                            accordion4 = false,
                                            accordion2 = !accordion2
                                        " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 2: STONE TOWN + PRISON ISLAND + SPICE TOUR
                               </button>
                               <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day2 !!}
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
                               <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day3 !!}
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
                               <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day4 !!}
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- 5 days -->
                       @elseif(ceil ($package->total_days)==5)
                       <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false }">
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion1 = !accordion1
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 1: ARRIVAL
                               </button>
                               <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day1 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion3 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion2 = !accordion2
                                        " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 2: STONE TOWN + PRISON ISLAND + SPICE TOUR
                               </button>
                               <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day2 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                        accordion2 = false,
                                            accordion1 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion3 = !accordion3
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 3: FULL DAY MNEMBA ISLAND TOUR
                               </button>
                               <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day3 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                        accordion5 = false,
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion4 = !accordion4
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 4: FULL DAY SAFARI BLUE TOUR
                               </button>
                               <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day4 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion4 = false,
                                            accordion5 = !accordion5
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 5: DEPARTURE
                               </button>
                               <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day5 !!}
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- 6 -->
                       @elseif(ceil ($package->total_days)==6)
                       <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false}">
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion2 = false,
                                            accordion3 = false,
                                           
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion6 = false,
                                            accordion1 = !accordion1
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 1: ARRIVAL
                               </button>
                               <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day1 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion3 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion6 = false,
                                            accordion2 = !accordion2
                                        " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 2: KUZA CAVE + THE ROCK RESTAURANT
                               </button>
                               <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day2 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                        accordion2 = false,
                                            accordion1 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion6 = false,
                                            accordion3 = !accordion3
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 3: SWIM WITH THE TURTLES + SPICE TOUR
                               </button>
                               <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day3 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                        accordion5 = false,
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion4 = !accordion4
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 4: FULL DAY MNEMBA ISLAND TOUR
                               </button>
                               <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day4 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion4 = false,
                                            accordion5 = !accordion5
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 5: STONE TOWN + PRISON ISLAND + SPICE TOUR
                               </button>
                               <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day5 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion6 = !accordion6
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 6: DEPARTURE
                               </button>
                               <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day6 !!}
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- 7 -->
                       @elseif(ceil ($package->total_days)==7)
                       <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false,accordion7: false}">
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion7 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion6 = false,
                                            accordion1 = !accordion1
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 1: ARRIVAL
                               </button>
                               <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day1 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion3 = false,
                                            accordion4 = false,
                                            accordion7 = false,
                                            accordion5 = false,
                                            accordion6 = false,
                                            accordion2 = !accordion2
                                        " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 2: SCHOOL VISIT FOR DONATION + SWIM WITH THE TURTLES
                               </button>
                               <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day2 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                        accordion2 = false,
                                            accordion1 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion7 = false,
                                            accordion6 = false,
                                            accordion3 = !accordion3
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 3: FULL DAY MNEMBA ISLAND TOUR
                               </button>
                               <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day3 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                        accordion5 = false,
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion7 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion4 = !accordion4
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 4: STONE TOWN + JOZANI FOREST
                               </button>
                               <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day4 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion7 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion4 = false,
                                            accordion5 = !accordion5
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 5: PRISON ISLAND + NAKUPENDA SANDBANK
                               </button>
                               <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day5 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion7 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion6 = !accordion6
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 6: REST DAY
                               </button>
                               <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day6 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion7 = !accordion7
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion7 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 7: DEPARTURE
                               </button>
                               <div x-show="accordion7" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day7 !!}
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- end::Background Color On Active -->
                       @elseif(ceil ($package->total_days)==8)
                       <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false,accordion7: false,accordion8: false}">
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion8 = false,
                                            accordion7 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion6 = false,
                                            accordion1 = !accordion1
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 1: ARRIVAL
                               </button>
                               <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day1 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion3 = false,
                                            accordion4 = false,
                                            accordion8 = false,
                                            accordion7 = false,
                                            accordion5 = false,
                                            accordion6 = false,
                                            accordion2 = !accordion2
                                        " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 2: SCHOOL VISIT FOR DONATION + SWIM WITH THE TURTLES
                               </button>
                               <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day2 !!}
                                   </div>
                               </div>
                           </div>
                           <div class="border border-gray-300">
                               <button @click="
                                        accordion2 = false,
                                            accordion1 = false,
                                            accordion4 = false,
                                            accordion8 = false,
                                            accordion5 = false,
                                            accordion7 = false,
                                            accordion6 = false,
                                            accordion3 = !accordion3
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 3: FULL DAY MNEMBA ISLAND TOUR
                               </button>
                               <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day3 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                        accordion5 = false,
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion7 = false,
                                            accordion8 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion4 = !accordion4
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 4: STONE TOWN + JOZANI FOREST
                               </button>
                               <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day4 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion7 = false,
                                            accordion8 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion4 = false,
                                            accordion5 = !accordion5
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 5: PRISON ISLAND + NAKUPENDA SANDBANK
                               </button>
                               <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day5 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion7 = false,
                                            accordion8 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion6 = !accordion6
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 6: FULL DAY SAFARI BLUE TOUR
                               </button>
                               <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day6 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion8 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion7 = !accordion7
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion7 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 7: REST DAY
                               </button>
                               <div x-show="accordion7" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day7 !!}
                                   </div>
                               </div>
                           </div>
                           <!-- more -->
                           <div class="border border-gray-300">
                               <button @click="
                                            accordion1 = false,
                                            accordion2 = false,
                                            accordion3 = false,
                                            accordion6 = false,
                                            accordion7 = false,
                                            accordion4 = false,
                                            accordion5 = false,
                                            accordion8 = !accordion8
                                        " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion8 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                   Day 8: DEPARTURE
                               </button>
                               <div x-show="accordion8" x-cloak x-collapse.duration.500ms>
                                   <div class="px-4 py-2">
                                       {!! $package->day8 !!}
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- end::Background Color On Active -->

                       @endif
                   </div>
               </div>

           </main>
           <aside class="relative  lg:col-span-5 space-y-4 ">

               <div class="space-y-2">
                   <h2 class="text-2xl text-gray-800 font-bold">Reservation</h2>
                   <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                       {{ __("Interested in this package? Hurry up and book before it's too late! ") }}<span class="font-bold">{{ __(' package available.') }}</span>
                   </p>
               </div>
               <hr>
               @auth
               @if (auth()->user()->hasVerifiedEmail())
               @if (!auth()->user()->hasRole('user'))
               <div x-data="{ open: false }">
                   <div class="grid gap-4">
                       <div class="grid lg:grid-cols-1 sm:grid-cols-2 gap-4">
                           <div class="form-control">
                               <label for="start_date" class="label">{{ __('Check In') }}</label>
                               <input class="w-full input" type="date" name="start_date" min="{{$minStart_date}}" wire:model='start_date' id="start_date" />
                               @error('start_date')
                               <span class="invalid">{{ $message }}</span>
                               @enderror
                           </div>
                           <div class="form-control">
                               <label for="total_package" class="label">{{ __('Package Type') }}</label>
                               <select class="w-full input" wire:change="setTotalPrice" wire:model="type" name="packageType" required>
                                   <option value="">
                                       {{ __('Package Type') }}
                                   </option>
                                   @foreach($packageType as $type)
                                   <option value="{{ $type->id }}">{{$type->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-control">
                               <label for="total_package" class="label" id="waziri" x-text="checked">{{ __('Numberof People') }} </label>
                               <input class="w-full input" type="number" max="3" name="perPerson" wire:keyup="setTotalPrice" id="perPerson" value="" wire:model="perperson" />
                           </div>
                           <!-- <div class="form-control">
                        <label for="activity" class="label">{{ __('Activity') }}</label>
                        <div class="grid  grid-cols-3 gap-4">
                            @for($i = 2; $i < ceil($package->total_days); $i++)
                                <div class="flex justify-between" x-data="{ open: false }">
                                    <div class="">
                                        <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-between rounded-tr-lg rounded-bl-lg py-2 px-4">
                                            <div><span @click="open=true">day {{$i}} <i class=' bx bx-chevron-down  ' @click="open=true" x-show="!open"></i></span></div>
                                            <div><span @click="open=false" x-show="open"> <i class='  bx bx-minus  ' @click="open=false"></i></span></div>
                                        </div>
                                        <div class="checkdiv" >
                                        @foreach($packageActivities as $activity)
                                        <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                            <span >{{ $activity->name }}</span>
                                            <input  value="{{ $activity->id }}" class="checkbox cursor-pointer"  
                                             wire:model="selectedActivity.{{ $activity->id }}.{{ $i }}"
                                            type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="{{ $activity->id }}">
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endfor
                        </div>
                    </div> -->
                       </div>
                       @if ($start_date && $totalPrice && $perperson<4 && $perperson!='' && $perperson!=0)
                       <p class="tracking-wide text-gray-600 sm:text-base text-sm">Total price to pay for <span class="font-bold">{{ $package->name }}</span>
                           for total visitor of <span class="font-bold">{{$perperson}}</span> is <span class="font-bold"></span> <span class="font-bold">${{$totalPrice}}</span></p>
                       @endif
                       <button x-on:click="open = true" class="btn">{{ __('Booking') }}</button>
                   </div>
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
               user
               @else

               <form action="#" method="POST" wire:submit.prevent='reservation' class="grid gap-4" name="booking">
                   <div class="grid lg:grid-cols-1 sm:grid-cols-2 gap-4">
                       <div class="form-control">
                           <label for="start_date" class="label">{{ __('Check In') }}</label>
                           <input class="w-full input" type="date" name="start_date" min="{{$minStart_date}}" wire:model='start_date' id="start_date" />
                           @error('start_date')
                           <span class="invalid">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="form-control">
                           <label for="total_package" class="label">{{ __('Package Type') }}</label>
                           <select class="w-full input" wire:change="setTotalPrice" wire:model="type" name="packageType" required>
                               <option value="">
                                   {{ __('Package Type') }}
                               </option>
                               @foreach($packageType as $type)
                               <option value="{{ $type->id }}">{{$type->name}}</option>
                               @endforeach
                           </select>
                       </div>
                       <div class="form-control">
                           <label for="total_package" class="label" id="waziri" x-text="checked">{{ __('Numberof People') }} </label>
                           <input class="w-full input" type="number" max="3" name="perPerson" wire:keyup="setTotalPrice" id="perPerson" value="" wire:model="perperson" />
                       </div>
                       <!-- <div class="form-control">
                        <label for="activity" class="label">{{ __('Activity') }}</label>
                        <div class="grid  grid-cols-3 gap-4">
                            @for($i = 2; $i < ceil($package->total_days); $i++)
                                <div class="flex justify-between" x-data="{ open: false }">
                                    <div class="">
                                        <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-between rounded-tr-lg rounded-bl-lg py-2 px-4">
                                            <div><span @click="open=true">day {{$i}} <i class=' bx bx-chevron-down  ' @click="open=true" x-show="!open"></i></span></div>
                                            <div><span @click="open=false" x-show="open"> <i class='  bx bx-minus  ' @click="open=false"></i></span></div>
                                        </div>
                                        <div class="checkdiv" >
                                        @foreach($packageActivities as $activity)
                                        <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                            <span >{{ $activity->name }}</span>
                                            <input  value="{{ $activity->id }}" class="checkbox cursor-pointer"  
                                             wire:model="selectedActivity.{{ $activity->id }}.{{ $i }}"
                                            type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="{{ $activity->id }}">
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endfor
                        </div>
                    </div> -->
                   </div>
                   @if ($start_date && $totalPrice && $perperson<4 && $perperson!='' && $perperson!=0)
                   <p class="tracking-wide text-gray-600 sm:text-base text-sm">Total price to pay for <span class="font-bold">{{ $package->name }}</span>
                       for total visitors of <span class="font-bold">{{$perperson}}</span> is <span class="font-bold"></span> <span class="font-bold">${{$totalPrice}}</span></p>
                   @endif
                   <button class="btn">{{ __('Confirm') }}</button>
               </form>
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
                                   <a href="{{route('dashboard.user.index')}}" class="btn">
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
               <div x-data="{ open: false }">
                   <div class="grid gap-4">
                       <div class="grid lg:grid-cols-1 sm:grid-cols-2 gap-4">
                           <div class="form-control">
                               <label for="start_date" class="label">{{ __('Check In') }}</label>
                               <input class="w-full input" type="date" name="start_date" min="{{$minStart_date}}" wire:model='start_date' id="start_date" />
                               @error('start_date')
                               <span class="invalid">{{ $message }}</span>
                               @enderror
                           </div>
                           <div class="form-control">
                               <label for="total_package" class="label">{{ __('Package Type') }}</label>
                               <select class="w-full input" wire:model="type" name="packageType" required>
                                   <option value="">
                                       {{ __('Package Type') }}
                                   </option>
                                   @foreach($packageType as $type)
                                   <option value="{{ $type->id }}">{{$type->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-control">
                               <label for="total_package" class="label">{{ __('Numberof People') }} </label>
                               <input class="w-full input" type="number" max='3' name="perPerson" id="perPerson" value="" wire:model="perperson" />
                           </div>
                           <!-- <div class="form-control">
                            <label for="activity" class="label">{{ __('Activity') }}</label>
                            <div class="grid  grid-cols-2 gap-4">
                                @for($i = 1; $i < ceil($package->total_days)-1; $i++)
                                    <div class="flex justify-center">
                                        <div class="p-6 rounded-lg shadow-lg bg-white max-w-sm">
                                            <h2>day {{$i}}</h2>
                                            @foreach($packageActivities as $activity)
                                            <div class="flex justify-between">
                                                <span>{{ $activity->name }}</span>
                                                <input wire:model="selectedActivity.{{ $activity->id }}.{{ $i }}" value="{{ $activity->id }}" class="checkbox cursor-pointer" type="checkbox" name="selectedActivity[]" id="{{ $activity->id }}" x-on:keydown="">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endfor
                            </div>
                        </div> -->
                       </div>
                       @if ($start_date && $totalPrice && $perperson<4 && $perperson!='' && $perperson!=0)
                       <p class="tracking-wide text-gray-600 sm:text-base text-sm">Total price to pay for <span class="font-bold">{{ $package->name }}</span>
                           for total visitor of <span class="font-bold">{{$perperson}}</span> is <span class="font-bold"></span> <span class="font-bold">${{$totalPrice}}</span></p>
                       @endif
                       <button x-on:click="open = true" class="btn">{{ __('Booking') }}</button>
                   </div>
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
                                   <a href="" class="btn">
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
               <div x-data="{ open: false }">
                   <div class="grid gap-4">
                       <div class="grid lg:grid-cols-1 sm:grid-cols-2 gap-4">
                           <div class="form-control">
                               <label for="start_date" class="label">{{ __('Check In') }}</label>
                               <input class="w-full input" type="date" name="start_date" min="{{$minStart_date}}" wire:model='start_date' id="start_date" />
                               @error('start_date')
                               <span class="invalid">{{ $message }}</span>
                               @enderror
                           </div>
                           <div class="form-control">
                               <label for="total_package" class="label">{{ __('Package Type') }}</label>
                               <select class="w-full input" wire:change="setTotalPrice" wire:model="type" name="packageType" required>
                                   <option value="">
                                       {{ __('Package Type') }}
                                   </option>
                                   @foreach($packageType as $type)
                                   <option value="{{ $type->id }}">{{$type->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-control">
                               <label for="total_package" class="label" id="waziri" x-text="checked">{{ __('Numberof People') }} </label>
                               <input class="w-full input" type="number" name="perPerson" max="3" wire:keyup="setTotalPrice" id="perPerson" value="" wire:model="perperson" />
                           </div>
                           <!-- <div class="form-control">
                        <label for="activity" class="label">{{ __('Activity') }}</label>
                        <div class="grid  grid-cols-3 gap-4">
                            @for($i = 2; $i < ceil($package->total_days); $i++)
                                <div class="flex justify-between" x-data="{ open: false }">
                                    <div class="">
                                        <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-between rounded-tr-lg rounded-bl-lg py-2 px-4">
                                            <div><span @click="open=true">day {{$i}} <i class=' bx bx-chevron-down  ' @click="open=true" x-show="!open"></i></span></div>
                                            <div><span @click="open=false" x-show="open"> <i class='  bx bx-minus  ' @click="open=false"></i></span></div>
                                        </div>
                                        <div class="checkdiv" >
                                        @foreach($packageActivities as $activity)
                                        <div class="flex justify-between " x-show="open" x-data="{checked:[]}">
                                            <span >{{ $activity->name }}</span>
                                            <input  value="{{ $activity->id }}" class="checkbox cursor-pointer"  
                                             wire:model="selectedActivity.{{ $activity->id }}.{{ $i }}"
                                            type="checkbox" name="selectedActivity[]" x-ref="text" wire:click.stop="setTotalPrice" id="{{ $activity->id }}">
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endfor
                        </div>
                    </div> -->
                       </div>
                       @if ($start_date && $totalPrice && $perperson<4 && $perperson!='' && $perperson!=0)
                       <p class="tracking-wide text-gray-600 sm:text-base text-sm">Total price to pay fors <span class="font-bold">{{ $package->name }}</span>
                           for total visitor of <span class="font-bold">{{$perperson}}</span> is <span class="font-bold"></span> <span class="font-bold">${{$totalPrice}}</span></p>
                       @endif
                       <button x-on:click="open = true" class="btn" wire:click="lastpage">{{ __('Booking') }}</button>
                   </div>
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
                                   <a href="{{ route('register') }}" class="btn btn-outline">
                                       Register
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               @endauth
           </aside>
           @push('scripts')
           <script>
               function getvalue() {

               }
               $('.checkdiv :checkbox').change(function() {
                   var $cs = $(this).closest('.checkdiv').find(':checkbox:checked');

                   if ($cs.length > 3) {
                       this.checked = false;
                       alert('you can only select three Activity on this day!')
                   }
                   // if (this.id==5) {
                   //     $(this).closest('.checkdiv').find(':checkbox').not($(this)).prop('checked',false)
                   //     alert('This Activity is Full day ,So you can select itself only! ')
                   // }
                   // else{
                   //     $(this).closest('.checkdiv').find('#5').prop('checked',false)
                   // }
                   // if (this.id==8) {
                   //     $(this).closest('.checkdiv').find(':checkbox').not($(this)).prop('checked',false)
                   //     alert('This Activity is Full day ,So you can select itself only! for this Day');
                   // }
                   // else{
                   //     $(this).closest('.checkdiv').find('#8').prop('checked',false)
                   // }


               });
           </script>
           @endpush
       </div>

   </section>
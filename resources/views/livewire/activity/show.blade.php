<div>
    <section class="my-4 mt-28 mb-20" id="activity">
        <div class="container px-8 mx-auto space-y-10">
            <div class="space-y-2 flex flex-wrap items-center justify-between">
                <div>
                    <h1 class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Best Activies </h1>
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">We have a choice of different activities that you can choose according to your needs</p>
                </div>
            </div>
            <!-- <div class="bg-teal-100 border-t-4 border-orange-500 rounded-b text-orange-700 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 border-orange-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                            </svg></div>
                        <div>
                            <p class="font-bold"></p>
                            <p class="text-sm"></p>
                        </div>
                    </div>
                </div> -->
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-10">
                @foreach ($activities as $activity)
                <div class="space-y-4">
                    <div class="aspect-[5/4] rounded-tr-2xl rounded-bl-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300" src="{{ asset("storage/$activity->image") }}" alt="{{ $activity->name }}">
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold font-['poppins'] text-lg text-gray-800">{{ $activity->name }}</h3>
                        <a href="{{ route('activities.index',$activity->slug) }}" class="flex items-center gap-1 group">
                            <span class=" btn whitespace-nowrap text-sm  group-hover:underline">Book now</span>
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
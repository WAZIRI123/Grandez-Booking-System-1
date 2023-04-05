<div>
    <section class="my-4 mt-28 mb-20" id="package">
        <div class="container px-8 mx-auto space-y-10">
            <div class="space-y-2 flex flex-wrap items-center justify-between">
                <div>
                    <h1 class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Best Packagies </h1>
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">We have a choice of different packagies that you can choose according to your needs</p>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-10">
               
                @foreach ($packagies as $package)
               
                <div class="space-y-4">
                    <div class="aspect-[5/4] rounded-tr-2xl rounded-bl-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300" src="{{ asset("storage/$package->image") }}" alt="{{ $package->name }}">
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold font-['poppins'] text-lg text-gray-800">{{ $package->name }}</h3>
                        <a href="{{ route('packagies.index',$package->slug) }}" class="flex items-center gap-1 group">
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
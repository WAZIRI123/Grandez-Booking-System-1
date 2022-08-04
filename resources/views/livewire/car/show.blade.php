<div>
    <section class="my-4 mt-28 mb-20" id="car">
        <div class="container px-8 mx-auto space-y-10">
            <div class="space-y-2 flex flex-wrap items-center justify-between">
                <div>
                    <h1 class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Best Cars </h1>
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">We have a different kinds of cars that you can rent according to your needs</p>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-10">
                @foreach ($cars as $car)
                <div class="space-y-4">
                    <div class="aspect-[5/4] rounded-tr-2xl rounded-bl-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300" src="{{ asset("storage/$car->image") }}" alt="{{ $car->name }}">
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold font-['poppins'] text-lg text-gray-800">{{ $car->name }}</h3>
                        <a href="{{ route('cars.index',$car->slug) }}" class="flex items-center gap-1 group">
                            <span class=" btn whitespace-nowrap text-sm  group-hover:underline">Rent now</span>
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- table for transfer -->
            <hr>
            <div class="space-y-2 flex flex-wrap items-center justify-between">
                <div>
                    <h1 class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Best transfers </h1>
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">We have a different kinds of trips that you can book according to your needs</p>
                </div>
            </div>
            <div class='overflow-x-auto w-full'>
                <table class='mx-auto  w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                    <thead class="bg-gray-900">
                        <tr class="text-white text-left">
                            <th class="font-semibold text-sm uppercase px-6 py-4"> Trip </th>
                            <th class="font-semibold text-sm uppercase px-6 py-4"> Price </th>
                            <th class="font-semibold text-sm uppercase text-right px-6  py-4">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($transfers as $transfer)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p> {{$transfer->name}} </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-500 text-sm font-semibold tracking-wide">@convert($transfer->price)</p>
                            </td>
                            <td class=" px-2 text-right"> <a href="{{ route('transfers.index',$transfer->slug) }}" class="  group">
                                    <span class=" btn whitespace-nowrap text-sm  group-hover:underline">Book now</span>

                                </a> </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                  
                </table>
                {{ $transfers->links() }}
            </div>
        </div>

    </section>
</div>
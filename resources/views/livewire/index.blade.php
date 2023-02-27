<div>
    <x-partials.herosec />

      <!-- ====== Team Section Start -->
 <section class="pb-0 pt-2 lg:pb-0  bg-slate-100 mx-auto ">
    
    <div class="container mx-auto">
       <div class="space-y-2 mb-10  pb-5 flex flex-wrap items-center justify-center">
           <div class="pl-5">
               <h1 class="sm:text-5xl  text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full text-center">We Are </h1>

           </div>
           <p class="pl-3  antialiased  pr-6  border-l-2 border-slate-600 "> Tour Company established in 2019 to specialize on holiday explorations taking place in Zanzibar and prior booking of Safaris and Mountains located in Tanzania Mainland. </p>
       </div>
   </div>
     </section>
     <!-- ====== Team Section End -->
    <section class="my-4 " id="package">
        <div class="container px-8 mx-auto space-y-10">
            <div class="space-y-2 flex flex-wrap items-center justify-between">
                <div>
                    <h1 class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Best Services </h1>
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">We offer the best services to accompany your rest</p>
                </div>
                <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">Please Select Your Caterory of Interest Below to Reserve Your Service! </p>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                <!-- start -->
                <div class="space-y-4">
                    <div class="bg-gray-200 text-2xl text-gray-800 font-bold  flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                        <h1>Activities</h1>
                    </div>
                    <div class="aspect-[8/6]  w-full rounded-tl-2xl rounded-br-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300" src="{{ asset('storage/img/packages/packagesImg-10.png') }}" alt="">
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
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <h3 class="font-bold font-['poppins'] text-lg text-gray-800">Activies</h3>
                            <a href="{{ route('activities.show') }}" class="flex items-center gap-1 group">
                                <span class="text-sm text-gray-600 group-hover:underline">See more</span>
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- end -->
                <!-- start -->
                <div class="space-y-4">
                    <div class="bg-gray-200 text-2xl text-gray-800 font-bold  flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                        <h1>Packagies</h1>
                    </div>
                    <div class="aspect-[8/6]  w-full rounded-tl-2xl rounded-br-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300" src="{{ asset('storage/img/packages/packagesImg-12.jpg') }}" alt="">
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
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <h3 class="font-bold font-['poppins'] text-lg text-gray-800">Packagies</h3>
                            <a href="{{ route('packagies.show') }}" class="flex items-center gap-1 group">
                                <span class="text-sm text-gray-600 group-hover:underline">See more</span>
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end -->
                <!-- start -->
                <div class="space-y-4">
                <div class="bg-gray-200 text-2xl text-gray-800 font-bold  flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
           <h1>Transfers & Car Rental</h1>
            </div>
                    <div class="aspect-[8/6]  w-full rounded-tl-2xl rounded-br-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300" src="{{ asset('storage/img/packages/packagesImg-11.png') }}" alt="">
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
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <h3 class="font-bold font-['poppins'] text-lg text-gray-800">Transfers & Car Rental</h3>
                            <a href="{{ route('cars.show') }}" class="flex items-center gap-1 group">
                                <span class="text-sm text-gray-600 group-hover:underline">See more</span>
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Team Section Start -->
 <section class=" pt-20 pb-10 lg:pt-[50px] lg:pb-20">
    
 <div class="container mx-auto">
    <div class="space-y-2 mb-10 flex flex-wrap items-center justify-center">
        <div>
            <h1 class="sm:text-5xl  text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Team </h1>
        </div>
    </div>
<div class="-mx-4 flex flex-wrap">
<x-our-team  image='storage/img/Team/justin shirima.JPG' head="Managing Director " based="Based in Zanzibar"
name="Justin SHIRIMA."
description="Develop and maintain research and development programmes to ensure that the company remains at the forefront in the industry.
"/>
<x-our-team  image='storage/img/Team/ibra.JPG'
 head="Operations Manager"
name=" Ibrahim MWINYIMSA."
based="Based in Zanzibar and Mainland"
 description="Oversee all the core operations, budgets, project delivery and strategy, resourcing and financial processes of Grandezza Tours and Travel."/>
<x-our-team  image='storage/img/Team/brenda.JPG' 
head="Community Manager" 
name="Brenda Severin."
based="Based in Austria"
description="Responsible for the growth and maintnance of Grandezza community."/>
<x-our-team  image='storage/img/Team/aminata.JPG' head="Community Manager"
name=" Aminata SIDIBE"
based="Based in France"
 description="Responsible for the growth and maintnance of Grandezza community."/>
<x-our-team  image='storage/img/Team/evelyne.JPG'
 head="Sales Executive" 
 name="Evelyne MKENDA."
 based="Based in England"
 description="Organising sales visits, attending trade exhibitions, conferences and meetings, negotiating contracts and package..."/>
<x-our-team  image='storage/img/Team/kiwale.JPG' 
name=" Ladislaus KIWALE. "
based="Based in Zanzibar"
head="General Manager" description="Provide leadership and direction to a team of office staff, guides and drivers. To manage the everyday operation of the business."/>
<x-our-team  image='storage/img/Team/waziri.PNG' 
head="Web Developer"
name="Waziri Ally."
based="Based in Tanzania Mainland"
 description="Responsible for developing designing and/or  Managing websites for Grandezza company."/>
    </div>
    </div>
  </section>
  <!-- ====== Team Section End -->
</div>
{{-- test --}}


  
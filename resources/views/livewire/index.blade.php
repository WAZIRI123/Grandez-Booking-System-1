<div x-data="{showPackage: false,
    showHeroSection: true,
    showTeam: false,isLoading:false}"
<x-partials.herosec  />
<div x-show="isLoading" class="spinner-container">
<div class="spinner"></div>
</div>
<section class="my-1 relative " id="package" x-cloak x-show="showPackage && !isLoading" >

    <section class="my-4 relative " id="package" x-show="showPackage" x-transition>

        <div class="container px-8 mx-auto space-y-10">
            
            <div class="space-y-2 flex flex-wrap items-center justify-between">
                
                <div>
                    <h1 class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Best Services </h1>
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">We offer the best services to accompany your rest</p>
                </div>
                <div @click="showPackage = false; showHeroSection=true; showTeam = false;" class="btn bg-gray-200 hover:bg-gray-300  text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">Back </p>
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
<div class="container px-8 mx-auto space-y-5">
    
    <div class="space-y-2 flex flex-wrap items-center justify-between">
        
        <div>
            <h1 class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Best Services </h1>
            <p class="tracking-wide text-gray-600 sm:text-base text-sm">We offer the best services to accompany your rest</p>
        </div>
        <div @click="showPackage = false; showHeroSection=true; showTeam = false;" class="  btn bg-gray-200 hover:bg-gray-300  text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
            <p class="tracking-wide text-gray-600 sm:text-base text-sm">Back </p>
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
<section class=" pt-20 pb-10 lg:pt-[50px] lg:pb-20" x-show="showTeam" x-transition>
 <div class="container mx-auto">
    <div class="space-y-2 flex flex-wrap items-center justify-between">
                
        <div>
            <h1 class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Best Services </h1>
            <p class="tracking-wide text-gray-600 sm:text-base text-sm">We offer the best services to accompany your rest</p>
        </div>
        <div @click="showPackage = false; showHeroSection=true; showTeam = false;" class="btn bg-gray-200 hover:bg-gray-300  text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
            <p class="tracking-wide text-gray-600 sm:text-base text-sm">Back </p>
        </div>
      
    </div>
<div class="-mx-4  flex flex-wrap">
    
<x-our-team  image='storage/img/Team/justin shirima.JPG' head="Managing Director " based="Based in Zanzibar"
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
<section class="pt-1 pb-10 lg:pt-[1px] lg:pb-5"  x-cloak  x-show="showTeam && !isLoading">
<div class="container mx-auto">
<div class="space-y-2 ">
<h2 class="sm:text-3xl  text-center text-gray-800 text-3xl font-['poppins'] font-black capitalize relative">
<span class="absolute bottom-0 transform ">
<span class="block w-10 h-1 bg-gray-800 rounded-full"></span>
</span>
<span class="ml-3">About Us</span>
</h2>


<p class="text-center text-gray-600 text-lg font-serif leading-relaxed">
We are a local tour company established in 2019. Specialized in providing travel services including the best excursions in Zanzibar island and Tanzania mainland.
</p>

</div>
</div>
</section>
<!-- ====== Team Section Start -->
<section class=" pt-0 pb-10 lg:pt-[0px] lg:pb-20" x-cloak  x-show="showTeam && !isLoading" >

<div class="container mx-auto 
">
 <div class="space-y-2 flex flex-wrap items-center justify-between  mb-5 lg:mx-12 lg:px-6
 ">
        
<div>
    <h1 class="sm:text-3xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">Our Team</h1>
</div>
<div @click="showPackage = false; showHeroSection=true; showTeam = false;" class="mr-4 btn
bg-gray-200 hover:bg-gray-300  text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
    <p class="tracking-wide text-gray-600 sm:text-base text-sm">Back </p>
</div>

</div>

<div class="-mx-4 flex flex-wrap">
<x-our-team  image='storage/img/Team/shirima1.JPG' head="Managing Director " based="Based in Zanzibar"
name="Justin SHIRIMA."
description="DevelopS and maintain research and development programmes to ensure that the company remains at the forefront in the industry.
">
<div class="bg-green-500 rounded-lg p-4">
  <a href="https://www.instagram.com/zanzibarmagics_/?hl=en" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
                        <path 
                        d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 
                        2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 
                        1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959
                        2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 
                        0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                    </svg><span>zanzibarmagics_</span>
                    </a>
                    
                              <a href="https://wa.me/" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
<svg width="24px" height="24px" viewBox="0 0 24 24" role="img" 
xmlns="http://www.w3.org/2000/svg"><title>WhatsApp icon</title><path 
d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94
1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 
4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 
0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882
11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg><span>+255 719280165</span>
                    </a>
                    
</div>


</x-our-team>
<x-our-team  image='storage/img/Team/Kiwale3.JPG' 
name=" Ladislaus KIWALE. "
based="Based in Zanzibar"
head="General Manager" description="ProvideS leadership and direction to a team of office staff, guides and drivers. To manage the everyday operation of the business."> 
<div class="bg-green-500 rounded-lg p-4">
  <a href="https://www.instagram.com/zanzibar_scenery/?hl=en" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
                        <path 
                        d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 
                        2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 
                        1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959
                        2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 
                        0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                    </svg><span>zanzibar_scenery</span>
                    </a>
                    
                              <a href="https://wa.me/" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
<svg width="24px" height="24px" viewBox="0 0 24 24" role="img" 
xmlns="http://www.w3.org/2000/svg"><title>WhatsApp icon</title><path 
d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94
1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 
4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 
0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882
11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg><span>+255 746602042</span>
                    </a>
                    
</div></x-our-team>

<x-our-team  image='storage/img/Team/ibra.JPG'
head="Operations Manager"
name=" Ibrahim MWINYIMSA."
based="Based in Zanzibar and Mainland"
description="OverseeS all the core operations, budgets, project delivery and strategy, resourcing and financial processes of Grandezza Tours and Travel.">
<div class="bg-green-500 rounded-lg p-4">
  <a href="https://www.instagram.com/zanzibarholiday_/?hl=en" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
                        <path 
                        d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 
                        2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 
                        1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959
                        2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 
                        0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                    </svg><span>zanzibarholiday_</span>
                    </a>
                    
                              <a href="https://wa.me/" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
<svg width="24px" height="24px" viewBox="0 0 24 24" role="img" 
xmlns="http://www.w3.org/2000/svg"><title>WhatsApp icon</title><path 
d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94
1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 
4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 
0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882
11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg><span>+255 769832373</span>
                    </a>
                    
</div>

</x-our-team>

<x-our-team  image='storage/img/Team/aminata2.jpg' head="Community Manager"
name=" Aminata SIDIBE" 
based="Based in France"
description="Responsible for the growth and maintnance of Grandezza community."> 
<div class="bg-green-500 rounded-lg p-4">
  <a href="https://www.instagram.com/blacktravelzanzibar_/?hl=en" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
                        <path 
                        d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 
                        2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 
                        1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959
                        2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 
                        0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                    </svg><span>zanzibarholiday_</span>
                    </a>
                    
                              <a href="https://wa.me/" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
<svg width="24px" height="24px" viewBox="0 0 24 24" role="img" 
xmlns="http://www.w3.org/2000/svg"><title>WhatsApp icon</title><path 
d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94
1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 
4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 
0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882
11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg><span>+255 603445568</span>
                    </a>
                    
</div></x-our-team>
<x-our-team  image='storage/img/Team/evelyne3.jpg'
head="Sales Executive" 
name="Evelyne MKENDA."
based="Based in England"
description="Organising sales visits, attending trade exhibitions, conferences and meetings, negotiating contracts and package..."> <div class="bg-green-500 rounded-lg p-4">
  <a href="https://www.instagram.com/blacktravelzanzibar_/?hl=en" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
                        <path 
                        d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 
                        2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 
                        1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959
                        2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 
                        0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                    </svg><span>zanzibarholiday_</span>
                    </a>
                    
                              <a href="https://wa.me/" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
<svg width="24px" height="24px" viewBox="0 0 24 24" role="img" 
xmlns="http://www.w3.org/2000/svg"><title>WhatsApp icon</title><path 
d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94
1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 
4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 
0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882
11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg><span>+44 7768014245</span>
                    </a>
                    
</div></x-our-team>

<x-our-team  image='storage/img/Team/brenda1.JPG' 
head="Community Manager" 
name="Brenda SEVERIN." 
based="Based in Austria"
description="Responsible for the growth and maintnance of Grandezza community."> <div class="bg-green-500 rounded-lg p-4">
  <a href="https://www.instagram.com/stylediaryofanelegantlady/?hl=en" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
                        <path 
                        d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 
                        2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 
                        1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959
                        2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 
                        0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                    </svg><span>stylediaryofane....</span>
                    </a>
                    
                              <a href="https://wa.me/" target="_blank" rel="noopener noreferrer"
  class="flex items-center justify-center  ">
<svg width="24px" height="24px" viewBox="0 0 24 24" role="img" 
xmlns="http://www.w3.org/2000/svg"><title>WhatsApp icon</title><path 
d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94
1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 
4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 
0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882
11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg><span>+33 603 445 568     </span>
                    </a>
                    
</div></x-our-team>


<x-our-team  image='storage/img/Team/waziri.jpg' 
head="Web Developer"
name="Waziri Ally."
based="Based in Tanzania Mainland"
 description="Responsible for developing designing and/or  Managing websites for Grandezza company."/>
    </div>
    </div>
  </section>
  <!-- ====== Team Section End -->

{{-- test --}}


<script>
@push('scripts')

    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdown', () => ({
            showPackage: false,
            showHeroSection: true,
            showTeam: false,
            showToggle() {
                this.showPackage =! this.showPackage 
                this.showTeam = false
                this.showHeroSection = false
            },
            showTeamToggle() {
                this.showTeam =! this.showTeam 
                this.showPackage = false
                this.showHeroSection = false
            }
        }))
    })

@keyframes spin {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
@endpush
</script>



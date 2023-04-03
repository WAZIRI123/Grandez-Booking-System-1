<div>
<div x-data="dropdown">
    <x-partials.herosec />

    <section class="my-4 relative " id="package" x-show="showPackage" x-transition>

        <div class="container gnz_review_card_grid px-8 mx-auto space-y-10">

            <div class="space-y-2 space-x-12 flex flex-wrap items-center justify-between  ">

                <div class="gnz-card-header-desc">
                    <h1
                        class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">
                        Our Best Services </h1>
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">We offer the best services to accompany
                        your rest</p>
                </div>
                <div  @click="showPackage = false; showHeroSection=true; showTeam = false;"
                    class="  btn bg-gray-200 hover:bg-gray-300  text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg gnz-card-header_button">
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">Back </p>
                </div>

            </div>
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                <!-- start -->
                <div class="space-y-4">
                    <div
                        class="bg-gray-200 text-2xl text-gray-800 font-bold  flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                        <h1>Activities</h1>
                    </div>
                    <div class="aspect-[8/6]  w-full rounded-tl-2xl rounded-br-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300"
                            src="{{ asset('storage/img/packages/packagesImg-10.png') }}" alt="">
                    </div>
                    <div
                        class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
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
                    <div
                        class="bg-gray-200 text-2xl text-gray-800 font-bold  flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                        <h1>Packagies</h1>
                    </div>
                    <div class="aspect-[8/6]  w-full rounded-tl-2xl rounded-br-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300"
                            src="{{ asset('storage/img/packages/packagesImg-12.jpg') }}" alt="">
                    </div>
                    <div
                        class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
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
                    <div
                        class="bg-gray-200 text-2xl text-gray-800 font-bold  flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                        <h1>Transfers & Car Rental</h1>
                    </div>
                    <div class="aspect-[8/6]  w-full rounded-tl-2xl rounded-br-2xl overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-all duration-300"
                            src="{{ asset('storage/img/packages/packagesImg-11.png') }}" alt="">
                    </div>
                    <div
                        class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
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
<div class="mx-auto" >
<section class="gnz_about_us pt-20 pb-10 lg:pt-[10px] lg:pb-20"  x-show="showTeam" x-transition>
        <div class="container mx-auto">
            <div class="space-y-2 flex flex-wrap items-center justify-between">

                <div class="gnz-card-header-desc">
                    <h1
                        class="sm:text-5xl text-gray-800 text-3xl font-['poppins'] font-black capitalize after:content-[''] after:block after:w-10 after:h-1 after:bg-gray-800 after:rounded-full">
                        Our Best Services </h1>
                    <p class="tracking-wide text-gray-600 sm:text-base text-sm">We offer the best services to accompany
                        your rest</p>
                </div>
                <div class="gnz-card-header_button">
                    <div @click="showPackage = false; showHeroSection=true; showTeam = false;"
                        class=" btn bg-gray-200 hover:bg-gray-300  text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                        <p class="tracking-wide text-gray-600 sm:text-base text-sm">Back </p>
                    </div>
                </div>

            </div>
            <div class="gnz_review_card_grid my-slider grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 sm:grid-cols-2 gap-3 lg:gap-2 mx-4 place-items-center ">

                <x-our-team image='storage/img/Team/justin shirima.JPG' head="Managing Director "
                    based="Based in Zanzibar" name="Justin SHIRIMA."
                    description="Develop and maintain research and development programmes to ensure that the company remains at the forefront in the industry.
" />
                <x-our-team image='storage/img/Team/ibra.JPG' head="Operations Manager" name=" Ibrahim MWINYIMSA."
                    based="Based in Zanzibar and Mainland"
                    description="Oversee all the core operations, budgets, project delivery and strategy, resourcing and financial processes of Grandezza Tours and Travel." />
                <x-our-team image='storage/img/Team/brenda.JPG' head="Community Manager" name="Brenda Severin."
                    based="Based in Austria"
                    description="Responsible for the growth and maintnance of Grandezza community." />
                <x-our-team image='storage/img/Team/aminata.JPG' head="Community Manager" name=" Aminata SIDIBE"
                    based="Based in France"
                    description="Responsible for the growth and maintnance of Grandezza community." />
                <x-our-team image='storage/img/Team/evelyne.JPG' head="Sales Executive" name="Evelyne MKENDA."
                    based="Based in England"
                    description="Organising sales visits, attending trade exhibitions, conferences and meetings, negotiating contracts and package..." />
                <x-our-team image='storage/img/Team/kiwale.JPG' name=" Ladislaus KIWALE. " based="Based in Zanzibar"
                    head="General Manager"
                    description="Provide leadership and direction to a team of office staff, guides and drivers. To manage the everyday operation of the business." />
                <x-our-team image='storage/img/Team/waziri.PNG' head="Web Developer" name="Waziri Ally."
                    based="Based in Tanzania Mainland"
                    description="Responsible for developing designing and/or  Managing websites for Grandezza company." />
            </div>
        </div>

        <div class="gnz_heading">
            <h6>Our Traveller Say</h6>
            <h2>What Our Traveller Say About Us</h2>
        </div>
        <div class=" gnz_review_card_grid my-slider grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 grid-rows-1 sm:grid-cols-2 gap-3 lg:gap-0 mx-4 place-items-center ">
            {{-- item1 --}}
            <div class="item relative rounded-lg overflow-hidden lg:w-[280px]">
              <div class="gnz_reviews_box_fig">
                <img class="w-full h-full object-cover object-center rounded-full" src="https://picsum.photos/600/400" alt="Card image">
              </div>
              <div class="gnz_reviews_details">
                <h3>Kery & Downey</h3>
                <h5>FRANCE</h5>
                <p>I had an amazing 6 days trip and would definitely recommend this tour company to anyone traveling
                  to Tanzania who wants to see serengeti animals and climb Mount Kilimanjaro. We learnt about
                  Tanzania Hakuna Mtaka.</p>
              </div>
            </div>
          
            {{-- item2 --}}
            <div class="item relative rounded-lg overflow-hidden  lg:w-[280px]">
              <div class="gnz_reviews_box_fig">
                <img class="w-full h-full object-cover object-center rounded-full" src="https://picsum.photos/600/400" alt="Card image">
              </div>
              <div class="gnz_reviews_details">
                <h3>Kery & Downey</h3>
                <h5>FRANCE</h5>
                <p>I had an amazing 6 days trip and would definitely recommend this tour company to anyone traveling
                  to Tanzania who wants to see serengeti animals and climb Mount Kilimanjaro. We learnt about
                  Tanzania Hakuna Mtaka.</p>
              </div>
            </div>
            {{-- item1 --}}
            <div class="relative rounded-lg overflow-hidden lg:w-[280px]">
                <div class="gnz_reviews_box_fig">
                    <img class="w-full h-full  object-cover object-center rounded-full"
                        src="https://picsum.photos/600/400" alt="Card image">
                </div>
                <div class=" gnz_reviews_details">
                    <h3>Kery & Downey</h3>
                    <h5>FRANCE</h5>
                    <p>I had an amazing 6 days trip and would definitely recommend this tour company to anyone traveling
                        to Tanzania who wants to see serengeti animals and climb Mount Kilimanjaro. We learnt about
                        Tanzania Hakuna Mtaka.</p>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- ====== Team Section End
   
    
    -->

    <section id="mklbl_wyus_sec">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="mklbl_heading_cnt why-us">
                    <h2>Why Travel With Us?</h2>
                    <h6>Mkalibala Adventures</h6>
                </div>
                <div class="mklbl_wyus_sec_card">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="mklbl_wyus_box">
                                <div class="mklbl_wyus_box_fig text-center">
                                    <img src="assets/images/personalised-service.jpg">
                                </div>
                                <div class="mklbl_wyus_box_dtls">
                                    <h4>Personalized Service</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="mklbl_wyus_box">
                                <div class="mklbl_wyus_box_fig">
                                    <img src="assets/images/dedicated-team.jpg">
                                </div>
                                <div class="mklbl_wyus_box_dtls">
                                    <h4>Dedicated Team</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="mklbl_wyus_box">
                                <div class="mklbl_wyus_box_fig">
                                    <img src="assets/images/best-price.jpg">
                                </div>
                                <div class="mklbl_wyus_box_dtls">
                                    <h4>Best Price Promise</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="mklbl_wyus_box">
                                <div class="mklbl_wyus_box_fig">
                                    <img src="assets/images/safety-priority.jpg">
                                </div>
                                <div class="mklbl_wyus_box_dtls">
                                    <h4>Safety is Priority</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
    {{-- test --}}


    <script>
        @push('scripts')

            document.addEventListener('alpine:init', () => {
                Alpine.data('dropdown', () => ({
                    showPackage: false,
                    showHeroSection: true,
                    showTeam: false,
                    showToggle() {
                        this.showPackage = !this.showPackage
                        this.showTeam = false
                        this.showHeroSection = false
                    },
                    showTeamToggle() {
                        this.showTeam = !this.showTeam
                        this.showPackage = false
                        this.showHeroSection = false
                    }
                }))
            })
        @endpush
    </script>

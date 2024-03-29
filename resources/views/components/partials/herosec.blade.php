      <!-- Container for demo purpose -->
      <div x-show="showHeroSection" x-transition>

        <!-- Section: Design Block -->
        <section class="mb-0 overflow-hidden">
          <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
            <div class="px-6 w-full flex flex-wrap items-center justify-between">
              <div class="flex items-center">
  
              </div>

            </div>
          </nav>

          <div class=" relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%; background-image:url('../storage/img/packages/packagesImg-5.png');
          height: 500px;">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.75);">
              <div class="flex justify-center items-center h-full">
                <div class="text-center text-white px-6 md:px-12">
                  <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-4">Welcome to the Grandezza's <br /><span>Booking System</span></h1>
                                    <h2 class="text-2xl md:text-2xl tracking-tight mb-2 text-white neon-text animate-fade-in font-dancing" style="font-family: 'Dancing Script !important', cursive; font-style:italic">Create unforgettable memories with us</h2>
                  <div class="flex flex-col items-center my-8 space-y-4 md:space-y-0 md:flex-row md:justify-center md:space-x-8 lg:space-x-12">
                    <button @click="showPackage = true; showHeroSection=false;  showTeam = false;" class="inline-block px-7 py-3 border-2 bg-blue-700 border-gray-200 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:bg-blue-900 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" >
                      Our Packages
                    </button>
                    <button class="inline-block px-7 py-3 border-2 bg-blue-700 border-gray-200 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:bg-blue-900  focus:outline-none focus:ring-0 transition duration-150 ease-in-out" @click="showPackage = false;  showHeroSection=false; showTeam = true;">
                      More About Us
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: Design Block -->
                @push('custom-style')

          @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@300;500;800&display=swap');
   
        .neon-text {
          text-shadow:
            0 0 5px rgba(255,255,255,1),
            0 0 10px rgba(255,255,255,1),
            0 0 20px rgba(255,255,255,1),
            0 0 40px rgba(0,255,255,1),
            0 0 80px rgba(0,255,255,0.5),
            0 0 90px rgba(0,255,255,0.5),
            0 0 100px rgba(0,255,255,0.5);
        }
      
        @keyframes fade-in {
          0% {
            opacity: 0;
          }
          100% {
            opacity: 1;
          }
        }
      
        .animate-fade-in {
          animation: fade-in 1s ease-out;
        }
        @endpush
      </div>

      <!-- Container for demo purpose -->
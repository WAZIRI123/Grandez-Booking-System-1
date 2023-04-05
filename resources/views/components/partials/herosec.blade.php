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
        <svg viewBox="0 0 1920 250" xmlns="http://www.w3.org/2000/svg" style="background: #d0d5df;">
          <path fill="rgb(20, 20, 50, 0.05)" d="M1920 250H0V0s126.707 78.536 349.975 80.05c177.852 1.203 362.805-63.874 553.803-63.874 290.517 0 383.458 57.712 603.992 61.408 220.527 3.696 278.059-61.408 412.23-17.239"></path>
          <path fill="rgb(20, 20, 50, 0.08)" d="M1920 144s-467.917 116.857-1027.243-17.294C369.986 1.322 0 45.578 0 45.578V250h1920V144z"></path>
          <path fill="var(--black)" d="M0 195.553s208.547-75.581 701.325-20.768c376.707 41.908 520.834-67.962 722.545-67.962 222.926 0 311.553 83.523 496.129 86.394V250H0v-54.447z"></path>
      </svg>
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
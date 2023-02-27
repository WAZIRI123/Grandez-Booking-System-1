@props(['image','head','description','name' ,'based'])

    {{-- <div class="w-full px-4 md:w-1/2 xl:w-1/4">
      <div class="mx-auto mb-10 w-full max-w-[370px]">
        <div class="relative overflow-hidden rounded-lg">
          <img
            src="{{ asset($image) }}"
            alt="image"
            class=" rounded-full"
          /> --}}
          <!-- ====== Cards Section Start -->

        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="mb-10 overflow-hidden rounded-lg bg-white">
            <img
              src="{{ asset($image) }}"
              alt="image"
              class=" aspect-[6/6] h-1/2 w-1/2 mx-auto overflow-hidden rounded-full"
            />
            <div class=" p-8 text-center sm:p-9 md:p-7 xl:p-9">
              <h2 class="text-dark hover:text-primary mb-4 block text-xl font-normal sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                {{$name}}
              </h2>
              <h3 class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                {{$head}}
              </h3>
              <p class="text-body-color mb-7 text-base leading-relaxed">
                {{$description}}
              </p>
              <a
                href="javascript:void(0)"
                class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white"
              >
                {{ $based }}
              </a>
            </div>
          </div>
        </div>

  <!-- ====== Cards Section End -->
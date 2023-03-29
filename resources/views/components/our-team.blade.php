@props(['image', 'head', 'description', 'name', 'based','phone'])

<div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/3">
  <div class="mx-auto mb-10 w-full max-w-[300px]">
    <div class="relative overflow-hidden rounded-lg bg-blue-100 shadow-lg">
      <div class="rounded-t-lg overflow-hidden bg-gray-100">
        <img src="{{ asset($image) }}" alt="{{ $name }}" class="w-full object-cover aspect-w-1 aspect-h-1 transition duration-500 ease-in-out transform hover:scale-110">
      </div>
      <div class="p-4 text-center">
        <h2 class="text-dark hover:text-primary mb-2 text-sm font-medium">{{ $name }}</h2>
        <h3 class="text-dark hover:text-primary mb-2 text-xs font-semibold">{{ $head }}</h3>
        <p class="text-body-color mb-4 text-xs leading-relaxed">{{ $description }}</p>
        <a href="#" class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-1 px-4 text-xs font-medium transition hover:text-white">{{ $based }}</a>

                            {{ $slot }}
      </div>
    </div>
  </div>
</div>

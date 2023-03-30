@props(['image', 'head', 'description', 'name', 'based','phone'])

<div class="item relative rounded-lg overflow-hidden lg:w-80">
  <div class="gnz_reviews_box_fig">
    <img class="w-full h-full object-cover object-center rounded-full" src="{{ asset($image) }}" alt="{{ $name }}">
  </div>
  <div class="gnz_reviews_details">
    <h3>{{ $name }}</h3>
    <h5>{{ $head }}</h5>
    <p>{{ $description }}</p>
    {{ $slot }}
  </div>
</div>




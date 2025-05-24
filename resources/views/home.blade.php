<x-layout>
  <section class="text-center py-32 px-4">
    <h1 class="text-4xl font-bold mb-4">Explore Tournaments</h1>
    <p class="text-lg mb-10 text-gray-300">Choose your favorite game and join the competition!</p>
    <!-- Cards Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">   
      <!-- Game Card -->
      @foreach ($games as $game)
        <a href="#{{ $game->slug }}" class="group block overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition">
          <img src="{{ asset('assets/images/'.$game->logo) }}" alt="{{ $game->name }}" class="w-full h-40 object-contain p-4 group-hover:scale-105 transition-transform duration-300">
          <div class="py-2 text-sm bg-gray-900 text-white font-semibold">{{ $game->name }}</div>
        </a>
      @endforeach 
    </div>
  </section>
</x-layout>
<x-layout>
  
  <section class="text-center py-42 px-4">
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
  <section class="bg-gray-50 py-16 px-6">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-2xl font-semibold text-gray-800 mb-10">Trusted by</h2>
  
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center justify-center">
        <img src="/images/partners/ubisoft.svg" alt="Ubisoft" class="h-8 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/eva.svg" alt="EVA" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/moonton.svg" alt="Moonton" class="h-8 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/wargaming.svg" alt="Wargaming.net" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/riot.svg" alt="Riot Games" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/microsoft.svg" alt="Microsoft" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/redbull.svg" alt="Red Bull" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/pgl.svg" alt="PGL" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/webedia.svg" alt="Webedia" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/logitech.svg" alt="Logitech" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/stc.svg" alt="STC" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
        <img src="/images/partners/vitality.svg" alt="Vitality" class="h-6 mx-auto grayscale hover:grayscale-0 transition" />
      </div>
    </div>
  </section>
  <x-footer></x-footer>
</x-layout>
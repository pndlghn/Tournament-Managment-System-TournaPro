@props(['game'])

<div class="relative w-full h-64 bg-gray-900 overflow-hidden">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60 bg-cover">
      <!-- Background Image -->
      <img src="{{ asset('assets/images/banner_games/' . $game->banner) }}" alt="banner {{ $game->banner }}" class="bg-cover bg-opacity-50">
    </div>
      
  
    <!-- Content (Center Title & Icon) -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white">
      <img src="{{ asset('assets/images/logo_games/' . $game->logo) }}" alt="{{ $game->name }}" class="w-20 h-20 mb-2" />
      <h1 class="text-3xl font-bold">{{ $game->name }}</h1>
    </div>
  
    <!-- Bottom Navigation -->
    <div class="relative z-10 flex gap-6 px-6 py-2 text-sm font-semibold text-white bg-black bg-opacity-50">
      <a href="#" class="text-blue-400 border-b-2 border-blue-400 pb-1">Overview</a>
      <a href="#" class="hover:text-blue-400">Tournaments</a>
    </div>
    
  </div> 
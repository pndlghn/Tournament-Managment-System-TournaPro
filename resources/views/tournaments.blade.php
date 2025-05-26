<x-layout>
    <div class="relative w-full h-64 bg-gray-900 overflow-hidden">
        <!-- Background Image -->
        <img src="/path/to/e2337ca1-b5a9-481a-8650-2780c0d5602e.png" alt="League of Legends" class="absolute inset-0 w-full h-full object-cover opacity-80" />
      
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
      
        <!-- Content (Center Title & Icon) -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white">
          <img src="/path/to/your-icon.svg" alt="LoL Icon" class="w-10 h-10 mb-2" />
          <h1 class="text-3xl font-bold">League Of Legends</h1>
        </div>
      
        <!-- Bottom Navigation -->
        <div class="relative z-10 flex gap-6 px-6 py-2 text-sm font-semibold text-white bg-black bg-opacity-50">
          <a href="#" class="text-blue-400 border-b-2 border-blue-400 pb-1">Overview</a>
          <a href="#" class="hover:text-blue-400">Tournaments</a>
        </div>
      </div>  

      <div class="max-w-7xl mx-auto px-4 py-6">
        <!-- Tabs -->
        <div class="flex items-center space-x-8 border-b border-gray-700 pb-4">
          <button class="text-blue-400 font-semibold border-b-2 border-blue-400 pb-1">Overview</button>
          <button class="text-gray-400 hover:text-white">Tournaments</button>
        </div>
    
        <!-- Heading and View All -->
        <div class="flex justify-between items-center mt-6 mb-4">
          <h2 class="text-2xl font-bold">Open tournaments</h2>
          <a href="#" class="text-blue-400 hover:underline">View all</a>
        </div>
    
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          
          <!-- Card -->
          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
            <img src="https://via.placeholder.com/400x200" alt="Tournament" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Qualy 4 - VGC - FORTNITE</h3>
              <p class="text-sm text-gray-400">May 31, 2025 🇪🇸</p>
              <p class="text-green-400 mt-2">Registration open</p>
              <p class="text-sm text-gray-400">64 Players</p>
            </div>
          </div>
    
          <!-- Duplicate the card as needed -->
          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
            <img src="https://via.placeholder.com/400x200" alt="Tournament" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Fortnite</h3>
              <p class="text-sm text-gray-400">Jun 2, 2025 🇧🇪</p>
              <p class="text-green-400 mt-2">Registration open</p>
              <p class="text-sm text-gray-400">100 Players</p>
            </div>
          </div>
    
          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
            <img src="https://via.placeholder.com/400x200" alt="Tournament" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Recharge Solo LN</h3>
              <p class="text-sm text-gray-400">Jun 7, 2025</p>
              <p class="text-green-400 mt-2">Registration open</p>
              <p class="text-sm text-gray-400">20 Players</p>
            </div>
          </div>
    
          <!-- Add more cards as needed -->
    
        </div>
      </div>
    
</x-layout>
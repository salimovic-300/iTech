<!-- resources/views/partials/navbar.blade.php -->
<nav class="bg-gray-800 text-white shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
          <!-- Logo -->
          <div class="flex-shrink-0">
              <a href="/" class="text-xl font-bold text-white hover:text-gray-300">
                  InnovaTech
              </a>
          </div>

          <!-- Navigation Links -->
         
          <div class="hidden md:flex space-x-4">
              <a href="{{ route('accueil') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                  Accueil
              </a>
              <a href="{{route ('notre_projet') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                Notre projet
            </a>
              <a href="/about" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                  À propos
              </a>
              <a href="/services" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                  Services
              </a>
              <a href="/contact" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                  Contact
              </a>
              <a href="/contact" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                login
            </a>
            <a href="/contact" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                register
            </a>
           
            
          </div>

          <!-- Bouton Mobile -->
          <div class="-mr-2 flex md:hidden">
              <button id="mobile-menu-button" class="text-gray-400 hover:text-white focus:outline-none focus:text-white">
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"/>
                  </svg>
              </button>
          </div>
      </div>
  </div>

  <!-- Menu Mobile -->
  <div id="mobile-menu" class="md:hidden hidden px-2 pt-2 pb-3 space-y-1 bg-gray-700">

      <a href="{{route('accueil')  }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
          Accueil
      </a>
      <a href="{{route ('notre_projet') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
        Notre projet
    </a>
      <a href="/about" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
          À propos
      </a>
      <a href="/services" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
          Services
      </a>
      <a href="/contact" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
          Contact
      </a>
      <a href="/contact" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
        login
    </a>
    <a href="/contact" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
        register
    </a>
  </div>
</nav>

<script>
  // Script pour activer/désactiver le menu mobile
  document.getElementById('mobile-menu-button').addEventListener('click', function () {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
  });
</script>

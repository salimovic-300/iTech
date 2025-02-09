<!-- resources/views/partials/navbar.blade.php -->
<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="/" class="text-xl font-bold text-gray-800 hover:text-blue-500">
            InnovaTech
          </a>
        </div>
  
        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-4">
          <a href="{{ route('accueil') }}" class="text-gray-800 hover:text-blue-500 px-3 py-2 text-sm">
            Accueil
          </a>
          <a href="{{ route('notre_projet') }}" class="text-gray-800 hover:text-blue-500 px-3 py-2 text-sm">
            Notre projet
          </a>
          <a href="/about" class="text-gray-800 hover:text-blue-500 px-3 py-2 text-sm">
            À propos
          </a>
          <a href="/services" class="text-gray-800 hover:text-blue-500 px-3 py-2 text-sm">
            Services
          </a>
          <a href="/contact" class="text-gray-800 hover:text-blue-500 px-3 py-2 text-sm">
            Contact
          </a>
          <a href="/login" class="text-gray-800 hover:text-blue-500 px-3 py-2 text-sm">
            Login
          </a>
          <a href="/register" class="text-gray-800 hover:text-blue-500 px-3 py-2 text-sm">
            Register
          </a>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
  
        <!-- Bouton Mobile -->
        <div class="md:hidden">
          <button id="mobile-menu-button" class="text-gray-800 hover:text-blue-500 focus:outline-none">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  
    <!-- Menu Mobile -->
    <div id="mobile-menu" class="md:hidden hidden px-2 pt-2 pb-3 space-y-1 bg-white border-t">
      <a href="{{ route('accueil') }}" class="text-gray-800 hover:text-blue-500 block px-3 py-2 text-sm">
        Accueil
      </a>
      <a href="{{ route('notre_projet') }}" class="text-gray-800 hover:text-blue-500 block px-3 py-2 text-sm">
        Notre projet
      </a>
      <a href="/about" class="text-gray-800 hover:text-blue-500 block px-3 py-2 text-sm">
        À propos
      </a>
      <a href="/services" class="text-gray-800 hover:text-blue-500 block px-3 py-2 text-sm">
        Services
      </a>
      <a href="/contact" class="text-gray-800 hover:text-blue-500 block px-3 py-2 text-sm">
        Contact
      </a>
      <a href="/login" class="text-gray-800 hover:text-blue-500 block px-3 py-2 text-sm">
        Login
      </a>
      <a href="/register" class="text-gray-800 hover:text-blue-500 block px-3 py-2 text-sm">
        Register
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
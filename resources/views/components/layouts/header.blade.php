<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
  <div class="hidden md:block">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex justify-between items-center h-20">
        <div class="flex-shrink-0" id="small">
          <a href="/">
            <img src="/imagess/Models Realm.png" alt="Logo" class="w-36">
          </a>
        </div>

        <div class="flex-grow">
          <div class="flex justify-center">
            <div class="bg-[#ecebeb] bg-opacity-14 px-8 py-2">
              <ul class="flex space-x-16">
                <li><a href="/" class="hover:text-gray-700">Home</a></li>
                <li><a href="/blogs" class="hover:text-gray-700">Blogs</a></li>
                <li><a href="/models" class="hover:text-gray-700">Models</a></li>
                <li><a href="/about" class="hover:text-gray-700">About Us</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="flex items-center space-x-4">
          <div class="relative">
            <a href="/search">
            <button id="searchButton" class="bg-[#ecebeb] p-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </button>
            </a>
            <div class="md:hidden absolute right-0 top-0 h-full">
              <input type="text" id="searchInput" class="h-full w-0 overflow-hidden bg-white border border-gray-300 outline-none transition-all duration-300" placeholder="Search...">
              <select id="dropdown" class="absolute right-3 top-1/2 -translate-y-1/2 border border-gray-300 bg-white p-1 hidden">
                <option value="Models">Models</option>
                <option value="Blogs">Blogs</option>
              </select>
            </div>
          </div>

          <a href="/contact" class="bg-[#ecebeb] px-4 py-2  transition-colors">
            Contact us
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="md:hidden">
    <div class="px-4 py-1">
      <div class="flex items-center justify-between mt-[-34px]">
        <div>
          <a href="/">
            <img src="/imagess/Models Realm.png" alt="Logo" class="w-32">
          </a>
        </div>

        <div class="flex items-center space-x-4">
          <a href="/search">
          <button class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
          </a>

          <button id="mobileMenuBtn" class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>

      
    </div>

    <div id="mobileMenu" class="hidden mt-[-23px] bg-white">
      <div class="border-t mx-auto">
        <a href="/" class="block px-4 py-3 border-b hover:bg-gray-50">Home</a>
        <a href="/blogs" class="block px-4 py-3 border-b hover:bg-gray-50">Blogs</a>
        <a href="/models" class="block px-4 py-3 border-b hover:bg-gray-50">Models</a>
        <a href="/about" class="block px-4 py-3 border-b hover:bg-gray-50">About Us</a>
        <a href="/contact" class="block px-4 py-3 border-b hover:bg-gray-50">Contact us</a>
      </div>
    </div>
  </div>
</nav>

<script>
document.addEventListener("scroll", function() {
  const navbar = document.getElementById("navbar");
  
  if (window.scrollY > 50) {
    navbar.classList.add("bg-white", "shadow-md", "h-20");
    navbar.classList.remove("bg-transparent", "h-16");
  } else {
    navbar.classList.remove("bg-white", "shadow-md", "h-12");
    navbar.classList.add("bg-transparent", "h-16");
  }
});

  // const searchButton = document.getElementById('searchButton');
// const searchInput = document.getElementById('searchInput');
// const dropdown = document.getElementById('dropdown');
let isSearchOpen = false;

// searchButton.addEventListener('click', () => {
//   isSearchOpen = !isSearchOpen;
//   if (isSearchOpen) {
//     searchInput.style.width = '240px';
//     searchInput.style.padding = '0 40px 0 12px';
//     searchInput.focus();
//     dropdown.classList.remove('hidden');
//   } else {
//     searchInput.style.width = '0';
//     searchInput.style.padding = '0';
//     dropdown.classList.add('hidden');
//   }
// });

// dropdown.addEventListener('change', function() {
//   searchInput.value = this.value;
// });


function handleSearch() {
  const searchQuery = searchInput.value.trim();
  const category = dropdown.value;
  
  if (searchQuery) {
    let url = '';
    
    if (category === 'Models') {
      url = `/search/models?query=${encodeURIComponent(searchQuery)}`;
    } else if (category === 'Blogs') {
      url = `/search/blogs?query=${encodeURIComponent(searchQuery)}`;
    }
    
    window.location.href = url;
  }
}

searchInput.addEventListener('keypress', function(event) {
  if (event.key === 'Enter') {
    event.preventDefault();
    handleSearch();
  }
});



const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');
const mobileSearchBtn = document.getElementById('mobileSearchBtn');
const mobileSearchBar = document.getElementById('mobileSearchBar');

mobileMenuBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
  if (!mobileSearchBar.classList.contains('hidden')) {
    mobileSearchBar.classList.add('hidden');
  }
});

// mobileSearchBtn.addEventListener('click', () => {
//   mobileSearchBar.classList.toggle('hidden');
//   if (!mobileMenu.classList.contains('hidden')) {
//     mobileMenu.classList.add('hidden');
//   }
// });
</script>
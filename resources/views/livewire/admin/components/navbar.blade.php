<nav class="bg-blue-700 text-white p-4 flex justify-between items-center">
    <div class="flex items-center space-x-6">
        <button onclick="toggleSidebar()" class="text-white hover:text-gray-300">
            <i class="fas fa-bars"></i>
        </button>
        <nav class="flex space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">Contact</a>
        </nav>
    </div>
    <div class="flex items-center space-x-6">
        <div class="relative">
            <input type="search" placeholder="Search"
                class="p-2 bg-blue-800 rounded text-white placeholder-white focus:outline-none focus:ring focus:ring-blue-700">
            <button class="absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <button onclick="toggleDropdown('notifications')" class="hover:text-gray-300">
            <i class="fas fa-bell"></i>
        </button>
        <button onclick="toggleDropdown('profile')" class="hover:text-gray-300">
            <i class="fas fa-user"></i> Sample User
        </button>
    </div>
</nav>
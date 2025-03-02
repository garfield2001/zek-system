<!-- Sidebar Container -->
<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside id="sidebar"
        class="w-64 bg-blue-900 text-white p-4 pt-0 fixed left-0 top-0 bottom-0 transform transition-all duration-300 ease-in-out z-100">

        <!-- Sidebar Title (Logo) -->
        <h2 id="sidebarTitle" class="text-xl font-semibold text-white flex items-center py-4 mb-4 px-2">
            <img src="public\images\alexander-jones.jpg" alt="Logo" class="w-10 h-10 rounded-full mr-3">
            Zek Admin
        </h2>

        <!-- User Profile Section -->
        <div class="border-b border-blue-700 py-4 mb-4 px-2">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/alexander-jones.jpg') }}" alt="User Image"
                    class="w-10 h-10 rounded-full">
                <div class="text-left">
                    <p id="adminName" class="text-lg font-semibold">James Pierce</p>
                    <small id="role" class="text-gray-500">Administrator</small>
                </div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="relative my-4">
            <input type="search" placeholder="Search"
                class="w-full p-2 bg-blue-800 rounded text-white placeholder-white focus:outline-none focus:ring focus:ring-blue-700 pr-10" />
            <button class="absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <!-- Sidebar Navigation -->
        <nav>
            <ul>
                <!-- Dashboard Section Title -->
                <li class="px-4 py-2 text-gray-400 text-sm font-semibold">Main</li>
                <!-- Dashboard Link -->
                <li id="dashboardText" class="nav-link">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-gauge"></i>
                        Dashboard
                    </a>
                </li>

                <!-- User Management Section Title -->
                <li class="px-4 py-2 text-gray-400 text-sm font-semibold">Manage Catering</li>
                <!-- Users Link -->
                <li id="usersText" class="nav-link">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-box"></i>
                        Reservations
                    </a>
                </li>
                <li id="usersText" class="nav-link">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-box"></i>
                        Catering Packages
                    </a>
                </li>
                <li id="usersText" class="nav-link">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-box"></i>
                        Add-Ons
                    </a>
                </li>
                <li class="px-4 py-2 text-gray-400 text-sm font-semibold">Manage Catering</li>
                <li id="usersText" class="nav-link">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-users"></i>
                        Staffs
                    </a>
                </li>

                <!-- Reports Section Title -->
                <li class="px-4 py-2 text-gray-400 text-sm font-semibold">Reports</li>
                <!-- Reports Link -->
                <li id="reportsText" class="nav-link">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fas fa-file-alt"></i>
                        Reports
                    </a>
                </li>

                <!-- Settings Section Title -->
                <li class="px-4 py-2 text-gray-400 text-sm font-semibold">Settings</li>
                <!-- Settings Link -->
                <li id="settingsText" class="nav-link">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-gear"></i>
                        Settings
                    </a>
                </li>

                <!-- Logout Section Title -->
                <li class="px-4 py-2 text-gray-400 text-sm font-semibold">Account</li>
                <!-- Logout Link -->
                <li id="logoutText" class="nav-link">
                    <a href="#" wire:click.prevent='logout' class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </aside>



    <!-- Main Content -->
    <div id="main-content" class="flex-1 ml-64 transition-all duration-300 ease-in-out z-10">
        <header class="bg-blue-700 text-white p-4 flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <button onclick="toggleSidebar()" class="text-white hover:text-gray-300">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="#" class="hover:text-gray-300">Home</a>
                <a href="#" class="hover:text-gray-300">Contact</a>
                <div class="relative">
                    <input type="search" placeholder="Search"
                        class="p-2 bg-blue-800 rounded text-white placeholder-white focus:outline-none focus:ring focus:ring-blue-700 pr-10" />
                    <button class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="flex items-center space-x-6">
                <div class="relative">
                    <button onclick="toggleDropdown('notifications')" class="hover:text-gray-300">
                        <i class="fas fa-bell"></i>
                    </button>
                    <div id="notifications"
                        class="absolute right-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg hidden">
                        <div class="p-4 border-b">Notifications</div>
                        <div class="p-4">No new notifications</div>
                    </div>
                </div>
                <div class="relative">
                    <button onclick="toggleDropdown('profile')" class="hover:text-gray-300">
                        <i class="fas fa-user"></i> Sample User
                    </button>
                    <div id="profile"
                        class="absolute right-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg hidden">
                        <a href="#" class="block p-4 hover:bg-gray-200">View Profile</a>
                        <a href="#" onclick="confirmLogout()" class="block p-4 hover:bg-gray-200">Logout</a>
                    </div>
                </div>
            </div>
        </header>
        <main class="flex-1 p-6 overflow-auto">
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-semibold text-blue-900 mb-4">Dashboard Overview</h2>
                <p class="text-gray-700">Welcome to the Admin Dashboard!</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-blue-600 text-white p-6 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">
                    <h3 class="text-xl font-bold">Users</h3>
                    <p class="text-lg">150</p>
                </div>
                <div
                    class="bg-green-600 text-white p-6 rounded-lg shadow-lg hover:bg-green-700 transition duration-300">
                    <h3 class="text-xl font-bold">Revenue</h3>
                    <p class="text-lg">₱50,000</p>
                </div>
                <div
                    class="bg-yellow-600 text-white p-6 rounded-lg shadow-lg hover:bg-yellow-700 transition duration-300">
                    <h3 class="text-xl font-bold">Orders</h3>
                    <p class="text-lg">75</p>
                </div>
                <div
                    class="bg-violet-600 text-white p-6 rounded-lg shadow-lg hover:bg-yellow-700 transition duration-300">
                    <h3 class="text-xl font-bold">Reservations</h3>
                    <p class="text-lg">75</p>
                </div>
            </div>
        </main>
    </div>
</div>

{{-- <script>
    let removedElements = [];  // Array to store removed elements temporarily

    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.getElementById("main-content");

        sidebar.classList.toggle("w-64"); // Full width of sidebar
        sidebar.classList.toggle("w-20"); // Smaller width of sidebar
        mainContent.classList.toggle("ml-64"); // Full margin for main content
        mainContent.classList.toggle("ml-20"); // Reduced margin for main content

        // Find all elements with text that you want to toggle
        const sidebarTextElements = [
            document.getElementById('sidebarTitle'),
            document.getElementById('adminName'),
            document.getElementById('role'),
            document.getElementById('dashboardText'),
            document.getElementById('usersText'),
            document.getElementById('reportsText'),
            document.getElementById('settingsText'),
            document.getElementById('logoutText')
        ];

        // If the sidebar is collapsed, remove the text elements
        if (sidebar.classList.contains("w-20")) {
            sidebarTextElements.forEach(element => {
                if (element) {
                    removedElements.push(element);  // Store removed elements
                    element.remove();  // Remove the element from the DOM
                }
            });
        } else {
            // If the sidebar is expanded, re-add the elements
            removedElements.forEach(element => {
                if (element && !document.contains(element)) {
                    sidebar.appendChild(element);  // Re-append removed elements
                }
            });
            removedElements = [];  // Clear the array after re-adding
        }
    }

</script> --}}
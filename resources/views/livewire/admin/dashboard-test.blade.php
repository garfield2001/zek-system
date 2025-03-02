<!-- Sidebar Container -->
<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside id="sidebar"
        class="w-64 bg-blue-900 text-white p-4 fixed inset-y-0 left-0 transform transition-transform duration-300 ease-in-out z-100">
        <header class="flex items-center py-4 mb-4 px-2">
            <img src="{{asset('storage/admin/logo.png')}}" alt="Logo" class="w-8 h-8 rounded-full mr-3">
            <h1 class="text-xl font-semibold">Zek Admin</h1>
        </header>

        <section class="border-b border-blue-700 py-4 mb-4 px-2">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('storage/admin/alexander-jones.jpg') }}" alt="User Image"
                    class="w-8 h-8 rounded-full">
                <div>
                    <h2 class="text-lg font-semibold">James Pierce</h2>
                    <p class="text-sm text-gray-400">Administrator</p>
                </div>
            </div>
        </section>

        <div class="relative my-4">
            <label for="sidebar-search" class="sr-only">Search</label>
            <input id="sidebar-search" type="search" placeholder="Search"
                class="w-full p-2 bg-blue-800 rounded text-white placeholder-white focus:outline-none focus:ring focus:ring-blue-700 pr-10">
            <button class="absolute inset-y-0 right-0 flex items-center pr-3">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <nav>
            <ul>
                <li class="text-sm font-semibold text-gray-400 px-4 py-2">Main</li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-gauge"></i> Dashboard
                    </a>
                </li>
                <li class="text-sm font-semibold text-gray-400 px-4 py-2">Manage Catering</li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-box"></i> Reservations
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-box"></i> Catering Packages
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-box"></i> Add-Ons
                    </a>
                </li>
                <li class="text-sm font-semibold text-gray-400 px-4 py-2">Manage Staff</li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-users"></i> Staffs
                    </a>
                </li>
                <li class="text-sm font-semibold text-gray-400 px-4 py-2">Reports</li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fas fa-file-alt"></i> Reports
                    </a>
                </li>
                <li class="text-sm font-semibold text-gray-400 px-4 py-2">Settings</li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-gear"></i> Settings
                    </a>
                </li>
                <li class="text-sm font-semibold text-gray-400 px-4 py-2">Account</li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main id="main-content"
        class="flex-1 bg-gray-100 ml-64 transition-all duration-300 ease-in-out z-10 flex flex-col min-h-screen">
        <header class="bg-blue-700 text-white p-4 flex justify-between items-center">
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
        </header>

        <!-- Content Section with flex-grow -->
        <section class="p-6 flex-grow">
            <header class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-semibold text-blue-900 mb-4">Dashboard Overview</h2>
                <p class="text-gray-700">Welcome to the Admin Dashboard!</p>
            </header>
            
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
                    class="bg-violet-600 text-white p-6 rounded-lg shadow-lg hover:bg-violet-700 transition duration-300">
                    <h3 class="text-xl font-bold">Reservations</h3>
                    <p class="text-lg">75</p>
                </div>
            </div>
        </section>

        <!-- Footer will always stick to the bottom -->
        < <footer class="bg-gray-200 text-slate-600 p-2 text-center mt-auto">
            &copy; 2025 Zek Admin. All rights reserved.
            </footer>
    </main>
</div>



{{--
<script>
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
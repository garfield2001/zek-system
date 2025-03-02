<aside id="sidebar"
    class="w-64 bg-blue-900 text-white p-4 fixed inset-y-0 left-0 transform transition-transform duration-300 ease-in-out z-100">
    <header class="flex items-center py-4 mb-4 px-2">
        <img src="{{asset('storage/admin/logo.png')}}" alt="Logo" class="w-8 h-8 rounded-full mr-3">
        <h1 class="text-xl font-semibold">Zek Admin</h1>
    </header>

    <section class="border-b border-blue-700 py-4 mb-4 px-2">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('storage/admin/alexander-jones.jpg') }}" alt="User Image" class="w-8 h-8 rounded-full">
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
                <a wire:navigate="/dashboard" href="{{ route('show.dashboard.page') }}"
                    class="block px-4 py-2 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </a>
            </li>
            <li class="text-sm font-semibold text-gray-400 px-4 py-2">Manage Catering</li>
            <li>
                <a wire:navigate="/catering_packages" href="{{ route('show.catering-packages.page') }}"
                    class="block px-4 py-2 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-box"></i> Catering Packages
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-box"></i> Reservations
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
                <a wire:navigate="/logout" href="{{ route('logout.user') }}"
                    class="block px-4 py-2 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </li>
        </ul>
    </nav>
</aside>
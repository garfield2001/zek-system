<nav class="flex items-center justify-between bg-gray-100 px-6 py-2 text-black">
    <div class="flex items-center space-x-8">
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-700 hover:cursor-pointer hover:text-gray-800">
            <i class="fas fa-bars"></i>
        </button>
        <nav class="flex space-x-4">
            <a wire:navigate="/dashboard" href="{{ route('show.dashboard.page') }}"
                class="text-gray-600 hover:text-gray-800">
                Home
            </a>
            <a wire:navigate="/contact-me" href="{{ route('show.contact-me.page') }}"
                class="text-gray-600 hover:text-gray-800">
                Contact
            </a>
        </nav>
        <div class="relative">
            <label for="sidebar-search" class="sr-only">Search</label>
            <input type="search" placeholder="Search"
                class="w-48 rounded-full bg-gray-200 p-2 pr-10 pl-4 text-gray-800 placeholder-gray-600 focus:ring-2 focus:ring-gray-400 focus:outline-none" />
            <button class="absolute inset-y-0 right-0 flex items-center pr-4">
                <i class="fas fa-search text-gray-600"></i>
            </button>
        </div>
    </div>
    <div class="flex items-center space-x-4">
        <!-- Notification Button -->
        <button
            class="flex h-10 w-10 items-center justify-center rounded-full border border-gray-300 hover:cursor-pointer hover:bg-gray-100">
            <i class="fas fa-bell text-lg text-black"></i>
        </button>

        <!-- Profile Button with Dropdown -->
        <div class="group relative">
            <!-- Profile Button -->
            <button
                class="flex items-center rounded-full border border-gray-300 p-0.5 transition duration-200 hover:bg-gray-100">
                <img src="{{ asset('storage/admin/' . $user->image) }}" alt="User Image"
                    class="h-10 w-10 rounded-full border border-gray-300 object-cover" />
                <span class="ml-3 text-black">
                    {{ $user->first_name . ' ' . $user->last_name }}
                </span>
            </button>

            <!-- Dropdown Menu -->
            <div
                class="invisible absolute left-0 z-50 mt-2 w-48 rounded-lg border border-gray-200 bg-white opacity-0 shadow-lg transition-all duration-300 group-hover:visible group-hover:opacity-100">
                <div class="p-2">
                    <a href="" class="block rounded-t-lg px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-user mr-2"></i>
                        Profile
                    </a>
                    <a wire:navigate="/logout" href="{{ route('logout.user') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-right-from-bracket mr-2"></i>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

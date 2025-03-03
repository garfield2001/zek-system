<aside class="fixed inset-y-0 left-0 z-100  bg-slate-800 px-4 py-3">
    <header class="flex items-center border-b border-slate-600 px-1 pb-3">
        <img src="{{ asset('storage/admin/logo.png') }}" alt="Logo" class="mr-2 h-9 w-9 rounded-full" />
        <h1 class="text-xl text-gray-400 opacity-100">
            Zek Admin
        </h1>
    </header>

    <section class="border-b border-slate-600 px-1 py-4">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('storage/admin/' . $user->image) }}" alt="User Image" class="mr-2 h-9 w-9 rounded-full" />
            <div>
                <h2 class="text-lg font-semibold text-gray-400">
                    {{ e($user->first_name) . ' ' . e($user->last_name) }}
                </h2>
                <p class="text-sm text-gray-400">
                    {{ e($user->role) }}
                </p>
            </div>
        </div>
    </section>

    <div class="relative my-4">
        <label for="sidebar-search" class="sr-only">Search</label>
        <input type="search" placeholder="Search"
            class="w-full rounded border border-slate-500 bg-slate-800 p-2 pr-10 text-slate-400 placeholder-slate-400 focus:ring focus:ring-slate-800 focus:outline-none" />
        <button class="absolute inset-y-0 right-0 flex items-center pr-3">
            <i class="fas fa-search text-slate-400"></i>
        </button>
    </div>

    <nav>
        <ul>
            <li class="px-1 py-2 text-sm font-semibold text-gray-200">
                Main
            </li>
            <li>
                <a wire:navigate.hover wire:navigate="/dashboard" href="{{ route('show.dashboard.page') }}"
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class=>Dashboard</span>
                </a>
            </li>
            <li class="px-1 py-2 text-sm font-semibold text-gray-300">
                Manage Catering
            </li>
            <li>
                <a wire:navigate.hover wire:navigate="/catering_packages"
                    href="{{ route('show.catering-packages.page') }}"
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fa-solid fa-box"></i>
                    <span class=>
                        Catering Packages
                    </span>
                </a>
            </li>
            <li>
                <a wire:navigate.hover
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fa-solid fa-box"></i>
                    <span class=>
                        Meal Categories
                    </span>
                </a>
            </li>

            <li>
                <a wire:navigate.hover
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fa-solid fa-box"></i>
                    <span class=>Add-Ons</span>
                </a>
            </li>
            <li>
                <a wire:navigate.hover
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fa-solid fa-box"></i>
                    <span class=>Dishes</span>
                </a>
            </li>
            <li class="px-1 py-2 text-sm font-semibold text-gray-300">
                General Management
            </li>
            <li>
                <a wire:navigate.hover
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fa-solid fa-box"></i>

                    <span class=>
                        Reservations
                    </span>
                </a>
            </li>
            <li>
                <a wire:navigate.hover
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fa-solid fa-user"></i>
                    <span class=>Staffs</span>
                </a>
            </li>
            <li>
                <a wire:navigate.hover
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fas fa-file-alt"></i>

                    <span class=>Reports</span>
                </a>
            </li>
            <li class="px-1 py-2 text-sm font-semibold text-gray-300">
                System Settings
            </li>
            <li>
                <a wire:navigate.hover
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white">
                    <i class="fa-solid fa-gear"></i>
                    <span class=>Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

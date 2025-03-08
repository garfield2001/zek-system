<aside
    class="fixed top-0 bottom-0 left-0 m-2 w-64 overflow-y-auto rounded bg-slate-800 px-4 py-3"
>
    <header class="flex items-center border-b border-slate-600 px-1 pb-3">
        <img
            src="{{ asset("storage/admin/logo.png") }}"
            alt="Logo"
            class="mr-2 h-9 w-9 rounded-full"
        />
        <p class="text-xl text-gray-400 opacity-100">Zek Admin</p>
    </header>

    <section class="border-b border-slate-600 px-1 py-4">
        <div class="flex items-center space-x-4">
            <img
                src="{{ asset("storage/admin/" . $user->image) }}"
                alt="User Image"
                class="mr-2 h-9 w-9 rounded-full"
            />
            <div>
                <h2 class="text-lg font-semibold text-gray-400">
                    {{ e($user->first_name) . " " . e($user->last_name) }}
                </h2>
                <p class="text-sm text-gray-400">
                    {{ e($user->role) }}
                </p>
            </div>
        </div>
    </section>

    <div class="relative my-4">
        <label for="sidebar-search" class="sr-only">Search</label>
        <input
            type="search"
            placeholder="Search"
            class="w-full rounded border border-slate-500 bg-slate-800 p-2 pr-10 text-slate-400 placeholder-slate-400 focus:ring focus:ring-slate-800 focus:outline-none"
        />
        <button class="absolute inset-y-0 right-0 flex items-center pr-3">
            <i class="fas fa-search text-slate-400"></i>
        </button>
    </div>

    <nav>
        <ul>
            <li class="px-1 py-2 text-sm font-semibold text-gray-200">Main</li>

            <li>
                <a
                    wire:navigate.hover
                    wire:navigate="/dashboard"
                    href="{{ route("show.dashboard.page") }}"
                    class="flex items-center gap-1 rounded p-2 text-gray-400 hover:bg-orange-400 hover:text-white"
                >
                    <i
                        class="fas fa-tachometer-alt bg-amber-200 p-2 text-xl text-white"
                    ></i>
                    <span class="text-lg">Dashboard</span>
                </a>
            </li>

            <li class="px-1 py-2 text-sm font-semibold text-gray-300">
                Manage Catering
            </li>
            <li x-data="{ open: false }" class="mb-2">
                <button
                    @click="open = !open"
                    class="flex w-full items-center justify-between rounded p-2 px-4 text-gray-400 hover:cursor-pointer hover:bg-orange-400 hover:text-white"
                    :class="{ 'bg-orange-400 text-white': open }"
                >
                    <span>
                        <i class="fa-solid fa-box"></i>
                        Catering Packages
                    </span>
                    <i
                        class="fas fa-chevron-left transform transition-transform duration-300 ease-in-out"
                        :class="{ '-rotate-90': open }"
                    ></i>
                </button>

                <ul
                    x-show="open"
                    x-collapse.duration.300ms
                    x-transition
                    class="space-y-1 overflow-hidden"
                >
                    <li>
                        <a
                            wire:navigate.hover
                            wire:navigate="/catering_packages"
                            href="{{ route("show.catering-packages.page") }}"
                            class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                        >
                            <i class="fa-solid fa-box"></i>
                            <span>Catering Packages</span>
                        </a>
                    </li>
                    <li>
                        <a
                            wire:navigate.hover
                            wire:navigate="/meal_categories"
                            href="{{ route("show.meal-categories.page") }}"
                            class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                        >
                            <i class="fa-solid fa-box"></i>
                            <span>Meal Categories</span>
                        </a>
                    </li>
                    <li>
                        <a
                            wire:navigate.hover
                            wire:navigate="/dishes"
                            href="{{ route("show.dishes.page") }}"
                            class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                        >
                            <i class="fa-solid fa-box"></i>
                            <span>Dishes</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li x-data="{ open: false }" class="mb-2">
                <button
                    @click="open = !open"
                    class="flex w-full items-center justify-between rounded p-2 px-4 text-gray-400 transition duration-300 hover:cursor-pointer hover:bg-orange-400 hover:text-white"
                    :class="{ 'bg-orange-400 text-white': open }"
                >
                    <span>
                        <i class="fa-solid fa-box"></i>
                        Add-Ons
                    </span>
                    <i
                        class="fas fa-chevron-left origin-center transform transition-transform duration-300 ease-in-out"
                        :class="{ '-rotate-90': open }"
                    ></i>
                </button>

                <ul
                    x-show="open"
                    x-collapse.duration.300ms
                    x-transition
                    class="space-y-1 overflow-hidden"
                >
                    <li>
                        <a
                            href=""
                            class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                        >
                            <i class="fa-solid fa-box"></i>
                            <span>Add-Ons Categories</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href=""
                            class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                        >
                            <i class="fa-solid fa-box"></i>
                            <span>Add-Ons Packages</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="px-1 py-2 text-sm font-semibold text-gray-300">
                General Management
            </li>

            <li class="mb-2">
                <a
                    wire:navigate.hover
                    wire:navigate="/reservations"
                    href="{{ route("show.reservations.page") }}"
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                >
                    <i class="fa-solid fa-box"></i>
                    <span>Reservations</span>
                </a>
            </li>
            <li class="mb-2">
                <a
                    wire:navigate.hover
                    wire:navigate="/staffs"
                    href="{{ route("show.staffs.page") }}"
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                >
                    <i class="fa-solid fa-user"></i>
                    <span>Staffs</span>
                </a>
            </li>
            <li class="mb-2">
                <a
                    wire:navigate.hover
                    wire:navigate="/reports"
                    href="{{ route("show.reports.page") }}"
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                >
                    <i class="fas fa-file-alt"></i>
                    <span>Reports</span>
                </a>
            </li>
            <li class="px-1 py-2 text-sm font-semibold text-gray-300">
                System Settings
            </li>
            <li class="mb-2">
                <a
                    wire:navigate.hover
                    wire:navigate="/system_settings"
                    href="{{ route("show.system-settings.page") }}"
                    class="block rounded p-2 px-4 text-gray-400 hover:bg-orange-400 hover:text-white"
                >
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

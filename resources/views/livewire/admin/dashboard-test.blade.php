<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside
        id="sidebar"
        class="fixed inset-y-0 left-0 z-100 w-64 transform bg-blue-900 p-4 text-white transition-transform duration-300 ease-in-out"
    >
        <header class="mb-4 flex items-center px-2 py-4">
            <img
                src="{{ asset("storage/admin/logo.png") }}"
                alt="Logo"
                class="mr-3 h-8 w-8 rounded-full"
            />
            <h1 class="text-xl font-semibold">Zek Admin</h1>
        </header>
        <section class="mb-4 border-b border-blue-700 px-2 py-4">
            <div class="flex items-center space-x-4">
                <img
                    src="{{ asset("storage/admin/alexander-jones.jpg") }}"
                    alt="User Image"
                    class="h-8 w-8 rounded-full"
                />
                <div>
                    <h2 class="text-lg font-semibold">James Pierce</h2>
                    <p class="text-sm text-gray-400">Administrator</p>
                </div>
            </div>
        </section>
    </aside>
</div>

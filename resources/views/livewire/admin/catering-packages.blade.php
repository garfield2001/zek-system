<div class="flex h-screen overflow-hidden">
    <livewire:admin.components.sidebar />
    <div class="flex-grow">
        <main id="main-content"
            class="flex-1 bg-gray-100 ml-64 transition-all duration-300 ease-in-out z-10 flex flex-col min-h-screen">
            <livewire:admin.components.navbar />
            <header class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-semibold text-blue-900 mb-4">Catering Packages</h2>
                {{-- <p class="text-gray-700">Welcome to the Admin Dashboard!</> --}}
            </header>
            <livewire:admin.components.footer />
        </main>
    </div>
</div>
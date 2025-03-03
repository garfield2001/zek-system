<div class="flex h-screen overflow-hidden">
    <livewire:admin.components.sidebar />

    <main
        id="main-content"
        class="z-10 ml-64 flex min-h-screen flex-1 flex-col bg-gray-100 transition-all duration-300 ease-in-out"
    >
        <livewire:admin.components.navbar />
        <livewire:admin.dashboard />
        <livewire:admin.components.footer />
    </main>
</div>

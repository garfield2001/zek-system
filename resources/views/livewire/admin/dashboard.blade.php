
<div class="flex h-screen overflow-hidden">
    <livewire:admin.components.sidebar />
    <div id="main-content" class="flex-1 transition-all duration-300 ease-in-out z-10">
        <livewire:admin.components.navbar />
        <main class="flex-1 p-6 overflow-auto">
            <livewire:admin.components.header />
            <livewire:admin.dashboard />
        </main>
    </div>
</div>


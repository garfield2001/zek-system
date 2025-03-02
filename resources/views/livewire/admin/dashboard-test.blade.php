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
        <div class="bg-green-600 text-white p-6 rounded-lg shadow-lg hover:bg-green-700 transition duration-300">
            <h3 class="text-xl font-bold">Revenue</h3>
            <p class="text-lg">₱50,000</p>
        </div>
        <div class="bg-yellow-600 text-white p-6 rounded-lg shadow-lg hover:bg-yellow-700 transition duration-300">
            <h3 class="text-xl font-bold">Orders</h3>
            <p class="text-lg">75</p>
        </div>
        <div class="bg-violet-600 text-white p-6 rounded-lg shadow-lg hover:bg-violet-700 transition duration-300">
            <h3 class="text-xl font-bold">Reservations</h3>
            <p class="text-lg">75</p>
        </div>
    </div>
</section>


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
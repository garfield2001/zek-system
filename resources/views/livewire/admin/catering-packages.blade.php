<section class="flex-grow bg-gray-200 p-6 overflow-y-scroll">
    <header class="mb-6 rounded-lg bg-white p-6 shadow-lg">
        <h2 class="mb-4 text-2xl font-semibold text-orange-400">
            Catering Packages
        </h2>

    </header>

    <!-- Add Button and Search -->
    <div class="flex justify-between items-center mb-6">
        <!-- Add Package Button with Icon -->
        <button
            class="bg-orange-400 text-white py-2 px-4 rounded-md shadow-md hover:bg-orange-500 focus:outline-none flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
            </svg>
            Add Package
        </button>

        <!-- Search Bar with Icon -->
        <div class="relative w-1/3">
            <input type="text" id="packageSearch"
                class="w-full px-10 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400"
                placeholder="Search Packages">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11 4a7 7 0 100 14 7 7 0 000-14zm0 0l7 7m-7-7l-7 7"></path>
            </svg>
        </div>
    </div>

    <!-- Container for Table -->
    <div class="container mx-auto">
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table id="packageTable" class="min-w-full table-auto">
                <!-- Table Header -->
                <thead class="bg-orange-300 font-semibold text-slate-700">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold">Package Name</th>
                        <th class="px-6 py-3 text-left font-semibold">Price</th>
                        <th class="px-6 py-3 text-left font-semibold">Minimum Order</th>
                        <th class="px-6 py-3 text-left font-semibold">Meal Limit</th>
                        <th class="px-6 py-3 text-left font-semibold">Good For</th>
                        <th class="px-6 py-3 text-left font-semibold">Actions</th> <!-- Actions Column -->
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody class="text-slate-600">
                    @foreach ($catering_packages as $catering_package)
                        <tr class="border-t hover:bg-orange-50">
                            <td class="px-6 py-3">{{ $catering_package->name }}</td>
                            <td class="px-6 py-3">{{ $catering_package->price }}</td>
                            <td class="px-6 py-3">{{ $catering_package->min_order }}</td>
                            <td class="px-6 py-3">{{ $catering_package->meal_limit }}</td>
                            <td class="px-6 py-3">{{ $catering_package->good_for }}</td>
                            <td class="px-6 py-3">
                                <button class="text-blue-500 hover:text-blue-700 mr-4">Edit</button>
                                <button class="text-red-500 hover:text-red-700">Delete</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        <!-- Pagination Links -->
        {{-- <div>
            <!-- Pagination links -->
            {{ $catering_packages->links() }} <!-- Use Tailwind pagination -->
        </div> --}}
    </div>
</section>

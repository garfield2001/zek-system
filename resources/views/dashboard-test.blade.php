<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel Nova Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">
    <!-- Navbar -->
    <nav class="flex items-center justify-between bg-gray-800 p-4 shadow">
        <div>
            {{-- <h1 class="text-lg font-bold text-orange-500">Laravel Nova</h1> --}}
            <img class="h-6 w-10" src="{{ asset('storage/admin/logo-transparent.png') }}" alt="" />
        </div>
        <div class="flex items-center space-x-4">
            <button class="relative">
                🔔
                <span
                    class="absolute top-0 right-0 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-xs">
                    3
                </span>
            </button>
            <div class="flex items-center">
                <img src="https://via.placeholder.com/40" class="mr-2 rounded-full" />
                <span>Taylor Otwell</span>
            </div>
        </div>
    </nav>

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 p-5">
            <h2 class="mb-3 text-xs text-gray-400 uppercase">Dashboard</h2>
            <ul>
                <li class="py-2 text-gray-300 hover:text-white">
                    <a href="#">Main</a>
                </li>
                <li class="py-2 text-gray-300 hover:text-white">
                    <a href="#">User Insights</a>
                </li>
            </ul>

            <h2 class="mt-5 mb-3 text-xs text-gray-400 uppercase">
                Resources
            </h2>
            <ul>
                <li class="py-2 text-gray-300 hover:text-white">
                    <a href="#">Addresses</a>
                </li>
                <li class="py-2 text-gray-300 hover:text-white">
                    <a href="#">Comments</a>
                </li>
                <li class="py-2 text-blue-400"><a href="#">Users</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6">
            <div class="grid grid-cols-2 gap-6">
                <div class="rounded-lg bg-gray-700 p-4">
                    <h3 class="text-gray-300">Current Users</h3>
                    <p class="text-2xl font-bold text-white">7</p>
                </div>
                <div class="rounded-lg bg-gray-700 p-4">
                    <h3 class="text-gray-300">New Users</h3>
                    <p class="text-2xl font-bold text-white">75%</p>
                    <div class="mt-2 h-2 w-3/4 bg-green-500"></div>
                </div>
            </div>

            <!-- Users Table -->
            <div class="mt-6 rounded-lg bg-gray-800 p-4">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="text-lg font-bold">Users</h2>
                    <button class="rounded bg-blue-500 px-4 py-2 text-white">
                        Create User
                    </button>
                </div>

                <table class="w-full border-collapse text-left">
                    <thead>
                        <tr class="border-b border-gray-700 text-gray-400">
                            <th class="py-2">ID</th>
                            <th class="py-2">Avatar</th>
                            <th class="py-2">Name</th>
                            <th class="py-2">Email</th>
                            <th class="py-2">Admin</th>
                            <th class="py-2">2FA</th>
                            <th class="py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-700 hover:bg-gray-700">
                            <td class="py-2">1</td>
                            <td>
                                <img src="https://via.placeholder.com/30" class="rounded-full" />
                            </td>
                            <td>Taylor Otwell</td>
                            <td>taylor@nova.laravel.com</td>
                            <td class="text-red-500">✖</td>
                            <td class="text-green-500">✔</td>
                            <td>✏️ 👁️ 🗑️</td>
                        </tr>
                        <tr class="border-b border-gray-700 hover:bg-gray-700">
                            <td class="py-2">2</td>
                            <td>
                                <img src="https://via.placeholder.com/30" class="rounded-full" />
                            </td>
                            <td>David Hemphill</td>
                            <td>david@nova.laravel.com</td>
                            <td class="text-green-500">✔</td>
                            <td class="text-green-500">✔</td>
                            <td>✏️ 👁️ 🗑️</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>

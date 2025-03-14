<div
    class="flex min-h-screen flex-col justify-center bg-white py-12 sm:px-6 lg:px-8"
>
    <h1 class="mb-6 text-center text-2xl font-bold text-red-600 sm:text-3xl">
        Zek Catering Admin Login
    </h1>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white px-4 py-8 shadow-lg sm:rounded-lg sm:px-10">
            <!-- Header -->
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-red-600 sm:text-3xl">
                    Welcome Back
                </h2>
                <p class="mt-2 text-sm text-gray-600 sm:text-base">
                    Please sign in to your account
                </p>
            </div>
            <!-- Form -->
            <form wire:submit.prevent="login" class="space-y-6">
                <!-- Username -->
                <div>
                    <label
                        class="block text-sm font-medium text-gray-700"
                        for="username"
                    >
                        Username
                    </label>
                    <input
                        type="text"
                        wire:model="username"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 focus:ring-red-500"
                        placeholder="Username"
                        autocomplete="username"
                        required
                    />
                </div>

                <!-- Password -->
                <div>
                    <label
                        class="block text-sm font-medium text-gray-700"
                        for="password"
                    >
                        Password
                    </label>
                    <div class="relative mt-1" x-data="{ show: false }">
                        <input
                            :type="show ? 'text' : 'password'"
                            wire:model="password"
                            class="block w-full rounded-lg border border-gray-300 px-3 py-2 focus:ring-red-500"
                            placeholder="Password"
                            autocomplete="current-password"
                            required
                        />
                        <button
                            type="button"
                            class="absolute inset-y-0 right-0 flex items-center pr-3"
                            @click="show = !show"
                        >
                            <svg
                                x-show="!show"
                                class="h-5 w-5 text-gray-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                />
                            </svg>
                            <svg
                                x-show="show"
                                class="h-5 w-5 text-gray-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268-2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            wire:model="remember"
                            class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500"
                        />
                        <label
                            for="remember"
                            class="ml-2 block text-sm text-gray-700"
                        >
                            Remember me
                        </label>
                    </div>

                    <!-- Forgot Account Link -->
                    <a href="#" class="text-sm text-red-600 hover:underline">
                        Forgot account?
                    </a>
                </div>

                <button
                    type="submit"
                    class="flex w-full justify-center rounded-lg border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:cursor-pointer hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:outline-none sm:py-3 sm:text-base"
                >
                    Sign In
                </button>
            </form>
        </div>
    </div>
</div>

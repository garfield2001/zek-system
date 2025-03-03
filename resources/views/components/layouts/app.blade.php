<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? "Page Title" }}</title>
        <link
            rel="shortcut icon"
            href="{{ asset("favicon.ico") }}"
            type="image/x-icon"
        />
        @vite("resources/css/app.css")
        @livewireStyles
    </head>

    <body>
        @if ($title == "Admin Login")
            {{ $slot }}
        @else
            <div class="flex h-screen overflow-hidden">
                @persist("sidebar")
                    <livewire:admin.components.sidebar />
                @endpersist

                <main
                    id="main-content"
                    class="z-10 ml-64 flex min-h-screen flex-1 flex-col bg-gray-100 transition-all duration-300 ease-in-out"
                >
                    @persist("navbar")
                        <livewire:admin.components.navbar />
                    @endpersist

                    {{ $slot }}

                    @persist("footer")
                        <livewire:admin.components.footer />
                    @endpersist
                </main>
            </div>
        @endif

        @livewireScripts
        @vite("resources/js/app.js")
    </body>
</html>

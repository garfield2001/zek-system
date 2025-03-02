import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: true, // Ito ang nagpapagana ng IPv4
        hmr: {
            host: '127.0.0.1', // IPv4
        },
        cors: true, // Allow CORS
    },
});

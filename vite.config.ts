import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.ts'],
            refresh: true,
        }),
        vue(),
    ],
    build: {
        manifest: true,
        outDir: 'public/build',
        emptyOutDir: true,
    },
});


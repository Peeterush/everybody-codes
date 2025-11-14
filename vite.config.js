import { cwd } from 'node:process';
import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig(({ mode }) => {
    const appURL = loadEnv(mode, cwd(), 'APP_URL').APP_URL;
    return {
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
            tailwindcss(),
        ],
        server: {
            host: true,
            hmr: { host: new URL(appURL).host },
            https: { key: './ssl.key', cert: './ssl.crt' },
            watch: { ignored: ['**/vendor/**'] },
        },
    };
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                // 'public/admin/css/bootstrap.min.css',
                // 'public/admin/css/custom.css',
                // 'public/admin/css/style.css',
                // 'public/admin/js/bootstrap.min.js',
                // 'public/admin/js/jquery-3.3.1.min.js',
                // 'public/admin/js/jquery-3.3.1.slim.min.js',
                // 'public/admin/js/jquery.js',
                // 'public/admin/js/popper.min.js',
            ],
            refresh: true,
        }),
    ],
});

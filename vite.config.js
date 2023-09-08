import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    //Aggiungiamo un alias per la cartella /resources/
    resolve: {
        alias: {
        '~resources': '/resources/',
        '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
        },
});

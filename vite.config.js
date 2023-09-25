import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue"
import path from "path"
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias:{
            "@/": path.join(__dirname, "/resources/ts/src/"),
            "~": path.join(__dirname, "/node_modules/"),
        },},
});

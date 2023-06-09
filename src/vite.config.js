import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue2'

export default defineConfig({
  server: {
    host: true,
    hmr: {
      host: 'localhost',
    },
  },
  plugins: [
    vue(),
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  build: {
    rollupOptions: {
      external: [
        '/storage/images/no_image.jpg',
        '/storage/images/loading.gif',
        '/storage/images/logo.jpg',
      ],
    },
  },
});

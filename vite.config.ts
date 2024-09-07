import vue from '@vitejs/plugin-vue'
import Components from 'unplugin-vue-components/vite'
import Markdown from 'unplugin-vue-markdown/vite'
import { URL, fileURLToPath } from 'url'
import { defineConfig } from 'vite'
import svgLoader from 'vite-svg-loader'

import { markdownItSetup } from './config/markdown-it'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue({
      include: [/\.vue$/, /\.md$/],
    }),
    svgLoader(),
    Components({ dts: '@/types/components.d.ts', include: [/\.vue$/, /\.vue\$vue/, /\.md$/] }),
    Markdown({
      markdownItSetup,
    }),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url)),
    },
  },
})

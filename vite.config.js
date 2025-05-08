export default {
  build: {
    rollupOptions: {
      // overwrite default .html entry
      input: '/assets/index.js',
      output: {
        entryFileNames: 'main.js',
        assetFileNames: 'main.css'
      }
    },
  },
}
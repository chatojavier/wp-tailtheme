module.exports = {
  mode: 'jit',
  purge: {
    content: [
      '../*/*.php',
      '../**/*.php',
      '../assets/src/scss/*.scss',
      '../assets/src/js/*.js',
      './safelist.txt',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

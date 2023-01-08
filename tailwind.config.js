/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
],
  theme: {
    extend: {
      backgroundImage: {
        'apc-building': "url('/img/apc-building.png')",
        'TAPM-logo': "url('/img/logo.png')",
      }
    },
  },
  plugins: [],
}

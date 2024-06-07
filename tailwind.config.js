/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing: {
        'navbar-height': '60px', // Custom height for the navbar
      },
      zIndex: {
        '10': '10', // Custom z-index for the navbar
      },
    },
  },
  plugins: [],
}

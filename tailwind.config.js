/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'custom-green': '#164E4B',
        'konten-green': '#0A5C36',
        'custom-blue': '#03626F',
      },
    },
  },
  plugins: [],
}

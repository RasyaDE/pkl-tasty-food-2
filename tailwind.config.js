/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'banner' : "url(/public/images/banner.png)",
        'slide-2' : "url(/public/images/food-galeri-2.jpg)"
      }
    },
  },
  plugins: [],
}
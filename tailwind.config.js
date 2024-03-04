/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
      colors: {
        'primary': '#1C75BC',
        'secondary': '#F47827',
        'orange': '#FF570C',
        'gray-700': '#737791',
        'primary-2': '#dff1ff',
        'text-color': '#05004E',
        'light-blue': '#9FC6FF'
      }
    },
  },
  plugins: [],
}


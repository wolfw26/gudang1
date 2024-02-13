/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily:{
            'julee':['Julee', 'cursive'],
            'lato':['Lato', 'sans-serif'],
            'oswald':['Oswald', 'sans-serif'],
            'syne':['Syne Mono', 'monospace'],
        },
        boxShadow:{
            'bottom': '0 3px 4px 0 rgba(255, 255, 255, 1)',
        }
    },
  },
  plugins: [],
}


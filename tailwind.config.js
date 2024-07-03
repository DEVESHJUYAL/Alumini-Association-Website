/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/*.{html,php}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('tailwindcss-animate'),
  ],
  variants: {
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
     },
}


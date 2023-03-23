/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    screens: {
      md: { 'max': '991.99px' },
      sm: { 'max': '767.99px' },
      xs: { 'max': '479.99px' },
    },
    extend: {
      fontFamily: {
        roboto: ['Roboto', 'sans-serif'],
      },
      container: {
        center: true,
        padding: '24px',
      },
      colors: {
        main: '#0F0F0F',
        secondry: '#606060',
        lightblue: '#065FD4',
        darkred: '#CC0000',
      }
    },
  },
  plugins: [],
}

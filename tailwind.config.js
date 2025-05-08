/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {      
      colors : {
      lightbluelec: '#09e4bf',
      darkbluelec: '#5792e8',
      orangelec: '#ff571d'
    },
  },
  },
  plugins: [],
}

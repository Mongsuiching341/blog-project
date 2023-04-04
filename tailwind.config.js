/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,js}"],
  theme: {
    extend: {
      colors:{
          primary:   '#191825',
          secondary: '#865DFF',
          extra :    '#FCFFE7',
      }
    },
  },
  plugins: [],
}


/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    screens:{
        sm:'480px',
        md:'768px',
        lg:'976px',
        xl:'1440px'

    },
    extend: {
        colors:{
            brightRed: 'hsl(12, 88%, 59%)',
            brightRedLight: 'hsl(12, 88%, 69%)',
            darkBlue: 'hsl(228,39%,23%)',
            darkGrayishBlue: 'hsl(233, 12%, 13%)',
            darkGrayishBlueLight: 'hsl(233, 12%, 20%)',
            veryPaleRed: 'hsl(13, 100%, 96%)',
            veryLightGray: 'hsl(0, 0%, 98%)',
            lightBlue:'hsl(228, 60%, 62%)'
        },
        backgroundImage:{
            'cfc':"url('/images/bg/cfc.jpeg')",
            'dev':"url('/images/bg/softwaredev.jpeg')",
            'soft':"url('/images/bg/softwaredev-2.jpeg)"
        }
    },
  },
  plugins: [],
}


module.exports = {
  content: [    './*.html',
    './**/*.html',
    './*.php',
    './**/*.php',
    './dist/js/**/*.js',],
  safelist: [
    {
      pattern: /card-grid/,
    },
    {
      pattern: /card-background/,
    },
    {
      pattern: /card/, 
    }
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#140E0F',   
        secondary: '#8E1313', 
        accent: '#DF4743',  
        light: '#F3F3F3', 
      },
      screens: {
        '2xl': '1320px',
      },
      inter: ['Inter', 'sans-serif'],
      montserrat: ['Montserrat', 'sans-serif'],
      roboto: ['Roboto', 'sans-serif'],
    },
  },
  plugins: [],
}

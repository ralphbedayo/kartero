const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        // prettier-ignore
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
       extend: {}
    },
    variants: {
        extend: {
            fill: ['focus', 'group-hover'],
        },
    },
    plugins: [],
}

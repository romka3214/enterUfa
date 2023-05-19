const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            colors: {
                current: "#2e2e2e"
              },
            fontFamily: {
                sans: ['MuseoCyrl', 'sans'],
            },
        },
    },

    darkMode: 'media',
    plugins: [
        require('flowbite/plugin'),
        require('@tailwindcss/forms'),

    ],

};

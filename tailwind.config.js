/** @type {import('tailwindcss').Config} */

import forms from '@tailwindcss/forms';
import colors from 'tailwindcss/colors.js';

export default {
    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js')
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/tallstackui/tallstackui/src/**/*.php',

    ],
    theme: {
        extend: {
            colors: {
                primary: '#00028b',
                verde: '#3cdd97',
            }
        },
    },
    plugins: [forms],

}

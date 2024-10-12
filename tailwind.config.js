import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    important: true,
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'btAmarillo': {
                    '50': '#feffe7',
                    '100': '#fcffc1',
                    '200': '#feff86',
                    '300': '#fff941',
                    '400': '#ffec0d',
                    '500': '#ffdd00',
                    '600': '#d1a300',
                    '700': '#a67502',
                    '800': '#895b0a',
                    '900': '#744a0f',
                    '950': '#442704',
                },


            }
        },
    },

    plugins: [forms,
        typography,
        require('@tailwindcss/forms'),],
};

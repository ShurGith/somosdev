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
                'verdec': {
                    '50': '#f2f7f3',
                    '100': '#e0ebe1',
                    '200': '#c3d7c6',
                    '300': '#9abba1',
                    '400': '#84a98d',
                    '500': '#4d7c5a',
                    '600': '#3a6146',
                    '700': '#2e4e38',
                    '800': '#263f2e',
                    '900': '#203427',
                    '950': '#111d15',
    },

            }
        },
    },

    plugins: [forms,
        typography,
        require('@tailwindcss/forms'),],
};

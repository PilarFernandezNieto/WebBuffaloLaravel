import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'host-grotesk': ['"Host Grotesk"', 'sans-serif'], // Añade la fuente personalizada
              },
            colors: {
                'custom-red': '#AC2C28',
                'custom-red-darker': '#9A2724'
              },
        },
    },

    plugins: [forms],
};

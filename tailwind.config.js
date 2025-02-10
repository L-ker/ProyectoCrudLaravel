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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            height: {
                "10v":"10vh",
                "15v":"15vh",
                "65v":"65vh",
                "5v":"5vh",
            },
            colors: {
                "flame":"#D36135",
                "Asparagus":"#7FB069",
                "Vanilla":"#ECE4B7",
                "Fawn":"#E6AA68",
                "Black":"#02020B",
            },
        },
    },

    plugins: [forms, require("daisyui")],
};

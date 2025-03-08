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
                mono: ['ui-monospace', 'SFMono-Regular'],
            },
            height: {
                "10v":"10vh",
                "15v":"15vh",
                "65v":"65vh",
                "5v":"10vh",
            },
            colors: {
                "indigoDye":"#274060",
                "lapisLazuli":"#335c81",
                "argentinianBlue":"#65afff",
                "Black":"#1b2845",
            },
        },
    },

    plugins: [forms, require("daisyui")],
};

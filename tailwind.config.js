import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/js/**/*.vue',
        './node_modules/preline/dist/*.js',
        './app/Http/Livewire/**/*.php',
        './app/Http/Controllers/**/*.php',
    ],
    
    darkMode: 'class',
    
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        typography,
        require('preline/plugin'),
    ],

    // Ensure all Tailwind classes are generated
    safelist: [
        'bg-gray-50',
        'bg-white',
        'dark:bg-gray-800',
        'dark:bg-gray-900',
        {
            pattern: /(bg|text|border)-(gray|blue|red|green|yellow)-(100|200|300|400|500|600|700|800|900)/,
            variants: ['hover', 'dark', 'dark:hover'],
        },
    ],
};


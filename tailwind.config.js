/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                'primary' : '#f6993f',
                'secondary' : '#ec008c',
                'base' : '#f8f9fa',
                'highlighted' : '#a20060'
            },
            spacing: {
                'lg': '2rem',
                'md': '1rem',
                'sm': '0.5rem',
            }
        },
    },
    plugins: [
      require('daisyui'),
    ],
};

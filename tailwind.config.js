const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                backgroundColor: theme => ({
                    ...theme('colors'),
                    'primary': '#3490dc',
                    'secondary': '#ffed4a',
                    'danger': '#e3342f',
                }),
            },
                backgroundColor: theme => ({
                           ...theme('colors'),
                   'primary': '#3490dc',
           'secondary': '#ffed4a',
           'danger': '#e3342f',
}),
            corePlugins: {

                     backgroundColor: false,
},
            variants: {
                // ...

         backgroundColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
}
        },
    },
    plugins: [require('@tailwindcss/forms')],
};

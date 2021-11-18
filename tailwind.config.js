const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './*/*.php',
            './**/*.php',
            './resources/css/*.css',
            './resources/js/*.js',
            './safelist.txt'
        ],
        options: {
            safelist: [
                'list-inside',
                'list-disc',
                'list-decimal',
                'm-2',
                'm-4',
                'm-6',
                'm-8',
                'mt-2',
                'mt-4',
                'mt-6',
                'mt-8',
                'mb-2',
                'mb-4',
                'mb-6',
                'mb-8',
                'my-2',
                'my-4',
                'my-6',
                'my-8',
                'ml-2',
                'ml-4',
                'ml-6',
                'ml-8',
            ],
        },
    },
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        fontSize: {
            'xs': '.75rem',
            'xsm': '.813rem',
            'sm': '.875rem',
            'base': '1rem',
            'lg': '1.125rem',
            'xl': '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.875rem',
            '4xl': '2.25rem',
            '5xl': '3rem',
            '6xl': '4rem',
            '7xl': '5rem',
        },
        extend: {
            colors: {
                'cool-gray': {
                    '400': '#e5e5e5',
                    '500': '#a8a8a8',
                    '600': '#6e6e6e',
                    '700': '#292929',
                    '900': '#505050',
                },
                'cool-purple': {
                    '100': '#f3f5fd',
                    '500': '#00a8cc',
                    '600': '#292929',
                    '700': '#34008e',
                },
                'primary': {
                    '10': '#F4FDFF',
                    '50': '#EBFCFF',
                    '100': '#C5F6FA',
                    '300': '#01b9db',
                    '500': '#008CCC',
                    '700': '#0B507B',
                    '900': '#162950',
                },
            }
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': tailpress.theme('settings.layout.wideSize', theme)
        }
    },
    plugins: [
        tailpress.tailwind,
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ]
};

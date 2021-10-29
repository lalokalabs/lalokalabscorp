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
        extend: {
            colors: {
                'cool-gray': {
                    '50': '#EDF2F8',
                    '100': '#D7DFE7',
                    '300': '#8895A1',
                    '500': '#5A6775',
                    '700': '#38434E',
                    '900': '#1A1F25',
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

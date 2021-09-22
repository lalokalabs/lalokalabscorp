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

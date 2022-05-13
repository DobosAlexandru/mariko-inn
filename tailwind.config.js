const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [

        './resources/**/*.blade.php',

        './resources/**/*.js',

        './resources/**/*.vue',

    ],
    options: {
        defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
        whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            screen:{
                'xs':'320px',
                'sml':'460px'
            },
            inset: {
                '-22': '-5.6rem',
                '70' : '17rem',
                '100': '28rem'
            },
            spacing:{
                '100':'34rem'
            },
            fontWeight: {
                superbold: '1000',
            },
            container: {
                padding: {
                    DEFAULT: '100px',
                }
            },
            colors: {
                green: {
                    dark: '#1B5A41',
                },
                gray: {
                    dark: '#374151',
                    light: '#1F2937',
                    '50' : '#F3F4F6',
                    '150': '#D1D5DB'
                },
                red: {
                    dark: '#891A1C',
                },
                blue: {
                    '150': '#B3CCC2',
                    '50': '#85AD9D'
                }
            },
            height: {
                xxl: '800px',
                hero_mobile: '42rem'
            },
            maxWidth: {
                boxed: '1170px',
            },
            zIndex: {
                '-2': '-2',
                '-1': '-1',
            },
            fontFamily: {
                sans: ["Mulish", "ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Roboto", "Helvetica Neue", "Arial", "Noto Sans", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
                serif: ["Zilla Slab","Century Book", "ui-serif", "Georgia", "Cambria", "Times New Roman", "Times", "serif"],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
    ],
}

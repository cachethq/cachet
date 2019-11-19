const _ = require('lodash')

module.exports = {
    theme: {
        extend: {
            colors: {
                'black-75': 'rgba(0, 0, 0, 0.75)',
            },
            borderWidth: {
                '3': '3px',
                '6': '6px',
            },
            fontFamily: {
                sans: 'Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
            },
            letterSpacing: {
                wide: '.05em',
                wider: '.1em',
                widest: '.2em'
            },
            spacing: {
                '2px': '2px',
                '72': '18rem',
                '80': '20rem',
                '96': '24rem',
                '128': '32rem'
            },
            customForms: (theme) => ({
                default: {
                    "input, select": {
                        display: 'block',
                        width: '100%',
                        '&:focus': {
                            boxShadow: undefined,
                            borderColor: theme('colors.gray.400'),
                        }
                    },
                    select: {
                        iconColor: theme('colors.gray.600'),
                    },
                    "checkbox, radio": {
                        '&:checked': {
                            backgroundColor: theme('colors.gray.700'),
                        }
                    },
                }
            })
        }
    },
    variants: {
        opacity: [
            'responsive',
            'hover',
            'focus',
        ]
    },
    plugins: [
        require('@tailwindcss/custom-forms'),

        function ({ addUtilities, config }) {
            addUtilities(_.flatMap(config('theme.spacing'), (size, modifier) => {
                return {
                    [`.spaced-x-${modifier} > * + *`]: {
                        marginLeft: size,
                    },
                    [`.spaced-y-${modifier} > * + *`]: {
                        marginTop: size,
                    }
                }
            }))
        }
    ]
}

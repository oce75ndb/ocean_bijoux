module.exports = {
    darkMode: 'class', // Utilisation de la classe 'dark'
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                beige: {
                    DEFAULT: '#F5EBE0',
                },
                gold: {
                    DEFAULT: '#BEA898',
                },
                black: {
                    DEFAULT: '#000000',
                },
                brown: {
                    DEFAULT: '#412E20',
                },
            },
        },
    },
    plugins: [],
};

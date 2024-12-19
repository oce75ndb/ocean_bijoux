module.exports = {
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
          },
      },
  },
  plugins: [],
};

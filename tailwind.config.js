module.exports = {
    purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            primary: '#e3e3e3e3',
            secondary: 'red'
        },
        extend: {},
    },
    variants: {
      extend: {},
    },
    plugins: [],
}

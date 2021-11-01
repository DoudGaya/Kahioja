module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{
        'sans': [
          'CircularStd-Black', 
          'CircularStd-BlackItalic',
          'CircularStd-Bold',
          'CircularStd-BoldItalic',
          'CircularStd-Book',
          'CircularStd-BookItalic',
          'CircularStd-Light Italic',
          'CircularStd-Light',
          'CircularStd-Medium',
          'CircularStd-MediumItalic',
        ]
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

// https://tailwindcss.com/docs/configuration
module.exports = {
  content: [
    "./index.php",
    "./app/**/*.php",
    "./resources/**/*.{php,vue,js}",
    "./node_modules/tw-elements/dist/js/**/*.js",
  ],
  theme: {
    extend: {
      borderRadius: {
        "4xl": "2rem",
      },
      colors: {
        aesyc: {
          background: "linear-gradient(180deg, #DEE600 0%, #ADCC00 100%)",
        },
        primary: {
          0: "#DEE600",
          50: "#DEE500",
          100: "#ADCC00",
        },
        bg1: "#181816",
        bg2: "#262622",
        bg3: "#0D0D0C",
        bg5: "#41413a",

        txPri: "#DBDBD7",

        txSec: "#B7B7AE",
        mono: "#5C5C52",

        gradient: "linear-gradient(180deg, #DEE600 0%, #ADCC00 100%)",
      },
      fontFamily: {
        sans: ["News Cycle", "sans-serif"],
        mono: ["Roboto Mono", "monospace"],
      },
      spacing: {
        "8xl": "96rem",
        "9xl": "128rem",
      },
      zIndex: {
        heroImg: 49,
        heroContainer: 48,
        navbar: 51,
        heroHeading: 100,
      },
    },
  },
  plugins: [
    require("tw-elements/dist/plugin"),
    require("@tailwindcss/typography"),
    // ...
  ],
};

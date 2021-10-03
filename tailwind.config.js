// tailwind.config.js
module.exports = {
  corePlugins: {
    preflight: true,
  },
  purge: ["./src/**/*.html", "./src/**/*.vue"],
  theme: {
    extend: {
      zIndex: {
        "-1": "-1",
      },
    },
  },
  variants: {},
  plugins: [],
};

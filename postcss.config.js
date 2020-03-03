const purgecss = require("@fullhuman/postcss-purgecss");
const autoprefixer = require("autoprefixer");

module.exports = {
  plugins: [
    require("tailwindcss"),
    purgecss({
      content: ["./**/*.php"],
      defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
    }),
    autoprefixer()
  ]
};

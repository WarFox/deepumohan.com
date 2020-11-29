// This is where project configuration and plugin options are located.
// Learn more: https://gridsome.org/docs/config

// Changes here require a server restart.
// To restart press CTRL + C in terminal and run `gridsome develop`

module.exports = {
  siteName: "Deepu Mohan Puthrote | Technology enthusiast",
  siteUrl: "https://deepumohan.com/",
  siteDescription: "Personal Website of Deepu Mohan Puthrote",
  icon: {
    favicon: "./src/favicon.png",
    touchicon: "./src/apple-touch-icon.png",
  },
  plugins: [
    "gridsome-plugin-tailwindcss",
    {
      use: "@gridsome/plugin-sitemap",
      options: {
        staticUrls: [
          {
            url: "/cv/",
          },
          {
            url: "/projects/word-count/",
          },
          {
            url: "/projects/strong-password-generator/",
          },
          {
            url: "/tech/",
          },
        ],
      },
    },
    {
      use: "@gridsome/vue-remark",
      options: {
        typeName: "MarkdownPage", // Required
        baseDir: "./content/", // Where .md files are located
        pathPrefix: "/", // Add route prefix. Optional
        template: "./src/templates/MarkdownPage.vue", // Optional
      },
    },
  ],
  transformers: {
    remark: {
      externalLinksTarget: "_self",
      externalLinksRel: ["nofollow", "noopener", "noreferrer"],
    },
  },
};

import { defineNuxtConfig } from "nuxt/config";

export default defineNuxtConfig({
  // Enable server-side rendering: https://nuxt.com/docs/getting-started/deployment#static-hosting
  ssr: true,

  // Global page headers: https://nuxt.com/docs/getting-started/seo-meta
  app: {
    head: {
      title: "Deepu Mohan Puthrote | Technology enthusiast",
      meta: [
        { charset: "utf-8" },
        { name: "viewport", content: "width=device-width, initial-scale=1" },
        {
          hid: "description",
          name: "description",
          content: "Personal Website of Deepu Mohan Puthrote",
        },
        { name: "format-detection", content: "telephone=no" },
      ],
      link: [
        { rel: "icon", type: "image/x-icon", href: "/favicon/favicon.ico" },
      ],
    },
  },

  modules: [
    // https://nuxt.com/modules/content
    "@nuxt/content",
    // https://nuxt.com/modules/tailwindcss
    "@nuxtjs/tailwindcss",
  ],

  components: {
    dirs: ["~/components"],
  },

  // Content module configuration: https://content.nuxtjs.org/api/configuration
  content: {
    documentDriven: true,
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {},

  runtimeConfig: {
    public: {
      baseURL: process.env.BASE_URL || "http://localhost:3000",
    },
  },

  nitro: {
    prerender: { crawlLinks: true, ignore: ["/tech", "/cv"] },
  },

  experimental: {
    payloadExtraction: true,
  },
});

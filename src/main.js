// This is the main.js file. Import global CSS and scripts here.
// The Client API can be used here. Learn more: gridsome.org/docs/client-api

import DefaultLayout from "~/layouts/Default.vue";

export default function (Vue, { router, head, isClient }) {
  // Set default layout as a global component
  Vue.component("Layout", DefaultLayout);

  head.meta.push({
    name: "keywords",
    content:
      "Deepu, Mohan, Puthrote, Deepu Mohan, Deepu Puthrote, Mohan Puthrote, Deepu Mohan Puthrote, Polyglot, Fullstack, Software Engineer, Data Engineer, Engineer, Scala Engineer, Java Developer, Javascritpt Developer, Scala Developer, Python Developer, Technology enthusiast",
  });
}

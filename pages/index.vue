<template>
  <main class="flex-grow content">
    <nuxt-content :document="page" />
  </main>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  async asyncData({ $content }) {
    const page = await $content('index').fetch()

    return {
      page,
    }
  },
})
</script>


<style type="text/css">
/*.nuxt-content Styles */
/* Global */

.nuxt-content-container {
  @apply flex-grow; /* grow the container so footer stays at the bottom */
}

.nuxt-content {
  @apply px-4 pt-2 leading-relaxed justify-center text-justify text-lg;
}

/* Heading */
.nuxt-content h1, h2 {
  @apply text-base font-semibold;
}

.nuxt-content h1 {
  @apply text-5xl mb-8;
}

.nuxt-content h2 {
  @apply text-2xl mb-6;
}

/* Links */
.nuxt-content a {
  @apply text-gray-800;
  position: relative;
}

.nuxt-content a:after {
  @apply bg-gray-400 -z-1 absolute top-2/3 -bottom-0 right-0.5 -left-0.5;
  content: "";
  transition: top 200ms cubic-bezier(0, 0.8, 0.13, 1);
}

.nuxt-content a:hover:after {
  @apply top-0;
}

/* Paragraph */
.nuxt-content p {
  @apply mb-4 max-w-3xl;
}

/* screen md */
@screen md {
  .nuxt-content {
    @apply px-2;
  }
}
</style>

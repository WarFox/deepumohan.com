<template>
    <nuxt-content :document="page" />
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  async asyncData({ $content, params }) {
    const slug = params.slug
    const page = await $content(slug).fetch()
    return { slug, page }
  },
})
</script>

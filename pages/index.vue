<template>
  <nuxt-content :document="page" />
</template>

<script lang="ts">
import Vue from "vue";

export default Vue.extend({
  async asyncData({ $content }) {
    const page = await $content("index").fetch();

    return {
      page,
    };
  },
});
</script>

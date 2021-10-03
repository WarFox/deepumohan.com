<template>
  <div class="container">
    <div v-if="error.statusCode === 404">
      <h1>404 Page not found</h1>
    </div>
    <h1 v-else>An error occurred</h1>
    <NuxtLink to="/">Home page</NuxtLink>
  </div>
</template>

<script lang="ts">
export default {
  props: {
    error: {
      type: Object,
      default() {
        return {};
      },
    },
  },
};
</script>

<template>
  <div class="container mx-auto flex flex-col min-h-screen">
    <Navbar />
    <slot />
    <Footer />
  </div>
</template>

<script>
import Navbar from "~/components/Navbar.vue";
import Footer from "~/components/Footer.vue";

export default {
  components: {
    Navbar,
    Footer,
  },
};
</script>

<style>
body {
  @apply bg-gray-200;
}
</style>

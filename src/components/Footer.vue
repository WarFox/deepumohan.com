<template>
  <footer class="footer">
    <span class="footer__text">
      <span>© Deepu Mohan Puthrote 2008 - {{ new Date().getFullYear() }}</span>
      <g-link to="/terms" class="footer__link">Terms</g-link>
      <g-link to="/privacy-policy" class="footer__link">Privacy</g-link>
    </span>
    <Social />
  </footer>
</template>

<script>
import Social from "~/components/Social.vue";

export default {
  components: {
    Social,
  },
};
</script>

<style type="text/css">
.footer {
  @apply flex items-center flex-col-reverse justify-between py-2 px-2;
}

.footer__text {
  @apply text-gray-700 py-1 self-start text-xs;
}

.footer__link {
  @apply pl-3;
}

.footer__link:hover {
  @apply text-gray-900;
}

@screen sm {
  .footer {
    @apply flex-row;
  }

  .footer_text {
    @apply text-sm;
  }

  .footer__link {
    @apply pl-6;
  }
}
</style>

<template>
  <footer class="footer">
    <span class="footer__text">
      <span>© Deepu Mohan Puthrote 2008 - {{ new Date().getFullYear() }}</span>
      <NuxtLink to="/terms/" class="footer__link">Terms</NuxtLink>
      <NuxtLink to="/privacy-policy/" class="footer__link">Privacy</NuxtLink>
    </span>
    <Social />
  </footer>
</template>

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

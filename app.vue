<template>
  <div class="container mx-auto flex flex-col min-h-screen">
    <Navbar />
    <main class="flex-grow content">
      <NuxtPage />
    </main>
    <FooterSection />
  </div>
</template>

<style type="text/css">
body {
  @apply bg-gray-200;
}

/*.content Styles */
/* Global */

.content {
  @apply px-4 pt-2 leading-relaxed justify-center text-justify text-lg;
}

/* Heading */
.content h1,
h2 {
  @apply text-base font-semibold;
}

.content h1 {
  @apply text-5xl mb-8;
}

.content h2 {
  @apply text-2xl mb-6;
}

/* Links */
.content a {
  @apply text-gray-800;
  position: relative;
}

.content a:after {
  @apply bg-gray-400 -z-1 absolute top-2/3 -bottom-0 right-0.5 -left-0.5;
  content: "";
  transition: top 200ms cubic-bezier(0, 0.8, 0.13, 1);
}

.content a:hover:after {
  @apply top-0;
}

/* Paragraph */
.content p {
  @apply mb-4 max-w-3xl;
}

/* screen md */
@screen md {
  .content {
    @apply px-2;
  }
}
</style>

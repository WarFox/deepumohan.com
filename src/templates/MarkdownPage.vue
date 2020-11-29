<template>
  <Layout>
    <main class="flex-grow content">
        <VueRemarkContent />
    </main>
  </Layout>
</template>

<script>
export default {
  metaInfo() {
    return {
        title: this.$page.markdownPage.title
    };
  },
};
</script>

<page-query>
    query VueRemarkPage ($id: ID!) {
        markdownPage(id: $id) {
            title
        }
    }
</page-query>


<style type="text/css">
 /*.content Styles */
 /* Global */
 .content {
     @apply p-2 leading-relaxed text-lg;
 }

 /* Links */
 .content a {
     @apply text-gray-800 border-b;
 }

 .content a:hover {
     @apply underline;
 }

 /* Paragraph */
 .content p {
     @apply mb-4;
 }

 /* Lists */
 .content ul,
 .content ol {
     @apply mb-4 ml-8;
 }

 .content li > p,
 .content li > ul,
 .content li > ol {
     @apply mb-0;
 }

 .content ol {
     @apply list-decimal;
 }

 .content ul {
     @apply list-disc;
 }

 .content h2 {
     @apply text-xl;
 }

</style>

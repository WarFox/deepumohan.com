<template>
  <a :href="fullURL">
    <slot />
  </a>
</template>

<script setup lang="ts">
const config = useRuntimeConfig();

interface Props {
  to: string;
}

const props = withDefaults(defineProps<Props>(), {
  to: "",
});

const fullURL = new URL(props.to, config.public.baseURL);
</script>

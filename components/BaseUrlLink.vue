<template>
  <a :href="fullURL"><slot></slot></a>
</template>

<script lang="ts">
import Vue from "vue";

interface config {
  baseURL: string;
}

export default Vue.extend({
  props: {
    to: {
      type: String,
      default: "",
    },
  },

  data({ $config }: { $config: config }) {
    return {
      fullURL: new URL(this.to, $config.baseURL),
    };
  },
});
</script>

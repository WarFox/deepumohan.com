<template>
  <span>{{ text }}<span class="blinking-cursor">|</span></span>
</template>

<script lang="ts">
import type { PropType } from "vue";

const typingDelay = 100; // lower is faster
const erasingDelay = 100;
const nextItemDelay = 1000;

function delay(ms: number) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

const TypeEffect = {
  props: {
    items: {
      type: Array as PropType<string[]>,
      default: () => [""],
    },
  },
  data() {
    return {
      text: "",
      index: 0,
    };
  },
  created() {
    delay(200);
    this.typeEffect();
  },
  methods: {
    async typeEffect() {
      while (true) {
        await this.typeText();
        await delay(nextItemDelay);
        await this.eraseText();
        await delay(nextItemDelay);
        this.nextText();
      }
    },
    async typeText() {
      const { items, index } = this;
      const text = items[index];
      for (const char of text) {
        this.text += char;
        await delay(typingDelay);
      }
    },
    async eraseText() {
      const { text } = this;
      for (let i = 0; i < text.length; i++) {
        this.text = this.text.slice(0, -1);
        await delay(erasingDelay);
      }
    },
    nextText() {
      const { index, items } = this;
      if (index < items.length - 1) {
        this.index += 1;
      } else {
        this.index = 0;
      }
    },
  },
};

export default TypeEffect;
</script>

<style>
/* https://codepen.io/ArtemGordinsky/pen/GnLBq */

.blinking-cursor {
  @apply text-xl text-gray-800 font-semibold;
  -webkit-animation: 1s blink step-end infinite;
  -moz-animation: 1s blink step-end infinite;
  -ms-animation: 1s blink step-end infinite;
  -o-animation: 1s blink step-end infinite;
  animation: 1s blink step-end infinite;
}

@keyframes "blink" {
  from,
  to {
    color: transparent;
  }
  50% {
    color: black;
  }
}

@-moz-keyframes blink {
  from,
  to {
    color: transparent;
  }
  50% {
    color: black;
  }
}

@-webkit-keyframes "blink" {
  from,
  to {
    color: transparent;
  }
  50% {
    color: black;
  }
}

@-ms-keyframes "blink" {
  from,
  to {
    color: transparent;
  }
  50% {
    color: black;
  }
}

@-o-keyframes "blink" {
  from,
  to {
    color: transparent;
  }
  50% {
    color: black;
  }
}
</style>

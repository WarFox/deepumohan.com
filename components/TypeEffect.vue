<template>
  <span>{{ typedText }}<span class="blinking-cursor">|</span></span>
</template>

<script lang="ts">
import { setTimeout } from "timers";
import Vue from "vue";

const TypeEffect = Vue.extend({
  data() {
    return {
      typedText: "",
      isTyping: false,
      items: [
        "Software Engineering",
        "Data Engineering",
        "Frontend Engineering",
        "Backend Engineering",
        "DevOps",
        "System Design",
        "API Design",
      ],
      itemIndex: 0,
      charIndex: 0,
      typingDelay: 100, // lower is faster
      erasingSpeed: 100,
      newTextDelay: 1000,
    };
  },
  created() {
    setTimeout(this.typeTheText, this.newTextDelay + 200);
  },
  methods: {
    hasMoreChars() {
      const { charIndex, itemIndex, items } = this;
      return charIndex < items[itemIndex].length;
    },
    typeTheText() {
      const { items, itemIndex, charIndex } = this;
      if (this.hasMoreChars()) {
        this.typedText += items[itemIndex].charAt(charIndex);
        this.charIndex += 1;
        setTimeout(this.typeTheText, this.typingDelay);
      } else {
        setTimeout(this.eraseText, this.newTextDelay);
      }
    },
    eraseText() {
      const { charIndex, itemIndex, items } = this;
      if (charIndex > 0) {
        this.typedText = items[itemIndex].substring(0, charIndex - 1);
        this.charIndex -= 1;
        setTimeout(this.eraseText, this.erasingSpeed);
      } else {
        this.itemIndex += 1;
        if (itemIndex >= items.length) this.itemIndex = 0;
        setTimeout(this.typeTheText, this.typingDelay + 1000);
      }
    },
  },
});

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

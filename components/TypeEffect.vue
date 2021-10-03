<template>
  <span>{{ typedText }}<span class="blinking-cursor">|</span></span>
</template>

<script lang="ts">
import { setTimeout } from "timers";

export default {
  data: () => {
    return {
      typedText: "",
      isTyping: false,
      data: [
        "Software Engineering",
        "Data Engineering",
        "Frontend Engineering",
        "Backend Engineering",
        "DevOps",
        "System Design",
        "API Eesign",
      ],
      dataIndex: 0,
      charIndex: 0,
      typingDelay: 100, // lower is faster
      erasingSpeed: 100,
      newTextDelay: 1000,
    };
  },
  created() {
      setTimeout(this.typeText, this.newTextDelay + 200);
  },
  methods: {
    typeText() {
      if (this.charIndex < this.data[this.dataIndex].length) {
        if (!this.isTyping) this.isTyping = true;
        this.typedText += this.data[this.dataIndex].charAt(this.charIndex);
        this.charIndex += 1;
        setTimeout(this.typeText, this.typingDelay);
      } else {
        this.isTyping = false;
        setTimeout(this.eraseText, this.newTextDelay);
      }
    },
    eraseText() {
      if (this.charIndex > 0) {
        if (!this.isTyping) this.isTyping = true;
        this.typedText = this.data[this.dataIndex].substring(
          0,
          this.charIndex - 1
        );
        this.charIndex -= 1;
        setTimeout(this.eraseText, this.erasingSpeed);
      } else {
        this.isTyping = false;
        this.dataIndex += 1;
        if (this.dataIndex >= this.data.length) this.dataIndex = 0;
        setTimeout(this.typeText, this.typingDelay + 1000);
      }
    },
  },
};
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

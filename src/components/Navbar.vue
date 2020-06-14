<template>
  <header class="header">
    <div class="navbar">
      <div class="navbar__brand">
        <img
          class="navbar__brand_img"
          src="https://s.gravatar.com/avatar/f66dfe536cc7c61f0808ace8567d15db?s=48"
        />
        <span class="navbar__brand_text"
          ><g-link to="/">Deepu Mohan Puthrote</g-link></span
        >
      </div>

      <div class="sm:hidden">
        <button class="navbar__button" @click="isOpen = !isOpen">
          <svg
            class="fill-current h-3 w-3"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <title>Menu</title>
            <path
              v-if="isOpen"
              fill-rule="evenodd"
              d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
            />
            <path
              v-if="!isOpen"
              fill-rule="evenodd"
              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
            />
          </svg>
        </button>
      </div>
    </div>

    <nav :class="isOpen ? 'block' : 'hidden'" class="sm:block">
      <ul class="navbar__items">
        <li class="navbar__item navbar__item--first">
          <a href="/" aria-current="page" class="active--exact navbar__link-active">Home</a>
        </li>
        <li v-for="(item, index) in items" class="navbar__item">
          <a v-bind:href="item.link"> {{ item.text }} </a>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Navbar",
  data() {
    return {
      isOpen: false,
      items: [
        { text: "Technology Blog", link: "/tech/" },
        // { text: "Personal Blog", link: "/blog/" },
        { text: "CV", link: "/cv/" },
      ],
    };
  },
};
</script>

<style>
.header {
  @apply mb-6 mt-2 items-center px-2;
}
@screen sm {
  .header {
    @apply flex justify-between;
  }
}

.navbar {
  @apply flex items-center justify-between flex-wrap py-6;
}

.navbar__brand {
  @apply flex items-center;
}

.navbar__brand_img {
  @apply rounded-full h-12 w-12 flex justify-center;
}
.navbar__brand_text {
  @apply ml-3 font-semibold text-xl tracking-tight;
}
@screen sm {
  .navbar__brand_text {
    @apply ml-4;
  }
}

.navbar__button {
  @apply block px-3 py-2 rounded text-gray-500 border border-gray-500;
}
.navbar__button:hover {
  @apply text-gray-700 border-gray-700;
}
.navbar__button:focus {
  @apply text-gray-700 border-gray-700 outline-none;
}

.navbar__items {
  @apply items-center;
}
@screen sm {
  .navbar__items {
    @apply flex;
  }
}

.navbar__item {
  @apply block mt-3 ml-2 px-2;
}
.navbar__item:hover {
  @apply bg-gray-200;
}

.navbar__item--first {
  @apply mt-0;
}
@screen sm {
  .navbar__item {
    @apply mt-0;
  }
}

.navbar__link-active {
  @apply border-b-2;
}
</style>

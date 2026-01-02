<template>
  <div>
    <Component :is="link.url ? Link : 'span'" v-for="link in links" :key="link.label" :href="link.url" :class="[
      'px-4 py-2 rounded mr-2',
      link.active
        ? 'bg-blue-500 text-white'
        : 'bg-gray-200'
    ]" v-html="link.label" />
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
  links: {
    type: Array,
    required: true,
  },
}
);
</script>
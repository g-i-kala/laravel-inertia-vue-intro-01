<template>
    <Link
    :class="isActive  ? 
      'text-blue-700 font-bold text-lg hover:underline' :
      'text-blue-500 text-lg hover:underline'" 
      :href="href" v-bind="$attrs"><slot /></Link>
</template>

<script setup>
   import { Link, usePage } from '@inertiajs/vue3';
   import { computed } from 'vue';
 const props = defineProps({
    href: {
      type: String,
      required: true,
    }
  });

  const page = usePage();
  const isActive = computed(() =>
  props.href === '/'
    ? page.url === '/'
    : page.url.startsWith(props.href)
)
</script>
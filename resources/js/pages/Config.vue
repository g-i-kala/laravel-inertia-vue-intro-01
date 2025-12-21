<template>

    <div class="p-8">
        <h1 class="text-3xl">Config</h1>
    </div>

</template>

<script setup>
import Layout from '../shared/Layout.vue';
const { name } = defineProps({
    name: String,
});
defineOptions({
        layout: Layout,
    });
</script>

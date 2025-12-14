<template>
<div class="p-8">
    <h1 class="text-3xl">Hello {{ name }}</h1>
    <Nav />
</div>

</template>

<script setup>
     import Nav from '../shared/Nav.vue';
    const { name } = defineProps({
        name: String,
    });

</script>
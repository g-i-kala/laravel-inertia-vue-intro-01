<template>
    <Layout>
        <div class="p-8">
            <h1 class="text-3xl">Hello {{ name }}</h1>
        </div>
    </Layout>
</template>

<script setup>
     import Layout from '../shared/Layout.vue';
    const { name } = defineProps({
        name: String,
    });

</script>
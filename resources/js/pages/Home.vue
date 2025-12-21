<template>

    <Head>
        <title>
            Home
        </title>
    </Head>
    <div class="p-8">
        <h1 class="text-3xl">Hello {{ name }}</h1>
    </div>

</template>

<script setup>
    import { Head } from '@inertiajs/vue3';
    const { name } = defineProps({
        name: String,
    });
  
</script>
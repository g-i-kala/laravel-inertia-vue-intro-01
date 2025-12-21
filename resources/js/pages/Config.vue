<template>

    <Head>
        <title>
            Config
        </title>
    </Head>
    <div class="p-8">
        <h1 class="text-3xl">Config</h1>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
const { name } = defineProps({
    name: String,
});

</script>

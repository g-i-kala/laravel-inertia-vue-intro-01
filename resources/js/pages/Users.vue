<template>

    <Head>
        <title>
            Users
        </title>
        <meta name="description" content="User management page" head-key="description" />
    </Head>
    <div class="p-8">
        <h1 class="text-3xl">Users</h1>
    </div>
    <div class="p-8 pt-500">
        Current time is {{ time }}. <br />
        <NavLink class="list-none" href="/users" preserve-scroll>Refresh</NavLink>
    </div>
</template>

<script setup>
    import { Head } from '@inertiajs/vue3';
defineProps({
    time: String,
});
</script>

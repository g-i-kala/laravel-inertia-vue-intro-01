<template>
    <Layout>
        <div class="p-8">
            <h1 class="text-3xl">Users</h1>


        </div>
        <div class="p-8 pt-500">
            Current time is {{ time }}. <br>
            <NavLink class="list-none" href="/users" preserve-scroll>Refresh</NavLink>
        </div>
    </Layout>

</template>

<script setup>
      import Layout from '../shared/Layout.vue';
import Nav from '../shared/Nav.vue';
    defineProps({
        time: String
        ,}
    );

</script>
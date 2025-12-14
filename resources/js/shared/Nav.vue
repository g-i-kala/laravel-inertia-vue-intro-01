<template>
    <nav class="list-disc px-8">
        <ul>
            <li>
                <Link href="/">Home</Link>
            </li>
            <li>
                <Link href="/users">Users</Link>
            </li>
            <li>
                <Link href="/config">Config</Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
  import { Link } from '@inertiajs/vue3';
  defineProps();
</script>

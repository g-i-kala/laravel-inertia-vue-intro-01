<template>
    <nav class="list-disc px-8">
        <ul class="flex space-x-4">
            <li>
                <NavLink href="/">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users">Users</NavLink>
            </li>
            <li>
                <NavLink href="/config">Config</NavLink>
            </li>
            <li>
                <NavLink
                    href="/logout"
                    method="post"
                    as="button"
                    :data="{ foo: 'bar' }"
                    >Logout</NavLink
                >
            </li>
        </ul>
    </nav>
</template>

<script setup>
import NavLink from './NavLink.vue';
defineProps();
</script>

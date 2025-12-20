<template>
  <section class="class=p-8">
    <header class="flex bg-amber-100 p-2 justify-between">
      <div class="flex space-x-2 items-center">
        <h1 class="text-xl font-bold">My app</h1>
        <p> welcome {{ $page.props.auth.user.username }}</p>
      </div>
      <Nav />
    </header>
  </section>

  <section class="p-8">
    <div class="mx-auto max-w-3xl">
      <slot />
    </div>
  </section>
</template>

<script setup>
import Nav from '../shared/Nav.vue';
</script>

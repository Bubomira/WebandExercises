<script setup>


</script>

<template>
  <section class="w-75 mx-auto my-3">
    <div class="d-flex gap-2 align-items-center fs-6">
        <p class="text-ligth-gray mb-0">Homepage</p>
        <span v-if="$route.name!=''" class="text-selected fs-5">&gt;</span>
        <span class="text-selected fw-bold">{{ $route.name }}</span>
    </div>
  </section>
</template>
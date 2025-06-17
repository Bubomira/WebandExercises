<script setup>


</script>

<template>
  <section class="w-75 mx-auto my-3">
    <div class="d-flex gap-2 flex-sm-no-wrap justify-content-sm-start justify-content-center flex-wrap align-items-center fs-6">
        <p class="text-ligth-gray mb-0">Homepage</p>
        <div v-if="$route.name!=''">
           <img src="../../assets/arrows/arrowBreadcrumb.svg" alt="Arrow Breadcrumb" >
        </div>
        <span class="text-selected fw-bold">{{ $route.name }}</span>
    </div>
  </section>
</template>
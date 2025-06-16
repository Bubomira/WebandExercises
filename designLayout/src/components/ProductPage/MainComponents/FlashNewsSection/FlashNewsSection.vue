<script setup lang="ts">
import FlashNewsBox from './FlashNewsBox.vue';

</script>

<template>
    <section class="bg-ligth-mint rounded-4 p-3">
         <h2 class="pb-2 fs-6 mb-1">Flash news about: <span class="fw-normal">Product:</span></h2>
            <div class="d-flex flex-wrap gap-2">
                <FlashNewsBox/>
                <FlashNewsBox/>
                <FlashNewsBox/>
            </div>
    </section>
</template>
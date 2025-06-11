<script setup lang="ts">
import FlashNewsBox from './FlashNewsBox.vue';

</script>

<template>
    <section class="bg-ligth-mint rounded-4 p-3">
         <p class="pb-2 mb-1"><span class="fw-medium">Flash news about:</span> Product:</p>
            <div class="d-flex flex-wrap gap-2">
                <FlashNewsBox/>
                <FlashNewsBox/>
                <FlashNewsBox/>
            </div>
    </section>
</template>
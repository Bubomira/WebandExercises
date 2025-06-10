<script setup>
    const props = defineProps(['heading'])
</script>

<template>
    <div class="d-flex align-items-center gap-2">
     <h4 class="d-flex dark-grey fw-medium mb-0 fs-5">{{heading}}</h4>
        <div class="fs-4">
            <img src="../../../assets/information.svg" alt="Info">
        </div>
    </div>
</template>
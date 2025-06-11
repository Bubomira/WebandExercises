<script setup>
   const props = defineProps(['percentage','isGrey'])
</script>

<template>
    <div v-if="!isGrey" class="bg-grey-section border rounded-2 px-2 d-flex align-items-center gap-1">
        <p class="mb-0 text-dark-grey fw-medium">{{ percentage }}%</p>
        <span class="text-arrow-success fs-5 fw-semibold" v-if="percentage>0">&#10138;</span>
        <span class="text-arrow-same fs-5 fw-semibold" v-if="percentage==0">&#10142;</span>
        <span class="text-arrow-danger fs-5 fw-semibold" v-if="percentage<0">&#10136;</span>
    </div>
    <div v-if="isGrey" class="bg-grey-section border rounded-2 px-2 d-flex align-items-center gap-2">
        <p class="mb-0 text-dark-grey">{{ percentage }}%</p>
        <span class="fs-5 fw-semibold">&#10138;</span>
    </div>
</template>
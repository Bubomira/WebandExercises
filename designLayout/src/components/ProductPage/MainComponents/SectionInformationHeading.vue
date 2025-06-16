<script setup>

    const props = defineProps(['heading'])
  
</script>

<template>
    <div class="d-flex mt-2 align-items-center gap-2">
     <h2 class="dark-grey fw-medium mb-0 fs-5">{{heading}}</h2>
        <div class="fs-6">
            <img 
                v-tooltip
                src="../../../assets/information.svg" 
                alt="Info" 
                data-bs-toggle="tooltip" 
                data-bs-placement="top" 
                data-bs-title="Lorem ipsum..."
            >           
        </div>
    </div>
</template>

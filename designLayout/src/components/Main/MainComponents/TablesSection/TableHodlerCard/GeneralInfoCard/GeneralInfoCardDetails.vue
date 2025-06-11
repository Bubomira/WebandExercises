<script setup>


const props = defineProps(['title','price'])

</script>

<template>
        <section class="d-flex gap-2 border align-items-center fs-6 border-table-green rounded-3 p-2">
            <p class="mb-0">{{ title }}: <span class="fw-bold">{{ price }}</span></p> 
           <div class="border rounded-2 px-1 bg-grey-section">+4%</div>      
           <div class="bg-table-green ms-auto  text-white fw-semibold px-2 rounded-3">&gt;</div>
        </section>
</template>
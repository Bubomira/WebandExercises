<script setup>

import { computed } from 'vue';

const {isRisk,isFirst,price} = defineProps(['isRisk','isFirst','price'])

let title= computed(()=>{
     if(isFirst){
        return isRisk? 'Disruption':'Price'
     }
     return isRisk? 'Erosion':'Volume'
})


</script>

<template>

        <div class="d-flex gap-2 border align-items-center fs-6 border-table-green rounded-3 p-2">
             <p class="mb-0">{{ title }}: <span class="fw-bold">€{{price}}</span></p> 
             <div v-if="!isRisk" class="text-green-number border rounded-2 px-1 bg-grey-section">+4%</div>
             <div v-else class="border rounded-2 text-red-number px-1 bg-grey-section">+4%</div>      
             <div class="ms-auto">
                <img src="../../../../../assets/arrows/arrow.svg" alt="arrow">
             </div>
        </div>

</template>
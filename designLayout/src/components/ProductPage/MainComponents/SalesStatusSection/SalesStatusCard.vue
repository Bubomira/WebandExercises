<script setup>
import PercentageCard from '../PercentageCard.vue';

const {heading,parameter,percentage,additional} = defineProps(['heading','parameter','percentage','additional'])

</script>

<template>
    <article class="bg-white col py-2 px-3 border rounded-4 d-flex flex-column">

       <h3 class="border-bottom fw-semibold fs-6 py-2">
        {{ heading }} <span class="text-table-header fw-normal ms-1">{{ additional }}</span>
       </h3>

       <div class="d-flex flex-xs-column align-items-center gap-3 mt-auto">
           <p class="fw-semibold fs-4 mb-0">{{ parameter }}</p>
           <PercentageCard :percentage="percentage"/>
       </div>
       
    </article>
</template>
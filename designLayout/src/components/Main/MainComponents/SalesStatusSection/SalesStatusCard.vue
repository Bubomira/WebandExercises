<script setup>
import PercentageCard from '../PercentageCard.vue';

   const props = defineProps(['heading','parameter','percentage'])
</script>

<template>
    <article class="bg-white col py-2 px-3 border rounded-4 d-flex flex-column">
       <h5 class="border-bottom fs-6 py-2">{{ heading }}</h5>

       <section class="d-flex align-items-center gap-3 mt-auto">
           <p class="fw-semibold fs-4 mb-0">{{ parameter }}</p>
           <PercentageCard :percentage="percentage"/>
       </section>
       
    </article>
</template>
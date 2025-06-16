<script setup>
   import { computed } from 'vue';

   import SectionInformationHeading from '../SectionInformationHeading.vue';
   import InfoCard from './InfoCard/InfoCard.vue';
   import ProductGraph from './ProductGraph.vue';
   import ProductTable from './ProductTable.vue';
   
   const {isRisk} = defineProps(['isRisk'])

   const heading = computed(()=>{
      return !isRisk? "Sales Uplift":"Risk"
   })

</script>


<template>
  <section class="d-flex gap-3 flex-column bg-grey-section pt-2 pb-3 px-3 border border-medium-grey rounded-4 flex-grow-1">   
    <div>
        <div class="d-flex gap-2 align-items-center">
            <div class="d-flex flex-column justify-content-between  min-table">
                <div class="mb-3">
                    <SectionInformationHeading :heading="heading"/>
                    <span class="fs-xs text-table-header" v-if="!isRisk">(All values in k€)</span>
                </div>
                <ProductGraph :value="6" :is-risk="isRisk"/>                   
            </div>
            <InfoCard :is-risk="isRisk"/>
        </div>
        
    </div>      
    <ProductTable :is-risk="isRisk"/>
 </section>
</template>
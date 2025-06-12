<script setup>
   import SectionInformationHeading from '../../SectionInformationHeading.vue';
   import GeneralInfoCard from './GeneralInfoCard/GeneralInfoCard.vue';
   import ProductGraph from '../ProductGraph.vue';
   import ProductTable from './ProductTable.vue';
   
   const {heading} = defineProps(['heading'])
   const isRisk=heading=='Risk';
</script>


<template>
 <section class="bg-grey-section py-2 px-3 border border-medium-grey rounded-4 flex-grow-1">
    <section class="container">
        <section class="row gap-1">
            <div class="col">
                <SectionInformationHeading :heading="heading"/>
                <div class="mt-4 d-flex flex-column justify-content-center align-items-center">
                    <ProductGraph :is-risk="isRisk"/>                   
                </div>
            </div>
            <GeneralInfoCard :is-risk="isRisk"/>
        </section>
        <section class="row mt-4 bg-white border rounded-2">
          <ProductTable :is-risk="isRisk"/>
        </section>
    </section>
 </section>
</template>
<script setup>
   import SectionInformationHeading from '../../SectionInformationHeading.vue';
   import GeneralInfoCard from './GeneralInfoCard/GeneralInfoCard.vue';
import ProductTable from './ProductTable/ProductTable.vue';
   const props = defineProps(['heading'])

</script>


<template>
 <section class="bg-grey-section py-2 px-3 border border-medium-grey rounded-4 flex-grow-1">
    <section class="container">
        <section class="row gap-1">
            <div class="col">
                <SectionInformationHeading :heading="heading"/>
                <div>TABLE</div>
            </div>
            <GeneralInfoCard :isRisk="props.heading=='Risk'"/>
        </section>
        <section class="row mt-4 bg-white border rounded-2">
          <ProductTable/>
        </section>
    </section>
 </section>
</template>
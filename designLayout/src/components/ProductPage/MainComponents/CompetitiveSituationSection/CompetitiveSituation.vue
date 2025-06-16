<script setup>
 import SectionInformationHeading from '../SectionInformationHeading.vue';
 import CompetitiveSituationCard from './CompetitiveSituationCard.vue';

 import data from '../../../../../competitiveSituationData.json';
</script>

<template>
     <section class="bg-grey-section py-3 px-3 border border-medium-grey rounded-4">
        <SectionInformationHeading heading="Competitive situation"/>
        <div class="d-flex mt-2 flex-wrap gap-3">
          <CompetitiveSituationCard v-for="item in data" :item="item"/>
        </div>
    </section>
</template>
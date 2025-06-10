<script setup>
   import SectionInformationHeading from '../../SectionInformationHeading.vue';
import GeneralInfoCard from './GeneralInfoCard.vue';
   const props = defineProps(['heading'])
</script>


<template>
 <section class="bg-grey-section py-2 px-3 border border-medium-grey rounded-4 flex-grow-1">
    <section class="container">
        <section class="row gap-3">
            <div class="col">
                <SectionInformationHeading :heading="heading"/>
            </div>
            <GeneralInfoCard/>
        </section>
    </section>
 </section>
</template>
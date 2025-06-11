<script setup lang="ts">
import GeneralInfoCardDetails from './GeneralInfoCardDetails.vue';
import GerneralInfoCardHeader from './GerneralInfoCardHeader.vue';

const props = defineProps(['isRisk']);

</script>

<template>
    <article class="bg-white col py-2 px-3 border rounded-3 d-flex flex-column">
            <GerneralInfoCardHeader/>
        <section class="my-2 d-flex flex-column gap-1 mb-auto">
            <GeneralInfoCardDetails v-if="isRisk" title="Disruption" price="$478 789"/>
            <GeneralInfoCardDetails v-if="isRisk" title="Erosion" price="$200 000"/>

            <GeneralInfoCardDetails v-if="!isRisk" title="Price" price="$478 789"/>
            <GeneralInfoCardDetails v-if="!isRisk" title="Volume" price="$200 000"/>
        </section>
    </article>
</template>
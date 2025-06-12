<script setup lang="ts">

import GerneralInfoCardHeader from './GerneralInfoCardHeader.vue';
import RiskDetails from './GeneralInfoCardDetails/RiskDetails.vue'
import SalesUpliftDetails from './GeneralInfoCardDetails/SalesUpliftDetails.vue'

const props = defineProps(['isRisk']);

</script>

<template>
    <article class="bg-white col py-2 px-3 border rounded-3 d-flex flex-column">
            <GerneralInfoCardHeader/>
        <section class="my-2 d-flex flex-column gap-1 mb-auto">

            <SalesUpliftDetails v-if="!isRisk"/>
            <RiskDetails v-else/>
        </section>
    </article>
</template>
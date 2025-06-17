<script setup >

import PercentageCard from '../../PercentageCard.vue';
import InfoCardDetails from './InfoCardDetails.vue';

const {isRisk} = defineProps(['isRisk']);

</script>

<template>
    <article class="bg-white p-3 border rounded-3 d-flex flex-column flex-fill">

            <div class="border-bottom d-flex flex-column flex-sm-row align-items-center">
                <div class="flex-grow-1">
                    <span class="fs-6">Total</span>
                    <p class="mb-1 text-dark-grey fw-bold">€678 789</p>
                </div>
                <PercentageCard percentage="+1"/>
            </div>
           <div class="d-flex mt-2 flex-column justify-content-center gap-1">
                <InfoCardDetails :is-first="true" :is-risk="isRisk" price="478 789"/>
                <InfoCardDetails :is-first="false" :is-risk="isRisk" price="200 000"/>
           </div>
    </article>
</template>
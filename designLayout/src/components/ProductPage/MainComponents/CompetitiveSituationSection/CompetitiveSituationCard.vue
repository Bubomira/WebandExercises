<script setup>
  import PercentageCard from '../PercentageCard.vue';
import ProgressBar from './ProgressBar.vue';
  const props = defineProps(['item'])
</script>

<template>
    <div class="bg-white col p-3 mt-2 border rounded-3">
        <div class="d-flex align-items-center pb-3 justify-content-between border-bottom">
           <h3 class="dark-grey fw-medium mb-0 fs-5">{{item.heading}}</h3>
           <div class="fs-6">
               <img 
               v-tooltip
               src="../../../../assets/information.svg" 
               alt="Info"
               data-bs-toggle="tooltip" 
               data-bs-placement="top" 
               data-bs-title="Lorem ipsum..."
               >
           </div>
        </div>
        <div>
            <div class="d-flex align-items-center gap-3">
                <p class="mb-0 py-1 fw-bold fs-3">{{item.value }}</p>
                <PercentageCard :percentage="item.percentage" :is-grey="true"/>
            </div>
        </div>

       <ProgressBar :value="item.value"/>
    </div>
</template>
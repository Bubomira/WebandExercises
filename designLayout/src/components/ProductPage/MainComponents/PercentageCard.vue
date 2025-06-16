<script setup>
   const props = defineProps(['percentage','isGrey'])
</script>

<template>

    <div v-if="!isGrey" class="bg-grey-section border rounded-2 px-2 d-flex align-items-center gap-2">

        <p class="mb-0 text-dark-grey fw-medium ">{{ percentage }}%</p>
        <div class="py-1" v-if="percentage>0">
            <img src="../../../assets/arrows/greenArrowIncrease.svg" alt="Green Arrow Increase">
        </div>
        <div class="py-1" v-if="percentage==0">
            <img src="../../../assets/arrows/yellowArrowStable.svg" alt="Yellow Arrow Stable">
        </div>
        <div class="py-1" v-if="percentage<0">
            <img src="../../../assets/arrows/redArrowDecrease.svg" alt="Red Arrow Decrease">
        </div>
        
    </div>

    <div v-if="isGrey" class="bg-grey-section border rounded-2 px-2 d-flex align-items-center gap-2">
        <p class="mb-0 text-dark-grey">{{ percentage }}%</p>

         <div class="py-1">
            <img src="../../../assets/arrows/blackArrow.svg" alt="Black Arrow">
        </div>
    </div>

</template>
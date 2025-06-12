<script setup>
   import GeneralInfoCardDetails from './GeneralInfoCardDetails.vue';

   const props = defineProps(['title','isRisk'])
</script>

<template>
    <GeneralInfoCardDetails isRisk="false" title="Price" price="$478 789"/>
    <GeneralInfoCardDetails isRisk="false" title="Volume" price="$200 000"/>
</template>
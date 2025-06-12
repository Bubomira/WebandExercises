<script setup>
   import GeneralInfoCardDetails from './GeneralInfoCardDetails.vue';

   const props = defineProps(['title','isRisk'])
</script>

<template>
    <GeneralInfoCardDetails :is-risk="false" title="Price" price="$478 789"/>
    <GeneralInfoCardDetails :is-risk="false" title="Volume" price="$200 000"/>
</template>
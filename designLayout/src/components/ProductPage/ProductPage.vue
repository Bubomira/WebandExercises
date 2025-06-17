<script setup>
   import CompetitiveSituation from './MainComponents/CompetitiveSituationSection/CompetitiveSituation.vue';
   import FlashNewsSection from './MainComponents/FlashNewsSection/FlashNewsSection.vue';
   import SalesStatusSection from './MainComponents/SalesStatusSection/SalesStatusSection.vue'
   import StickyMenu from './MainComponents/StickyMenu/StickyMenu.vue';
   import TableCard from './MainComponents/TableCard/TableCard.vue';
</script>

<template>
    <main class="mt-2 w-75 mx-auto h-75">
        <div class="d-flex flex-column gap-3">
            <FlashNewsSection/>
            <SalesStatusSection/>
            <div class="d-flex flex-wrap flex-xxl-nowrap gap-3">
                <TableCard :is-risk="false"/>
                <TableCard :is-risk="true"/>
            </div> 
            <CompetitiveSituation/>
        </div>
    </main>
    <StickyMenu/>
</template>
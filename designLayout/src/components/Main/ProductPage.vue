<script setup>
   import CompetitiveSituation from './MainComponents/CompetitiveSituationSection/CompetitiveSituation.vue';
   import FlashNewsSection from './MainComponents/FlashNewsSection/FlashNewsSection.vue';
   import SalesStatusSection from './MainComponents/SalesStatusSection/SalesStatusSection.vue'
   import StickyMenu from './MainComponents/StickyMenu/StickyMenu.vue';
   import TableHolderContainer from './MainComponents/TablesSection/TableHolderContainer.vue';
</script>

<template>
    <main class="mt-2 w-75 mx-auto h-75">
        <section class="d-flex flex-column gap-3">
            <FlashNewsSection/>
            <SalesStatusSection/>
            <TableHolderContainer/>
            <CompetitiveSituation/>
        </section>
    </main>
    <StickyMenu/>
</template>
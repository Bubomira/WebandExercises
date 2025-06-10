<script setup>
   import FlashNewsSection from './MainComponents/FlashNewsSection/FlashNewsSection.vue';
   import PagePathLinks from './MainComponents/PagePathLinks.vue';
   import SalesStatusSection from './MainComponents/SalesStatusSection/SalesStatusSection.vue'
import TableHolderContainer from './MainComponents/TablesSection/TableHolderContainer.vue';
</script>

<template>
    <main class="mt-2 w-75 mx-auto">
        <section class="d-flex flex-column gap-3">
            <PagePathLinks/>
            <FlashNewsSection/>
            <SalesStatusSection/>
            <TableHolderContainer/>
        </section>
    </main>
</template>
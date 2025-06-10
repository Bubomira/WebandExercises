<script setup >
import SalesStatusCard from './SalesStatusCard.vue';
import SectionHeading from '../SectionInformationHeading.vue';
</script>


<template>
    <section class="bg-grey-section py-2 px-3 border border-medium-grey rounded-4">
        <SectionHeading heading="Sales status"/>
        <div class="container mt-2">
            <div class="row gap-2">
                <SalesStatusCard heading="Total Sales" parameter="$86 897.467" percentage="+2"/>
                <SalesStatusCard heading="# of Customers" parameter="0" percentage="0"/>
                <SalesStatusCard heading="# of Product Groups" parameter="7" percentage="-5"/>
                <SalesStatusCard heading="# of Products" parameter="23" percentage="15"/>
            </div>
        </div>
    </section>
</template>
<script setup lang="ts">
import NavigationLink from './NavigationLink.vue';
import PagePathLinks from './PagePathLinks.vue'
</script>

<template>
    <div class="d-flex justify-content-between align-items-center px-4 border-bottom">
        <section class="d-flex gap-2 align-items-center py-2">
            <div>              
                <img src="../../assets/logo.svg" alt="Logo">
            </div>
            <h1 class="text-header fw-bold">SupplyIQ</h1>
        </section>
        <section class="d-flex align-items-center gap-3">
              <ul class="d-flex gap-4 list-unstyled align-items-end mb-0">  
                 <NavigationLink content="company"/>
                 <NavigationLink content="product"/>
                 <NavigationLink content="customer"/>
              </ul>
              <div class="border py-1 px-2 rounded-3 d-flex">
                <img src="../../assets/contact.svg" alt="Contact">
              </div>
        </section>
    </div>
    <PagePathLinks/> 
</template>





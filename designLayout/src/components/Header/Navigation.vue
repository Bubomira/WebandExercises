<script setup lang="ts">
import NavigationLink from './NavigationLink.vue';
import PagePathLinks from './PagePathLinks.vue'
</script>

<template>
    <section class="d-flex flex-column flex-sm-row justify-content-between align-items-center px-4 border-bottom">
        <div class="d-flex gap-2 align-items-center py-2">
            <div>              
                <img src="../../assets/logo.svg" alt="Logo">
            </div>
            <h1>
                <RouterLink class="text-decoration-none text-header fw-bold" to="/">SupplyIQ</RouterLink>        
            </h1>
        </div>
        <div class="d-flex align-items-sm-center justify-content-center align-items-start gap-3 flex-wrap flex-sm-nowrap">
              <ul class="d-flex flex-wrap justify-content-center flex-sm-nowrap gap-4 list-unstyled align-items-end mb-0">  
                 <NavigationLink content="company"/>
                 <NavigationLink content="product"/>
                 <NavigationLink content="customer"/>
              </ul>
              <div class="border py-1 px-2 rounded-3 d-flex mb-1">
                <img src="../../assets/contact.svg" alt="Contact">
              </div>
            </div>  
        </section>
    <PagePathLinks/> 
</template>





<script setup lang="ts">
import DropdownCalendar from './DropdownCalendar.vue';
import DropdownGroup from './DropdownGroup.vue';

</script>



<template>
        <section class="d-flex mt-3 bg-white border-top justify-content-center py-2 fixed-bottom align-items-center">
        <section class="d-flex w-75 mx-4 justify-content-between flex-wrap gap-2">
            <div class="d-flex flex-wrap gap-2">
               <DropdownCalendar date="20/11/2023 to 20/12/23"/>
               <DropdownGroup title="Product Cluster" content="Products231"/>
               <DropdownGroup title="Product Group" content="Group5123"/>
               <DropdownGroup title="Product" content="Gilette"/>
            </div>
            <div class="d-flex align-items-center gap-2">
              <button class="fw-light border-0 bg-flash-news rounded-3 text-white px-4 py-2">Price Effect</button>
              <div class="d-flex align-items-center px-1 border rounded-4 gap-1">
                  <img src="../../../../assets/minimize.svg" alt="Minimize">
                   <p class="mb-0 fs-xss">Minimize</p>
               </div>  
            </div>
        </section>   
    </section>            
        
</template>

<script setup lang="ts">
import DropdownCalendar from './DropdownCalendar.vue';
import DropdownGroup from './DropdownGroup.vue';

</script>



<template>
        <div class="d-flex mt-3 bg-white border-top justify-content-center py-2 sticky-bottom align-items-center">
        <div class="d-flex w-75 mx-4 justify-content-between flex-wrap gap-2">
            <ul class="d-flex flex-wrap gap-2 list-unstyled">

                <li class="d-flex gap-2 align-items-center border rounded-3 px-2 border-flash-news">
                   <div><img src="../../../../assets/calendar.svg" alt="Calendar"></div>
                   <p class="m-0 pt-1 fw-medium">20/11/23 to 20/12/23</p>
                </li>

               <DropdownGroup title="Product Cluster" content="Products231"/>
               <DropdownGroup title="Product Group" content="Group5123"/>
               <DropdownGroup title="Product" content="Gilette"/>

            </ul>
            <div class="d-flex align-items-center gap-2">
              <button class="fw-light border-0 bg-flash-news rounded-3 text-white px-4 py-2">Price Effect</button>
              <div class="d-flex align-items-center px-1 border rounded-4 gap-1">
                  <img src="../../../../assets/minimize.svg" alt="Minimize">
                   <p class="mb-0 fs-xss">Minimize</p>
               </div> 
            </div> 
        </div>   
    </div>            
        
</template>

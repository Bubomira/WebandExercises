<script setup>
  const props = defineProps(['value'])
</script>

<template>
      <div class="bg-progress-bar overflow-hidden rounded-3 mt-1">
            <div v-if="value>=50" class="bg-progress-green bg-gradient py-1 w-75 h-100"></div>
             <div v-if="value<50" class="bg-progress-yellow bg-gradient py-1 w-50 h-100"></div>
       </div>
       <div class="fs-xs d-flex justify-content-between text-table-header mt-1">
          <p class="mb-0"><span class="fw-semibold">0</span> Weak</p>
           <p class="mb-0">strong <span class="fw-semibold">100</span></p>
       </div>
</template>
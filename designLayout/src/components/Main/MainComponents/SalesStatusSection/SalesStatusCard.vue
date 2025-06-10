<script setup>
   const props = defineProps(['heading','parameter','percentage'])
</script>

<template>
    <article class="bg-white col py-2 px-3 border rounded-4 d-flex flex-column">
       <h5 class="border-bottom fs-6 py-2">{{ heading }}</h5>
       <section class="d-flex align-items-center gap-3 mt-auto">
           <p class="fw-semibold fs-4 mb-0">{{ parameter }}</p>

           <div class="bg-grey-section border rounded-2 px-3 d-flex align-items-center gap-1">
             <p class="mb-0 text-dark-grey fw-semibold">{{ percentage }} </p>
             <span class="text-arrow-success fs-5" v-if="percentage>0">&#8599;</span>
             <span class="text-arrow-same fs-5" v-if="percentage==0">&#8599;</span>
             <span class="text-arrow-danger fs-5" v-if="percentage<0">&#8599;</span>
           </div>

       </section>
    </article>
</template>
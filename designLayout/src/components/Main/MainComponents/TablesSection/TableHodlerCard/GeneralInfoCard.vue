<template>
    <article class="bg-white col py-2 px-3 border rounded-3 d-flex flex-column">
        <section class="border-bottom d-flex align-items-center">
            <div class="flex-grow-1">
                <span class="fs-6">Total</span>
                <p class="mb-1 text-dark-grey fw-bold">$678 789</p>
            </div>
            <div class="bg-grey-section me-auto border rounded-2 px-3 d-flex dark-grey gap-1">
              <p class="mb-0 text-dark-grey fw-semibold">+1% </p>
              <span class="text-arrow-success fs-5">&#8599;</span>
              <!-- <span class="text-arrow-danger fs-5" v-if="percentage<0">&#8599;</span> -->
            </div>
        </section>
       <section class="d-flex align-items-center gap-3 mt-auto">
           <p class="fw-semibold fs-4 mb-0"></p>


       </section>
    </article>
</template>
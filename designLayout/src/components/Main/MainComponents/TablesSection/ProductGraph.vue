<template>
  <div ref="container"></div>
  <div class="d-flex justify-content-between w-75 fs-xss">
      <p class="mb-0">0%</p>
      <p v-if="isRisk" class="mb-0 fw-semibold fs-5 text-red-outline">+{{value}}%</p>
      <p v-else class="mb-0 fs-5 fw-semibold text-green-outline">+{{value}}%</p>
      <p class="mb-0">30%</p>
  </div>

</template>

<script setup>
import { ref, onMounted } from 'vue'
import {  createHalfGreenCircle, createHalfRedCircle } from '@/createHalfCircle'

const {isRisk} = defineProps(['isRisk'])

const value=6;


const container = ref(null)

onMounted(() => {
   const svg = isRisk? createHalfRedCircle(value): createHalfGreenCircle(value)
   container.value.appendChild(svg)
})
</script>


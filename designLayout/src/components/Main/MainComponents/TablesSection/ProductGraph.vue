<template>
  <div ref="container"></div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import {  createHalfGreenCircle, createHalfRedCircle } from '@/createHalfCircle'

const {isRisk} = defineProps(['isRisk'])


const container = ref(null)

onMounted(() => {
   const svg = isRisk? createHalfRedCircle(): createHalfGreenCircle()
   container.value.appendChild(svg)
})
</script>


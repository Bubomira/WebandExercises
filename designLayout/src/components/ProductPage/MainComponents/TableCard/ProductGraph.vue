<template>
  <div ref="container"></div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import {createGreenGraph, createRedGraph } from '@/createGraph'

const {isRisk,value} = defineProps(['isRisk','value'])

const container = ref(null)

onMounted(() => {
   const svg = isRisk? createRedGraph(value): createGreenGraph(value)
   container.value.appendChild(svg)
})
</script>


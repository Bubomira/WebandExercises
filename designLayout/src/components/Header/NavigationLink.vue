<script setup>
   const props = defineProps(['content'])
</script>

<template>
    <li>
        <RouterLink 
        class="text-decoration-none text-dark-grey text-capitalize fw-semibold" 
        active-class="text-decoration-none text-selected text-capitalize fw-semibold border-bottom border-3 border-selected"
        :to="content">
            {{content}}
        </RouterLink>
        </li>
</template>
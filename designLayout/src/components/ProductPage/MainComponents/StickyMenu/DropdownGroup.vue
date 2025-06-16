<script setup>
    const props = defineProps(['title','content'])
</script>

<template>
        <li class="border border-flash-news  py-1 px-3 rounded-3">
            <span class="text-table-header fs-xs w-100">{{ title }}</span>
            <p class="m-0 mt-auto fw-medium fs-6">
                {{ content }}
            </p>
        </li>
</template>
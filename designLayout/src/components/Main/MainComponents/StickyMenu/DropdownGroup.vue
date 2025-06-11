<script setup>
    const props = defineProps(['title','content'])
</script>

<template>
    <ul class="d-flex flex-column border border-flash-news py-1 px-3 list-unstyled rounded-3">
        <li>
            <span class="text-table-header fs-xs w-100">{{ title }}</span>
            <p class="m-0 mt-auto fw-semibold">
                {{ content }}
            </p>
        </li>
    </ul>
</template>
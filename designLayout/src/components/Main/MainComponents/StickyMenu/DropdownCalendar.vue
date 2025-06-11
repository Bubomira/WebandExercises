<script setup>
    const props = defineProps(['date'])
</script>


<template>
    <ul class="d-flex align-items-center list-unstyled border border-flash-news px-3 rounded-3">
        <li class="d-flex gap-2 align-items-center">
            <div><img src="../../../../assets/calendar.svg" alt="Calendar"></div>
            <p class="m-0 pt-1 fw-semibold">{{date}}</p>
        </li>
    </ul>
</template>
<script setup>

import { useFormStore } from '@/formStore';

import { labels } from '@/constants';

const {name,disabled} = defineProps({
    'name':'',
    'disabled':false
})


const store = useFormStore()

</script>

<template>
    <section class="form-group">
        <label for="name">{{labels[name]}}: </label>
              <input 
                    v-model="store.$state[name]"
                    :id="name" 
                    :name="name"
                    :disabled="disabled"
                    >
    </section>
</template>

<style>
 .form-group{
    display: flex;
    flex-direction: column;
    gap: 0.5em;
 }

 .form-group input {
    border: none;
    padding: 0.2em ;
    border-radius: 0.3
 }
</style>

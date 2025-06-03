<script setup>

import { computed } from 'vue';
import InputGroup from '../FormFields/InputGroup.vue';

import { useFormStore } from '@/formStore';
import { labels,DELIVERY_MESSAGE } from '@/constants';

const store =useFormStore()

const showAdress = computed(()=>{
    return store.$state.delivery=='address' || store.$state.delivery=='ekont'
})


</script>


<template>

    <InputGroup v-if="showAdress" name="address"  />
    <p v-else>{{ DELIVERY_MESSAGE }}</p>
    <InputGroup name="telephone" />
    
    <section class="form-group">
        <label for="method">{{labels.method}} </label>
        <select v-model="store.$state.method">
              <option value="acquantance">Приятел или колега</option>
              <option value="facebook">Facebook</option>
              <option value="instagram">Instagram</option>
              <option value="other">Друго</option>
        </select>
    </section>
    <section v-if="store.$state.method=='other'" class="form-group">
        <label for="knowledge">Моля, посочете как: </label>
        <textarea v-model="store.$state.knowledge" id="knowledge" placeholder="..."></textarea>
    </section>
</template>

<style>
.form-group select, .form-group textarea {
    border: none;
    padding: 0.2em ;
    border-radius: 0.3
 }
</style>
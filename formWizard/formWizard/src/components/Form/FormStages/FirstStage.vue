<script setup>
import { labels,MAX,MIN,EKONT_PRICE, ADDRESS_PRICE } from '@/constants';
import InputGroup from '../FormFields/InputGroup.vue';

import { useFormStore } from '@/formStore';


const store = useFormStore()

store.$state.cardNumber

</script>

<template>
    
    <InputGroup name="name" />
    <InputGroup name="email"/>

        <section class="form-group">
        <label for="cardNumber">Брой карти: </label>
                  <input
                   v-model="store.$state.cardNumber" 
                    id="cardNumber" 
                    name="cardNumber" 
                    type="number" 
                    :max="MAX"
                    :min="MIN"
                    >
        </section>

    <section class="form-group">
        <label for="delivery">{{labels.delivery}} </label>
        <select v-model="store.$state.delivery" name="delivery" id="delivery">
              <option value="shop">От магазин</option>
              <option value="address">Доставка до адрес- {{ADDRESS_PRICE}} лв </option>
              <option value="ekont">Еконт- {{EKONT_PRICE}} лв</option>
        </select>
    </section>
        
</template>
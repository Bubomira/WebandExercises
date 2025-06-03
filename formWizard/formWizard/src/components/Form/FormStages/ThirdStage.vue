<script setup>

import { computed } from 'vue';

import { CARD_PRICE,EKONT_PRICE,ADDRESS_PRICE,DELIVERY_MESSAGE } from '@/constants';

import InputGroup from '../FormFields/InputGroup.vue';
import { useFormStore } from '@/formStore';

const store = useFormStore();

const keys = computed(()=>{
   return Object.keys(store.$state).filter(x=>x!='knowledge')
})

const price = computed(()=>{
     let price= store.$state.cardNumber* CARD_PRICE;
     if(store.$state.delivery=='address'){
        price+=ADDRESS_PRICE;
     }
     else if(store.$state.delivery=='ekont'){
        price +=EKONT_PRICE;
     }

     return price;
})

</script>



<template>

    <h3>Всички данни, които сте попълнили: </h3>
    <InputGroup v-for="key in keys" :name="key" :label="key" :disabled="true"/>

    <textarea v-if="store.$state.method=='other'" disabled> {{ store.$state.knowledge }} </textarea>

     <p v-if="store.$state.delivery=='shop'">{{DELIVERY_MESSAGE}}.</p>
    <p v-if="store.$state.delivery=='address'">Цена за доставка: {{ ADDRESS_PRICE }} лв.</p>
    <p v-else-if="store.$state.delivery=='ekont'">Цена за доставка до еконт: {{ EKONT_PRICE }} лв.</p>


    <h4>Общата цена е: {{ price }} лева</h4>
    
    <section class="form-group">
        <input class="submit" type="submit" value="Submit">
    </section>
</template>

<style>
</style>

<style scoped>

  h3{
    text-align: center;
  }

  h4{
    margin-top: 0;
  }

  p{
    margin-bottom: 0;
  }

  input{
    background-color: #354b66;
    color:rgb(241, 247, 252);
    align-self: center;
    padding: 1em 4em;
    border-radius: 1em;
    font-size: 1.3em;
    
  }

</style>
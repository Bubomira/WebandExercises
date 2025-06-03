<script setup>

import { ref, computed } from 'vue';
import FormGroup from './FormGroup.vue';
import InvoiceFields from './Fields/InvoiceFields.vue';
import MessageFields from './Fields/MessageFields.vue';
import QueryFields from './Fields/QueryFields.vue';

const type = defineModel()

const showInvoice=computed(()=>{
  return type.value=='invoice'
})
const showMessage=computed(()=>{
  return type.value=='message'
})
const showQuery=computed(()=>{
  return type.value=='query'
})

</script>

<template>
  <form>
    <FormGroup name="name" label="Име"/>
    <section class="form-group">
        <label for="type">Тип на документа</label>
        <select v-model="type" id="type" name="type" >
            <option value="invoice">Фактура</option>
            <option value="message">Съобщение</option>
            <option value="query">Заявка</option>
        </select>
    </section>
    <InvoiceFields v-if="showInvoice"/>
    <MessageFields v-if="showMessage"/>
    <QueryFields v-if="showQuery"/>

  </form>

    
</template>

<style scoped>

form{
  background-color: rgb(230, 214, 234);
  padding: 3em 2em;
  display: flex;
  flex-direction: column;
  gap: 1em;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
  border-right: 3em solid #9696a1;
  min-height: 27em;
  border-radius: 1em 0 0 1em;
}

.form-group select{
    padding: 0.2em 0.5em;
    border-radius: 0.4em;
    border: 1px rgb(44, 44, 84) solid;
    outline: none;

}

</style>


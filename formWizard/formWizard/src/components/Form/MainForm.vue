<script setup>

import { ref } from 'vue';
import { useFormStore } from '@/formStore';
import FirstStage from './FormStages/FirstStage.vue';
import SecondStage from './FormStages/SecondStage.vue';
import ThirdStage from './FormStages/ThirdStage.vue';
import { computed } from 'vue';

const stage = ref(1);

const store =useFormStore()

const restrictBackwards = computed(()=>stage.value==1)

const restrictForward = computed(()=>
    (stage.value==3) || 
    (stage.value==1 && store.$state.delivery=='')|| 
    (stage.value==2 && store.$state.method==''))

</script>


<template>
    <h1>Форма за поръчка</h1>
    <form>
        <FirstStage v-if="stage==1"/>
        <SecondStage v-if="stage==2"/>
        <ThirdStage v-if="stage==3"/>
    </form>
    <div class="btn-wrapper">
        <button @click="stage--" :disabled="restrictBackwards" >Назад</button>
        <button @click="stage++" :disabled="restrictForward">Напред</button>
    </div>
    
</template>

<style scoped>

.btn-wrapper{
    display: flex;
    align-items: center;
    gap: 1em;
    padding: 1em;
}

form{
    background-color: #c4d7ef;
    padding: 1em 3em;
    width: 40%;
    display: grid;
    gap: 1em;
    grid-template-columns: 1fr;
}

.btn-wrapper button{
    background-color: #c4d7ef;
    border: none;
    padding: 1em 3.5em;
    border-radius: 0.7em;
}

</style>
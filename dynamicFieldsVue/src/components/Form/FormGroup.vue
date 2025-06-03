<script setup>

const {name,label} = defineProps(['name','label'])

</script>

<template>
     <section class="form-group">
               <label :for="name">{{label}}</label>
               <input :id="name" :name="name" type="text"/>
    </section>
</template>

<style>

.form-group{ 
    display: flex;
    gap: 0.1em;
    flex-direction: column;
}

.form-group input{
     padding: 0.2em 0.5em;
    border-radius: 0.4em;
    border: 1px rgb(44, 44, 84) solid;
}

</style>
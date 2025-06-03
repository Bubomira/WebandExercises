import { defineStore } from "pinia";

export const useFormStore = defineStore('form',{
    state: ()=>(
        {
        name:'',
        email:'',
        cardNumber:1,
        delivery: '',
        address:'',
        telephone:'',
        method:'',
        knowledge:''
    }),

})
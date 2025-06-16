import { createRouter, createWebHistory } from "vue-router";
import Home from "./components/Home/Home.vue";
import ProductPage from "./components/ProductPage/ProductPage.vue";

const routes=[
    {path:'/',component:Home,name:''},
    {path:'/company',component:Home,name:'Company'},
    {path:'/customer',component:Home,name:'Customer'},
    {path:'/product',component:ProductPage,name:'Product'},
]

export default createRouter({
    history:createWebHistory(),
    routes
})


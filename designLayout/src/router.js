import { createMemoryHistory,createRouter } from "vue-router";
import Home from "./components/Home/Home.vue";
import ProductPage from "./components/Main/ProductPage.vue";

const routes=[
    {path:'/',component:Home},
    {path:'/company',component:Home},
    {path:'/customer',component:Home},
    {path:'/product',component:ProductPage},
]

export default createRouter({
    history:createMemoryHistory(),
    routes
})


import { createRouter, createWebHistory } from "vue-router";

import invoiceIndex from '../components/invoice/index.vue';
import invoiceNew from '../components/invoice/new.vue';
import invoiceShow from '../components/invoice/show.vue';
import invoiceEdit from '../components/invoice/edit.vue';
import notFound from '../components/NotFoundPage.vue';


const routes = [
    {
        path: '/',
        component: invoiceIndex
    },
    {
        path: '/invoice/new',
        component: invoiceNew
    },
    {
        path: '/invoice/show/:id',
        component: invoiceShow,
        props:true
    },
    {
        path: '/invoice/edit/:id',
        component: invoiceEdit,
        props:true
    },
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    }
 ]

 const router = createRouter({
    history: createWebHistory(),
    linkExactActiveClass: 'active',
    routes,
 })



 export default router

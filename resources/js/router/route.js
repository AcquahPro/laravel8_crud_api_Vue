import { createRouter, createWebHistory } from "vue-router";

import booksindex from '../components/booksindex';

const routes = [
    {
        path: '/home',
        name: 'index',
        component: booksindex
    }
]

export default createRouter(options, {
    history: createWebHistory(),
    routes
})
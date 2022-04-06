require('./bootstrap');

import { createApp } from "Vue";
import router from './router/route';
import booksindex from './components/booksindex'

createApp( rootComponent, {
    components:{
        booksindex
    }
}).use(router).mount( rootContainer, '#app');
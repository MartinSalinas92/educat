import Vue from 'vue';
import VueRouter from 'vue-router';
import MostrarDocente from '../components/MostrarDocente';


const routes=[
    {

        path:'/docentes',
        name:'docentes',
        component: MostrarDocente

    }

]

const router= new VueRouter({
    mode:'history',
    routes
});

Vue.use(VueRouter);

export default router;

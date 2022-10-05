import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/people', component: () => import('./components/People/Index'),
            name: 'people.index'
        },
        {
            path: '/people/create', component: () => import('./components/People/Create'),
            name: 'people.create'
        },
        {
            path: '/people/:id/edit', component: () => import('./components/People/Edit'),
            name: 'people.edit'
        },
    ]
})
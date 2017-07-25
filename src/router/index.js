import Vue from 'vue'
import Router from 'vue-router'
import aa from '@/views/modal'

Vue.use(Router)

const workUpload = r => require.ensure([], () => r(require('@/views/WorkUpload.vue')), 'WorkUpload')

export default new Router({
    mode: 'history',
    routes: [{
        path: '/',
        name: 'home',
        component: r => require.ensure([], () => r(require('@/views/Home.vue')), 'home')
    },{
        path: '/aboutUs',
        name: 'aboutUs',
        component: r => require.ensure([], () => r(require('@/views/AboutUs.vue')), 'AboutUs'),
        alias: '/b'
    }, {
        path: '/aboutCompletition',
        name: 'aboutCompletition',
        component: r => require.ensure([], () => r(require('@/views/AboutCompletition.vue')), 'AboutCompetition')
    }, {
        path: '/news',
        name: 'news',
        component: r => require.ensure([], () => r(require('@/views/News.vue')), 'News')
    }, {
        path: '/workUpload',
        name: 'workUpload',
        component: workUpload,
        children: [{
            path: 'personal',
            name: 'personal',
            component: workUpload
        }, {
            path: 'team',
            name: 'team',
            component: workUpload
        }],
        redirect: '/workUpload/personal'
    }, {
        path: '/exchange',
        name: 'exchange',
        component: r => require.ensure([], () => r(require('@/views/Exchange.vue')), 'Exchange')
    }]
})


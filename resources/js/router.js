import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);


import toppage from './components/topPage.vue'
import contact from './components/Contact.vue'
import event from './components/Event.vue'


export default new VueRouter({
    // モードの設定
    mode: 'history',
    routes: [
        {
            // routeのパス設定
            path: '/',
            // 名前付きルートを設定したい場合付与
            name: 'top-page',
            // コンポーネントの指定
            component: toppage,
            
            
            
        },
        {
            // routeのパス設定
            path: '/contact',
            // 名前付きルートを設定したい場合付与
            name: 'contact',
            // コンポーネントの指定
            component: contact,
            
            
        },
        {
            // routeのパス設定
            path: '/event',
            // 名前付きルートを設定したい場合付与
            name: 'event',
            // コンポーネントの指定
            component: event,
            
        },



    ],
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    }
});
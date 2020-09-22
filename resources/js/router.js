import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);



import RyokanPage from './components/Ryokan/RyokanPage.vue'
import RyokanDetail from './components/Ryokan/RyokanDetail.vue'
import RyokanAdd from './components/Kanri/RyokanAdd.vue'

import toppage from './components/topPage.vue'
import contact from './components/Contact.vue'
import event from './components/Event.vue'
import eventRegister from './components/EventRegister.vue'


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
        {
            // routeのパス設定
            path: '/RyokanPage',
            // 名前付きルートを設定したい場合付与
            name: 'RyokanPage',
            // コンポーネントの指定
            component: RyokanPage,
            
        },
        {
            // routeのパス設定
            path: '/RyokanDetail',
            // 名前付きルートを設定したい場合付与
            name: 'RyokanDetail',
            // コンポーネントの指定
            component: RyokanDetail,
            
        },
        {
            // routeのパス設定
<<<<<<< HEAD
            path: '/RyokanAdd',
            // 名前付きルートを設定したい場合付与
            name: 'RyokanAdd',
            // コンポーネントの指定
            component: RyokanAdd,
=======
            path: '/eventRegister',
            // 名前付きルートを設定したい場合付与
            name: 'eventRegister',
            // コンポーネントの指定
            component: eventRegister,
>>>>>>> 8b327264cbd1b005d2b7b6afb9aaeb783088c48a
            
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
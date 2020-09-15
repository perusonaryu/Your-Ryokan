import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import hello from './components/Hello.vue'
import world from './components/World.vue'
import example from './components/ExampleComponent.vue'
import RyokanPage from './components/Ryokan/RyokanPage.vue'
import RyokanDetail from './components/Ryokan/RyokanDetail.vue'


export default new VueRouter({
    // モードの設定
    mode: 'history',
    routes: [
        {
            // routeのパス設定
            path: '/',
            // 名前付きルートを設定したい場合付与
            name: 'example',
            // コンポーネントの指定
            component: example,
            
        },
        {
            // routeのパス設定
            path: '/world',
            // 名前付きルートを設定したい場合付与
            name: 'world',
            // コンポーネントの指定
            component: world,
            
        },
        {
            // routeのパス設定
            path: '/hello',
            // 名前付きルートを設定したい場合付与
            name: 'hello',
            // コンポーネントの指定
            component: hello,
            
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


    ]
});
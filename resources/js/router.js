import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import hello from './components/Hello.vue'
import world from './components/World.vue'
import example from './components/ExampleComponent.vue'


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


    ]
});
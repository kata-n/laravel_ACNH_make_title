import Vue from 'vue'
import Router from 'vue-router'
import Autotitlelist from '../components/AutotitlelistComponent.vue'
import Titleautocard from '../components/TitleautocardComponent.vue'
import Titleshow from '../components/TitleshowComponent.vue'

Vue.use(Router)

export default new Router({
  mode: 'history', // SPAのURLにはhistoryモード(#ハッシュが付かないタイプを使います)
  routes: [
    {
      path: '/',
      name: 'Titleshow',
      component: Titleshow
    },
    {
      path: '/title_cards_list',
      name: 'Autotitlelist',
      component: Autotitlelist
    },
    {
      path: '/title_cards/:id',
      name: 'detail',
      component: Titleautocard
    },
  ]
})
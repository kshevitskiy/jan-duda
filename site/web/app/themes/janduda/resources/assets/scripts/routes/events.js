import Vue from 'vue'; 
import ListPosts from '../components/List.vue'
import EventCard from '../components/common/card/Event.vue'
import { Loading } from 'buefy/dist/components'

Vue.use(Loading)

const app = new Vue({
  components: {
    ListPosts,
    EventCard,
  },
})

const wrapEl = document.querySelector('.wrap')

export default {
  init() {
    // JavaScript to be fired on the home page
    app.$mount(wrapEl)
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};

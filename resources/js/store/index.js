import Vue from 'vue'
import Vuex from 'vuex'
import People from './modules/people'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        People
    }
})
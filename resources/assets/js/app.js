var Promise = require('promise')
var Vue = require('vue')

import Setup from './components/Setup'

new Vue({
    // The element we're attaching to.
    el: '#app',

    // The components we need to include.
    components: {
        Setup,
    },

    // We'll use this as a cheap global data store.
    data () {
        return {

        }
    },
})

/**
 * Polyfill promises.
 */
const Promise = require('promise')

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-Token': window.Global.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

((win, doc) => {
    /**
     * Next, we will create a fresh Vue application instance and attach it to
     * the page. Then, you may begin adding components to this application
     * or customize the JavaScript scaffolding to fit your unique needs.
     */

    new Vue({
        el: '#app',
        data () {
            return {
                // TODO: Fill this with the active user.
                user: null,
                messages: [
                    //
                ],
                system: {
                    updateAvailable: false,
                }
            }
        },
        components: {
            'setup': require('./components/Setup.js'),
            'dashboard': require('./components/dashboard/Dashboard.js'),
            'report-incident': require('./components/dashboard/ReportIncident.js'),
            'invite-team': require('./components/dashboard/InviteTeam.js'),
        }
    })
})()

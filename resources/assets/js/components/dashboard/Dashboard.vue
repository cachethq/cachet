const Vue = require('vue');

Vue.component('report-incident', require('./ReportIncident.vue'));
Vue.component('update-incident', require('./UpdateIncident.vue'));
Vue.component('report-schedule', require('./ReportSchedule.vue'));
Vue.component('invite-team', require('./InviteTeam.vue'));

module.exports = {
    props: ['user'],
    mounted () {
        if (!this.user.welcomed) {
            // @todo Replace this with a non-jquery alternative.
            $('#welcome-modal').modal('show');
        }
    },
    methods: {
        fetchIncidentTimeline () {
            //
        },
        fetchSubscriberTimeline () {
            //
        }
    }
}

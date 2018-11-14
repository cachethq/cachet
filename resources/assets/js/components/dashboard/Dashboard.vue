<script>
const Vue = require('vue');

Vue.component('report-incident', require('./ReportIncident'));
Vue.component('report-schedule', require('./ReportSchedule'));
Vue.component('invite-team', require('./InviteTeam'));

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
</script>

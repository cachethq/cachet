<script>
import Vue from 'vue';

Vue.component('report-incident', require('./ReportIncident').default);
Vue.component('update-incident', require('./UpdateIncident').default);
Vue.component('report-schedule', require('./ReportSchedule').default);
Vue.component('invite-team', require('./InviteTeam').default);

export default {
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

<script>
const Vue = require('vue');

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
    },
    components: {
        'report-incident': require('./ReportIncident'),
        'invite-team': require('./InviteTeam'),
    }
}
</script>

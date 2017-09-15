module.exports = {
    props: ['welcome-user'],
    mounted () {
        if (this.welcomeUser) {
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

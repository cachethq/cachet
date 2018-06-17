<script>
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

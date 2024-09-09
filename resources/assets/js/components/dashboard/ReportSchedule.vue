<script>
module.exports = {
    data () {
        return {
            template: null,
            name: '',
            message: ''
        }
    },
    methods: {
        getTemplate (template) {
            axios.get('/dashboard/api/incidents/templates', {
                params: {
                    slug: template
                }
            }).then(response => {
                this.name = response.data.name
                this.message = response.data.template
            }).catch(response => {
                (new Cachet.Notifier()).notify('There was an error finding that template.');
            })
        }
    },
    watch: {
        'template' (template) {
            this.getTemplate(template)
        }
    }
}
</script>

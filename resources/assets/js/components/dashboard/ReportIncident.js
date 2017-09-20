module.exports = {
    data () {
        return {
            template: null,
            name: '',
            status: null,
            visible: 1,
            sticky: 0,
            message: '',
            when: null,
            notify: false,
            component: {
                id: null,
                status: null
            }
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
        },
        'component.id' (id) {
            // If we unselect a component then reset the status.
            if (id === '') {
                this.component.status = null
            }
        }
    }
}

<script>
module.exports = {
    data () {
        return {
            canRemove: true,
            emails: [
                { email: '' },
                { email: '' },
                { email: '' },
                { email: '' },
                { email: '' },
            ]
        }
    },
    methods: {
        add () {
            this.emails.push("")
        },
        remove (key) {
            if (this.canRemove) {
                this.$delete(this.emails, key)
            }
        },
    },
    watch: {
        'emails' (val) {
            this.canRemove = val.length > 1
        }
    }
}
</script>

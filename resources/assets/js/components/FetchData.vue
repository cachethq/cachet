<script>
export default {
    props: ['url'],
    data() {
        return {
            loaded: false,
            response: null,
        }
    },
    created() {
        axios.get(this.url)
            .then((response) => {
                this.response = response
                this.loaded = true
            })
    },
    render() {
        if (!this.loaded) {
            return this.$scopedSlots.default({
                loading: true,
                response: null,
            })
        }

        return this.$scopedSlots.default({
            loading: false,
            response: this.response.data,
        })
    },
}
</script>

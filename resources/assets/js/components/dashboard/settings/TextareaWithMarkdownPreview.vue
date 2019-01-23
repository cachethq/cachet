<template>
    <div>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a :href="'#'+name" role="tab" data-toggle="tab">{{ langMarkdown }}</a></li>
            <li role="presentation"><a :href="'#'+ name +'-preview'" role="tab" data-toggle="tab" v-on:click="renderMarkdown">{{ langPreview }}</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" :id="name">
                <textarea class="form-control" :name="name" rows="5" v-model="valueModel"></textarea>
                <div class="help-block">
                    {{ helpText }}
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" :id="name +'-preview'">
                <div class="markdown-preview" v-html="renderedMarkdown"></div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            "name": String,
            "value": String,
            "helpText": String,
            "langMarkdown": String,
            "langPreview": String,
            "previewUrl": String
        },
        data() {
            return {
                "valueModel": this.value,
                "renderedMarkdown": ""
            }
        },

        methods: {
            renderMarkdown() {
                this.$http
                    .get(this.previewUrl, {params: {markdown: this.valueModel}})
                    .then((response) => {
                        this.renderedMarkdown = response.data;
                    })
            }
        }
    }
</script>
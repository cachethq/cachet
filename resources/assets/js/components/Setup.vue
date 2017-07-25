<template>
    <div>
        <div class="setup-page">
            <div class="text-center">
                <img class="logo" height="90" :src="logoSource">
            </div>
        </div>

        <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2">
            <vue-good-wizard :steps="steps">
                <div slot="page1">
                    <h4>Page 1</h4>
                    <p>Page 1</p>
                </div>
                <div slot="page2">
                    <h4>Page 2</h4>
                    <p>Page 2</p>
                </div>
                <div slot="page3">
                    <h4>Page 3</h4>
                    <p>Page 3</p>
                </div>
            </vue-good-wizard>
        </div>
    </div>
</template>

<script>
import Vue from 'vue'
import VueGoodWizard from 'vue-good-wizard'

Vue.use(VueGoodWizard)

export default {
    props: [
        'logo-source',
    ],
    data () {
        return {
            steps: [
                {
                    'label': 'Stage 1',
                    'slot': 'page1',
                }, {
                    'label': 'Stage 2',
                    'slot': 'page2',
                }, {
                    'label': 'Stage 3',
                    'slot': 'page3',
                }
            ]
        }
    }
}
</script>

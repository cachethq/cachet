var Vue = require('vue');
var moment = require('moment');

(() => {
    window.Cachet = {};

    new Vue({
        el: 'body',
        ready () {
            moment.locale(Globale.locale);

            this.initTimeago();
            this.initTooltips();
            this.initToggleGroupVisibility();
        },
        methods: {
            initTimeago () {
                $('abbr.timeago').each(() => {
                    var $this = $(this);

                    $this.livestamp($this.data('timeago')).tooltip();
                });
            },
            initTooltips () {
                $('[data-toggle="tooltip"]').tooltip();
            },
            initToggleGroupVisibility () {
                $('.group-name').on('click', () => {
                    var $this = $(this);

                    $this.find('.group-toggle').toggleClass('ion-ios-minus-outline').toggleClass('ion-ios-plus-outline');

                    $this.next('.group-items').toggleClass('hide');
                });
            }
        },
        components: {

        }
    })
})();

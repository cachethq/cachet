$(function() {

    // Ajax Setup
    $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
        var token;
        if (! options.crossDomain) {
            token = $('meta[name="token"]').attr('content');
            if (token) {
                return jqXHR.setRequestHeader('X-CSRF-Token', token);
            }
        }
    });

    $.ajaxSetup({
        statusCode: {
            401: function () {
                window.location.href = '/';
            },
            403: function () {
                window.location.href = '/';
            }
        }
    });

    // Prevent double form submission
    $('form').submit(function() {
        var $form = $(this);
        $form.find(':submit').prop('disabled', true);
    });

    // Messenger config
    Messenger.options = {
        extraClasses: 'messenger-fixed messenger-on-top',
        theme: 'air'
    }

    // App setup
    window.CachetHQ = {};

    CachetHQ.Notifier = function () {
        this.notify = function (message, type, options) {
            type = (typeof type === 'undefined' || type == 'error') ? 'error' : type;

            var defaultOptions = {
                message: message,
                type: type,
                showCloseButton: true
            };

            var options = _.extend(defaultOptions, options);

            Messenger().post(options);
        };
    };

    $('.color-code').minicolors({
        control: 'hue',
        defaultValue: $(this).val() || '',
        inline: false,
        letterCase: 'lowercase',
        opacity: false,
        position: 'bottom left',
        theme: 'bootstrap'
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('button.close').on('click', function() {
        $(this).parents('div.alert').addClass('hide');
    });

    // Toggle inline component statuses.
    $('form.component-inline').on('click', 'input[type=radio]', function() {
        var $form = $(this).parents('form');
        var formData = $form.serializeObject();

        $.ajax({
            async: true,
            url: '/dashboard/api/components/' + formData['component_id'],
            type: 'POST',
            data: formData,
            success: function(component) {
                (new CachetHQ.Notifier).notify($form.data('messenger'), 'success');
            },
            error: function(a, b, c) {
                (new CachetHQ.Notifier).notify('Something went wrong updating the component.');
            }
        });
    });
});

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

    // Mock the DELETE form requests.
    $('[data-method]').not(".disabled").append(function() {
        var methodForm = "\n";
        methodForm    += "<form action='" + $(this).attr('href') + "' method='POST' style='display:none'>\n";
        methodForm    += " <input type='hidden' name='_method' value='" + $(this).attr('data-method') + "'>\n";
        if ($(this).attr('data-token')) {
            methodForm += "<input type='hidden' name='_token' value='" + $(this).attr('data-token') + "'>\n";
        }
        methodForm += "</form>\n";
        return methodForm;
    })
        .removeAttr('href')
        .attr('onclick', ' if ($(this).hasClass(\'confirm-action\')) { if(confirm("Are you sure you want to do this?")) { $(this).find("form").submit(); } } else { $(this).find("form").submit(); }');

    // Messenger config
    Messenger.options = {
        extraClasses: 'messenger-fixed messenger-on-top',
        theme: 'air'
    };

    // App setup
    window.CachetHQ = {};

    window.CachetHQ.Notifier = function () {
        this.notify = function (message, type, options) {
            type = (typeof type === 'undefined' || type === 'error') ? 'error' : type;

            var defaultOptions = {
                message: message,
                type: type,
                showCloseButton: true
            };

            options = _.extend(defaultOptions, options);

            Messenger().post(options);
        };
    };

    $(".sidebar-toggler").click(function(e) {
        e.preventDefault();
        $(".wrapper").toggleClass("toggled");
    });

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

    // Sortable components.
    var componentList = document.getElementById("component-list");
    if (componentList) {
        new Sortable(componentList, {
            group: "omega",
            handle: ".drag-handle",
            onUpdate: function() {
                // Loop each component, setting the order input to the new order.
                var $components = $('#component-list .striped-list-item');
                $.each($components, function(id) {
                    // Order should start from 1 now.
                    $(this).find('input[rel=order]').val(id + 1);
                });

                // Now POST the form to the internal API.
                $.ajax({
                    async: true,
                    url: '/dashboard/api/components/order',
                    type: 'POST',
                    data: $('form[name=componentList]').serializeObject(),
                    success: function() {
                        (new CachetHQ.Notifier()).notify('Components updated.', 'success');
                    }
                });
            }
        });
    }

    // Toggle inline component statuses.
    $('form.component-inline').on('click', 'input[type=radio]', function() {
        var $form = $(this).parents('form');
        var formData = $form.serializeObject();

        $.ajax({
            async: true,
            url: '/dashboard/api/components/' + formData.component_id,
            type: 'POST',
            data: formData,
            success: function(component) {
                (new CachetHQ.Notifier()).notify($form.data('messenger'), 'success');
            },
            error: function(a, b, c) {
                (new CachetHQ.Notifier()).notify('Something went wrong updating the component.');
            }
        });
    });

    // Banner removal JS
    $('#remove-banner').click(function(){
        $('#banner-view').remove();
        $('input[name=remove_banner]').val('1');
    });
});

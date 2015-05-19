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

    moment.locale(Global.locale);

    $('abbr.timeago').each(function () {
        var $el = $(this);
        $el
            .livestamp($el.data('timeago'))
            .tooltip();
    });

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

    $('form[name=IncidentForm] select[name=incident\\[component_id\\]]').on('change', function() {
        var $option = $(this).find('option:selected');
        var $componentStatus = $('#component-status');

        if ($option.val() !== '') {
            if ($componentStatus.hasClass('hidden')) {
                $componentStatus.removeClass('hidden');
            } else {
                $componentStatus.addClass('hidden');
            }
        }
    });

    // Date picker.
    $('input[rel=datepicker]').datetimepicker({
        format: "DD/MM/YYYY HH:mm",
        minDate: new Date(), // Don't allow dates before today.
        sideBySide: true,
        icons: {
            time: 'ion-clock',
            date: 'ion-android-calendar',
            up: 'ion-ios-arrow-up',
            down: 'ion-ios-arrow-down',
            previous: 'ion-ios-arrow-left',
            next: 'ion-ios-arrow-right',
            today: 'ion-android-home',
            clear: 'ion-trash-a',
        }
    });

    // Sortable components.
    var componentList = document.getElementById("component-list");
    if (componentList) {
        new Sortable(componentList, {
            group: "omega",
            handle: ".drag-handle",
            onUpdate: function() {
                var orderedComponentIds = $.map(
                    $('#component-list .striped-list-item'),
                    function(elem) {
                        return $(elem).data('component-id');
                    }
                );
                $.ajax({
                    async: true,
                    url: '/dashboard/api/components/order',
                    type: 'POST',
                    data: {ids: orderedComponentIds},
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

    // Incident management
    $('select[name=template]').on('change', function() {
        var $this = $(this).find('option:selected'),
            slug   = $this.val();

        // Only fetch the template if we've picked one.
        if (slug) {
            $.ajax({
                async: true,
                dataType: 'json',
                data: {
                    slug: slug
                },
                url: '/dashboard/api/incidents/templates',
                success: function(tpl) {
                    var $form = $('form[role=form]');
                    $form.find('input[name=incident\\[name\\]]').val(tpl.name);
                    $form.find('textarea[name=incident\\[message\\]]').val(tpl.template);
                },
                error: function() {
                    (new CachetHQ.Notifier()).notify('There was an error finding that template.');
                }
            });
        }
    });

    // Banner removal JS
    $('#remove-banner').click(function(){
        $('#banner-view').remove();
        $('input[name=remove_banner]').val('1');
    });

    $('.group-name').on('click', function () {
        var $this = $(this);

        $this.find('.group-toggle').toggleClass('ion-ios-minus-outline').toggleClass('ion-ios-plus-outline');

        $this.next('.group-items').toggleClass('hide');
    });

    // Setup wizard
    $('.wizard-next').on('click', function () {
        var $form   = $('#setup-form'),
            $btn    = $(this),
            current = $btn.data('currentBlock'),
            next    = $btn.data('nextBlock');

        $btn.button('loading');

        // Only validate going forward. If current group is invalid, do not go further
        if (next > current) {
            var url = '/setup/step' + current;
            $.post(url, $form.serializeObject())
                .done(function(response) {
                    goToStep(current, next);
                })
                .fail(function(response) {
                    var errors = _.toArray(response.responseJSON.errors);
                    _.each(errors, function(error) {
                        (new CachetHQ.Notifier()).notify(error);
                    });
                })
                .always(function() {
                    $btn.button('reset');
                });

            return false;
        } else {
            goToStep(current, next);
            $btn.button('reset');
        }
    });

    function goToStep(current, next) {
        // validation was ok. We can go on next step.
        $('.block-' + current)
          .removeClass('show')
          .addClass('hidden');

        $('.block-' + next)
          .removeClass('hidden')
          .addClass('show');

        $('.steps .step')
            .removeClass("active")
            .filter(":lt(" + (next) + ")")
            .addClass("active");
    }
});

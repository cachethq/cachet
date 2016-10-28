import { Cachet, Vue } from './bootstrap';
import Notifier from './components/Notifier';

$(function() {
    Cachet.Notifier = Notifier;

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

    $('form[name=IncidentForm] select[name=component_id]').on('change', function() {
        var $option = $(this).find('option:selected');
        var $componentStatus = $('#component-status');

        if (parseInt($option.val(), 10) !== 0) {
            if ($componentStatus.hasClass('hidden')) {
                $componentStatus.removeClass('hidden');
            }
        } else {
            $componentStatus.addClass('hidden');
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

    $('input[rel=datepicker-any]').datetimepicker({
        format: "DD/MM/YYYY HH:mm",
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

    // Sortable models.
    var orderableLists = document.querySelectorAll('[data-orderable-list]');

    $.each(orderableLists, function (k, list) {
        var url = $(list).data('orderableList');
        var notifier = new Cachet.Notifier();

        new Sortable(list, {
            group: 'omega',
            handle: '.drag-handle',
            onUpdate: function() {
                var orderedIds = $.map(list.querySelectorAll('[data-orderable-id]'), function(elem) {
                    return $(elem).data('orderable-id');
                });

                $.ajax({
                    async: true,
                    url: url,
                    type: 'POST',
                    data: {
                        ids: orderedIds
                    },
                    success: function() {
                        notifier.notify('Ordering updated.', 'success');
                    },
                    error: function() {
                        notifier.notify('Ordering not updated.', 'error');
                    }
                });
            }
        });
    });

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
                (new Cachet.Notifier()).notify($form.data('messenger'), 'success');
            },
            error: function(a, b, c) {
                (new Cachet.Notifier()).notify('Something went wrong updating the component.');
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
                data: {
                    slug: slug
                },
                url: '/dashboard/api/incidents/templates',
                success: function(tpl) {
                    var $form = $('form[role=form]');
                    $form.find('input[name=name]').val(tpl.name);
                    $form.find('textarea[name=message]').val(tpl.template);
                },
                error: function() {
                    (new Cachet.Notifier()).notify('There was an error finding that template.');
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

    $('.select-group').on('click', function (e) {
        var $parentGroup = $(this).closest('ul.list-group');
        $parentGroup.find('input[type=checkbox]').prop('checked', true);
        $parentGroup.find('.group-items').removeClass('hide')
        $parentGroup.find('.group-toggle').addClass('ion-ios-minus-outline').removeClass('ion-ios-plus-outline');
        e.stopPropagation();
        return false;
    });

    $('.deselect-group').on('click', function (e) {
        var $parentGroup = $(this).closest('ul.list-group');
        $parentGroup.find('input[type=checkbox]').prop('checked', false);
        $parentGroup.find('.group-items').addClass('hide');
        $parentGroup.find('.group-toggle').removeClass('ion-ios-minus-outline').addClass('ion-ios-plus-outline');
        e.stopPropagation();
        return false;
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
                        (new Cachet.Notifier()).notify(error);
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

    // Sparkline
    if ($.fn.sparkline) {
        var sparkLine = function () {
            $('.sparkline').each(function () {
                var data = $(this).data();
                data.valueSpots = {
                    '0:': data.spotColor
                };

                $(this).sparkline(data.data, data);
                var composite = data.compositedata;

                if (composite) {
                    var stlColor = $(this).attr("data-stack-line-color"),
                        stfColor = $(this).attr("data-stack-fill-color"),
                        sptColor = $(this).attr("data-stack-spot-color"),
                        sptRadius = $(this).attr("data-stack-spot-radius");

                    $(this).sparkline(composite, {
                        composite: true,
                        lineColor: stlColor,
                        fillColor: stfColor,
                        spotColor: sptColor,
                        highlightSpotColor: sptColor,
                        spotRadius: sptRadius,
                        valueSpots: {
                            '0:': sptColor
                        }
                    });
                };
            });
        };

        sparkLine(false);
    }

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

    // Password strength
    $('.password-strength').strengthify();

    // Check for updates.
    if ($('#update-alert').length > 0) {
        $.ajax({
            async: true,
            dataType: 'json',
            url: '/api/v1/version',
        }).done(function (result) {
            if (result.meta.on_latest === false) {
                $('#update-alert').removeClass('hidden');
            }
        });
    }
});

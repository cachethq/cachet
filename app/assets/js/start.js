$(function() {

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
                $('.alert').removeClass('hide');
            },
            error: function(a, b, c) {
                alert('Something went wrong updating the component.');
            }
        });
    });
});

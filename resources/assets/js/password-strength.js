/**
 * Combine jQuery and zxcvbn to create a password strength meter.
 * Based on : strengthify https://github.com/kabum/strengthify
 */
(function($) {
    $.fn.strengthify = function(paramOptions) {
        var me = this,
            defaults = {
                zxcvbn: 'https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/2.0.2/zxcvbn.min.js'
            },
            options = $.extend(defaults, paramOptions);

        // Add elements to the DOM
        $('.strengthify-wrapper')
            .append('<div class="strengthify-bg" />')
            .append('<div class="strengthify-container" />')
            .append('<div class="strengthify-separator" style="left: 25%" />')
            .append('<div class="strengthify-separator" style="left: 50%" />')
            .append('<div class="strengthify-separator" style="left: 75%" />');

        $.ajax({
            cache: true,
            dataType: 'script',
            url: options.zxcvbn
        }).done(function() {
            me.bind('keyup input', function() {
                var password = $(this).val(),
                    // Hide strengthigy if no input is provided
                    opacity = (password === '') ? 0 : 1,
                    // Calculate result
                    result = zxcvbn(password),
                    css = '',
                    // cache jQuery selections
                    $container = $('.strengthify-container'),
                    $wrapper = $('.strengthify-wrapper');

                $wrapper.children().css(
                    'opacity',
                    opacity
                ).css(
                    '-ms-filter',
                    '"progid:DXImageTransform.Microsoft.Alpha(Opacity=' + opacity * 100 + ')"'
                );

                // Style strengthify bar
                // possible scores: 0, 1, 2, 3, 4
                switch (result.score) {
                    case 0:
                    case 1:
                        css = 'password-bad';
                        break;
                    case 2:
                        css = 'password-medium';
                        break;
                    case 3:
                    case 4:
                        css = 'password-good';
                        break;
                }

                $container
                    .attr('class', css + ' strengthify-container')
                    // possible scores: 0, 1, 2, 3, 4
                    .css(
                        'width',
                        // if score is '0' it will be changed to '1' to
                        // not hide strengthify if the password is extremely weak
                        ((result.score === 0 ? 1 : result.score) * 25) + '%'
                    );

                // Reset state for empty string password
                if (password === '') {
                    $container.css('width', 0);
                }
            });
        });

        return me;
    };
}(jQuery));

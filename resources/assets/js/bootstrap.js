/* global window, document, $, autosize, Messenger, moment, livestamp, swal */
import Vue from 'vue';
import VueResource from 'vue-resource';

// App config
const Cachet = window.Cachet || {};

Cachet.Globals = {
  host: window.location.host,
  base_url: `${window.location.protocol}//${window.location.host}`,
  url: document.URL,
  env: $('meta[name="env"]').attr('content') || 'production',
  token: $('meta[name="token"]').attr('content'),
  locale: $('meta[name="locale"]').attr('content'),
};

window.Cachet = Cachet;

// Vue config
Vue.config.debug = false;
Vue.config.devtools = false;

Vue.use(VueResource);

// Global Ajax Setup
Vue.http.headers.common['X-CSRF-Token'] = Cachet.Globals.token;

Vue.http.interceptors.push((_, next) => {
  next((response) => {
    if (response.status === 401 || response.status === 403) {
      window.location.href = '/';
    }
  });
});

// Global plugins config
moment.locale(Cachet.Globals.locale);

Messenger.options = {
    extraClasses: 'messenger-fixed messenger-on-top',
    theme: 'air'
};

$(function() {
    // Ajax Setup
    $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
        var token;
        if (! options.crossDomain) {
            token = $('meta[name="token"]').attr('content');
            if (token) {
                jqXHR.setRequestHeader('X-CSRF-Token', token);
            }
        }

        return jqXHR;
    });

    $.ajaxSetup({
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Accept', 'application/json');
        },
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

    // Autosizing of textareas.
    autosize($('textarea.autosize'));

    // Mock the DELETE form requests.
    $('[data-method]').not(".disabled").append(function() {
        var methodForm = "\n";
        methodForm += "<form action='" + $(this).attr('href') + "' method='POST' style='display:none'>\n";
        methodForm += "<input type='hidden' name='_method' value='" + $(this).attr('data-method') + "'>\n";
        methodForm += "<input type='hidden' name='_token' value='" + $('meta[name=token]').attr('content') + "'>\n";
        methodForm += "</form>\n";
        return methodForm;
    })
    .removeAttr('href')
    .on('click', function() {
        var button = $(this);

        if (button.hasClass('confirm-action')) {
            askConfirmation(function() {
                button.find("form").submit();
            });
        } else {
            button.find("form").submit();
        }
    });

    $('abbr.timeago').each(function () {
        var $el = $(this);
        $el
            .livestamp($el.data('timeago'))
            .tooltip();
    });
});

function askConfirmation(callback, cancelCallback) {
    swal({
        type: "warning",
        title: "Confirm your action",
        text: "Are you sure you want to do this?",
        buttonsStyling: false,
        reverseButtons: true,
        confirmButtonText: "Yes",
        confirmButtonClass: "btn btn-lg btn-danger",
        cancelButtonClass: "btn btn-lg btn-default",
        showCancelButton: true,
        focusCancel: true
    }).then(function () {
        if (_.isFunction(callback)) callback();
    }, function () {
        if (_.isFunction(cancelCallback)) cancelCallback();
    });
}

export { Cachet, Vue };

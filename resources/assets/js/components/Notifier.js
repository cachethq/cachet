/* global Messenger */
export default function () {
    this.notify = function (message, type, options) {
        if (_.isPlainObject(message)) {
            message = message.detail;
        }
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

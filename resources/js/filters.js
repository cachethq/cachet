/**
 * Format the given date.
 */
window.Vue.filter('date', value => {
    return moment.utc(value).local().format('MMMM Do, YYYY')
});


/**
 * Format the given date as a timestamp.
 */
window.Vue.filter('datetime', value => {
    return moment.utc(value).local().format('MMMM Do [at] h:mm A');
});


/**
 * Format the given date into a relative time.
 */
window.Vue.filter('relative', value => {
    return moment.utc(value).local().locale('en-short').fromNow();
});


/**
 * Convert the first character to upper case.
 *
 * Source: https://github.com/vuejs/vue/blob/1.0/src/filters/index.js#L37
 */
window.Vue.filter('capitalize', value => {
    if (! value && value !== 0) {
        return '';
    }

    return value.toString().charAt(0).toUpperCase()
        + value.slice(1);
});
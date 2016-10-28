import { Cachet, Vue, } from './bootstrap';

$(function() {
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
});

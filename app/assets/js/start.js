$(function() {

    $('.tabs').tabs({active: 2});

    $('#sidebar-toggle').click(function() {
    	$('.wrapper').toggleClass('active');
    });

});
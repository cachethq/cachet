$(function() {

    $('.tabs').tabs({active: 2});

    $('#sidebar-toggle').click(function() {
    	$('.sidebar').toggleClass('active');
    });

});
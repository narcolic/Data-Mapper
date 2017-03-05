$(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        });
});

// $(".dropdown-button").dropdown({
//     constrainWidth: false, // Does not change width of dropdown to that of the activator
//     hover: true, // Activate on hover
//     belowOrigin: true, // Displays dropdown below the button
//     alignment: 'left' // Displays dropdown with edge aligned to the left of button
// });

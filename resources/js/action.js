$( "#hamburger" ).click(function() {
    $( "body" ).removeClass( "body-move-off" ).addClass( "body-move-on" );
    $( ".hamb-on-off" ).addClass("hamb-off");
    $( ".hamb-close" ).addClass("hamb-on");
});

$( "#hamburger-close" ).click(function() {
    $( "body" ).removeClass( "body-move-on" ).addClass( "body-move-off" );
    $( ".hamb-on-off" ).removeClass("hamb-off");
    $( ".hamb-close" ).removeClass("hamb-on");
});

$( ".close-hmb" ).click(() => {
    console.log("A");
});

$( "#close-btn" ).click(function() {
    $( "#drawer" ).removeClass( "show-drawer" ).addClass( "hide-drawer" );
});
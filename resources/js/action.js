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

$( "#show-passlama" ).click(function() {
    var pass = document.getElementById("passlama");
    if (pass.type === "password") {
        pass.type = "text";
        $('#show-passlama').html('<i class="fas fa-eye-slash"></i>');
    } else {
        pass.type = "password";
        $('#show-passlama').html('<i class="fas fa-eye"></i>');
    }
});

$( "#show-passbaru" ).click(function() {
    var pass = document.getElementById("passbaru");
    if (pass.type === "password") {
        pass.type = "text";
        $('#show-passbaru').html('<i class="fas fa-eye-slash"></i>');
    } else {
        pass.type = "password";
        $('#show-passbaru').html('<i class="fas fa-eye"></i>');
    }
});

$( "#show-passconf" ).click(function() {
    var pass = document.getElementById("passconf");
    if (pass.type === "password") {
        pass.type = "text";
        $('#show-passconf').html('<i class="fas fa-eye-slash"></i>');
    } else {
        pass.type = "password";
        $('#show-passconf').html('<i class="fas fa-eye"></i>');
    }
});

$( "#show-passlogin" ).click(function() {
    var pass = document.getElementById("passlogin");
    if (pass.type === "password") {
        pass.type = "text";
        $('#show-passlogin').html('<i class="fas fa-eye-slash"></i>');
    } else {
        pass.type = "password";
        $('#show-passlogin').html('<i class="fas fa-eye"></i>');
    }
});
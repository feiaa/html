// 
// Author: yyf
// 
// 
function activateSidebar() {
    var filename = location.href;
    filename = filename.substr(filename.lastIndexOf('/') + 1);
    if (!filename || filename.indexOf('index.php') >= 0) {
        $("#Home").attr('class', 'active');
    } else if (filename.indexOf('contest.php') >= 0) {
        $("#Contests").attr('class', 'active');
    } else if (filename.indexOf('profile.php') >= 0) {
        $("#Profile").attr('class', 'active');
    } else alert(filename);
}


function atest(id) {
    // $(".submenuentries").attr("class", "submenuentries show");
    // alert("alert");
    $("#" + id).modal('show');
    // alert("#" + id);
}


function showLoginModal(){
    $("#myModal").modal('show');
}


$(document).ready(function() {

    // alert("document ready");

    $('#myModal').on('shown.bs.modal', function(e) {
        // $('#myModal').modal('hide');
        // alert("shown.bs.modal");
    })

    $('#myModal').on('show.bs.modal', function(e) {
        // $("#myModal").modal("hide");
        // e.preventDefault();
        // alert("show.bs.modal");
    })

    $("#myModal").on('hide.bs.modal', function(e) {
        // alert("preventDefault");
        // e.preventDefault();
    })
});


function activateSubmenu(id) {
    $(id).attr("class", "submenuentries show");
}


function deactivateSubmenu(id) {
    $(id).attr("class", "submenuentries");
}


function doNothing() {
    alert("doNothing");
}


function checkSignin() {
    // TODO: check sign in
    return true;
}


function checkSignup() {
    // TODO: check sign up
    return true;
}


function beforeRegister() {

}

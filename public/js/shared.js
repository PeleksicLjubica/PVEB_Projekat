/**
 * Created by ivanmilic on 6/4/16.
 */

function pathWithToken(path) {
    if (!localStorage.getItem('token')) {
        return path;
    } else {
        return path + '?token=' + localStorage.getItem('token');
    }
}

function goToPageWithToken(path) {
    location.href = pathWithToken(path);
}

function getURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');

    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
}

$(document).ready(function(){
    if (!getURLParameter('token')) {
        if (localStorage.getItem('token')) {
            localStorage.removeItem('token');
        }
    }

    $("#potvrdi").click(function(){
        $("#labela_greska").hide();
        $.ajax({
            url: 'auth/login',
            method: 'POST',
            data: { email: $("#korisnicko_ime").val(), password: $("#sifra").val() },
            success: function (result) {
                localStorage.setItem('token', result.token);
                goToPageWithToken('homeAdmin');
            },
            error: function (xhr, textStatus, errorThrown) {
              $("#labela_greska").show();
            }
        });


        return false;
    });
});

$(document).ready(function(){
    $("#logout_dugme").click(function() {
        $.get(pathWithToken('logout'), function(data) {
            localStorage.removeItem('token');
            location.href = 'home';
        });
    });

});
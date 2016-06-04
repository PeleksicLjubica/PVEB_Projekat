/**
 * Created by ivanmilic on 6/4/16.
 */

function pathWithToken(path) {
    return path + '?token=' + localStorage.getItem('token');
}

function goToPageWithToken(path) {
    location.href = pathWithToken(path);
}

$(document).ready(function(){
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
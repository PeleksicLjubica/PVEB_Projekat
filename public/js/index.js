/**
 * Created by Ljubica on 14.5.2016.
 */

function idiNaKarton(){
    location.href='karton';
}


//ovo se odnosi na formu
$(document).ready(function(){
    $("#napredna_pretraga").click(function(){
        $("#sekcija1").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#pasusi1").click(function(){
        $("#osnovno").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#pasusi2").click(function(){
        $("#tehnicka").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#potvrdi").click(function(){
        //firsttime = 1;
                $.post('auth/login',
                    {email: $("#korisnicko_ime").val(), password: $("#sifra").val()},
                    function (result) {

                            localStorage.setItem('token', result.token);
                            localStorage.setItem('firstime', 1);

                           location.href = 'home?token=' + result.token;//+'&'+firsttime;

                        
                        //
                        // if (!isset($_COOKIE['firsttime']))
                        // {
                        //     setcookie("firsttime", "no");
                        //
                        // }

                        
                    });
            

             return false;

    });
});

$(document).ready(function(){
    $("#admin_dugme1").click(function(){
        $admin = 0;
        //firsttime = 0;
        // setcookie("firsttime", "", time()-3600);
        location.href = 'home';
    });

});

var data = [{ id: 0, text: '' }, { id: 1, text: 'Amelija Pulen Haj' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];

$(".js-example-data-array").select2({
    data: data
});


$(".js-example-responsive").select2({
    data: data
});

$(".js-data-example-ajax").select2({
   data: data
});


$(".js-example-basic-hide-search").select2({
    minimumResultsForSearch: 0,
    data: data
});

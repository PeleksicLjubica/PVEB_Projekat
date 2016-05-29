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

            $.post('auth/login',
                {email: $("#korisnicko_ime").val(), password: $("#sifra").val()} ,
                function(result) {
                    localStorage.setItem('token', result.token);
                    // $.get({
                    //     url: "karton",
                    //     headers: {
                    //         "Authorization" : "Bearer " + result.token
                    //     },
                    //     success: function () {
                    //         console.log("hehe");
                    //     }
                    // });
                });
                // success:function(data) {
                //     if(data == true)
                //     {
                //         location.href='karton';
                //     }
                //     else
                //     {
                //         location.href = 'home';
                //     }
                // }
            // });
             return false;

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

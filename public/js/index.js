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
    $("#pasusi").click(function(){
        $("#osnovno").slideToggle("slow");
    });
});
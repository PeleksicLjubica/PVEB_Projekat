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

var data = [{ id: 0, text: '' }, { id: 1, text: 'Amelija Pulen Haj' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];



$(".js-example-data-array").select2({
    data: data,
    theme:'classic'
});


//OVO JE PRIMER KOJI TRAZIMO MICI
$(".js-example-basic-hide-search").select2({
    minimumResultsForSearch: 0,
	multiple:true,
    theme:'classic
});

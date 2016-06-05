

$(document).ready(function(){

    $("#unos_vezbe").click(function(){
        $("#vezbe_forma").slideToggle("slow");
    });



    $.get(pathWithToken("katedraPodaci"), function(data){

        var katedre = [];

        katedre.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = i;
            a.text=data.data[i].naziv;

            katedre.push(a);
        }

        $(".js-example-data-array.katedre").select2({
            data: katedre,
            tags:true,
            multiple:true
        });

    });


});
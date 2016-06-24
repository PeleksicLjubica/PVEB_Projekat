function uvecajGodinu(id){
//    $token=localStorage.getItem('token');
//    location.href='karton?token='+$token;
    console.log("cao");
    $.post(pathWithToken("studentInkrement"),id);
}

$(document).ready(function(){
    $token=localStorage.getItem('token');
    var colNames = ["id_studenta", "Indeks", "Ime_prezime", "Email", "Id katedre", "Uvecanje godine"];
    var podaci = [];
    $("#student_forma").attr("action", pathWithToken('student'));

    $($('#navbar-lista').children()[4]).addClass('active');

    $("#unos_studenta").click(function(){
        $("#studenti_forma").slideToggle("slow");
    });
    $("#inkrement_godine").click(function(){
        $("#studenti_forma1").slideToggle("slow");
    });
    // "<input type='button' onclick='uvecajGodinu(${indeks})' value='Uvecaj godinu' />" ],
    $.get(pathWithToken("studentiPodaci"), function(data){
        $token=localStorage.getItem('token');
        $("#exampleGrid").simplePagingGrid({
            columnNames: colNames,
            columnKeys: ["id_studenta", "indeks", "ime_prezime", "e_mail","katedra_id_katedre", "uvecanje"],
            columnWidths: ["15%", "15%", "20%","20", "20", "10"],
            cellTemplates: [null, null, null, null, null,
                "<a class='btn btn-default' href='studentInkrement_{{id_studenta}}?token={{$token}}' > Uvecaj godinu</a>"],
        data: data.data
        });

        console.log(data.data[0]);

    });


    $.get(pathWithToken("katedraPodaci"), function(data){

        var katedre = [];

        katedre.push({id: 0,  text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i].naziv;
            a.text = data.data[i].naziv;

            katedre.push(a);

        }
        console.log(katedre);
        $(".js-example-data-array.katedre").select2({
            data: katedre,
            tags:true
        });

    });


    var dataGodSt = [{ id: 1, text: '1' }, { id: 2, text: '2' }, { id: 3, text: '3' },
        { id: 4, text: '4' }, { id: 5, text: 'master' }, { id: 5, text: 'doktorske' }];

    $(".js-example-data-array.godina_studija").select2({
        data: dataGodSt,
        tags:true
    });
});
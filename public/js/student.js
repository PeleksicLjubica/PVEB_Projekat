function uvecajGodinu(id){
//    $token=localStorage.getItem('token');
//    location.href='karton?token='+$token;
    console.log("cao");
    $.post(pathWithToken("studentInkrement"),id);
}

$(document).ready(function(){
    $token=localStorage.getItem('token');
    var colNames = ["id_studenta", "Indeks", "Ime i prezime", "Email", "Katedra", "Godina studija",  "Uvecanje godine"];
    var podaci;
    $("#student_forma").attr("action", pathWithToken('student'));

    $($('#navbar-lista').children()[4]).addClass('active');

    $("#unos_studenta").click(function(){
        $("#studenti_forma").slideToggle("slow");
    });
    $("#inkrement_godine").click(function(){
        $("#studenti_forma1").slideToggle("slow");
    });

    $.get(pathWithToken("studentiPodaci"), function(data){
        podaci = data.data;
        $("#exampleGrid").simplePagingGrid({
            columnNames: colNames,
            columnKeys: ["id_studenta", "indeks", "ime_prezime", "e_mail","naziv", "godina_studija", "uvecanje"],
            columnWidths: ["15%", "15%", "20%","20", "10", "10", "10"],
            cellTemplates: [null, null, null, null, null, null,
              '<input type="button" class="btn btn-default" onclick="goToPageWithToken(\'studentInkrement_{{id_studenta}}\')" value="Uvecaj" />'],

            data: podaci
        });


    });


    $.get(pathWithToken("katedraPrva"), function(data){

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

   $("#praviStudentiCSV").click(function(){
        var csvRows = [];
        var csvRowCol = [];
        csvRowCol.push(colNames.toString());
        csvRows.push(csvRowCol);


        for (var i = 0; i < podaci.length; i++) {
            var rowCSV = podaci[i];

            var a = [];
            a.push(rowCSV.id_studenta);
            a.push(rowCSV.indeks);
            a.push(rowCSV.ime_prezime);
            a.push(rowCSV.e_mail);
            a.push(rowCSV.katedra_id_katedre);

            var row = [];
            row.push(a.toString());
            csvRows.push(row);
        }

        var csvString = csvRows.join("\r\n");
        var a         = document.createElement('a');
        a.href        = 'data:attachment/csv,' +  encodeURIComponent(csvString);
        a.target      = '_blank';
        a.download    = 'myFile.csv';

        document.body.appendChild(a);
        a.click();

    });



    $.validator.addMethod(
           "regex1",
           function(value, element, regexp) {
               var check = false;
               return this.optional(element) || regexp.test(value);
           }
       );

    $(function() {
        $("#studenti_forma").validate({
            errorClass: "my-error-class",

            rules: {
                indeks: {required: true,
                    regex1: /[0-9]*/
                     },
                ime_prezime: {required: true},
                e_mail: {required: true},
                katedre:{required: true,
                         regex1: /[^0].*/
                }
            },
            messages: {
                indeks: {
                   regex1: "Morate da unesete indeks"
                },
                ime_prezime: {
                    required: "Morate da unesete ime i prezime"
                },
                e_mail: {
                    required: "Morate da unesete email"
                },
                katedre:{
                    regex1: "Morate da odaberete katedru"
                }

            }
        });


    });


    var dataGodSt = [{ id: 1, text: '1' }, { id: 2, text: '2' }, { id: 3, text: '3' },
        { id: 4, text: '4' }, { id: 5, text: 'master' }, { id: 5, text: 'doktorske' }];

    $(".js-example-data-array.godina_studija").select2({
        data: dataGodSt,
        tags:true
    });

    $("#salji_forma_student").on('click', function() {
        $("#studenti_forma").submit();
    });

});
/**
 * Created by Ljubica on 5.6.2016.
 */

$(document).ready(function() {

    $($('#navbar-lista').children()[1]).addClass('active');

    $("#unos_katedre").click(function(){
        $("#katedre_forma").slideToggle("slow");
    });

    var colNames = ["Godina studija", "Skolska godina", "Naziv katedre", "Profesor"];
    var podaci;
    var podaciProfesor;
    var katedrePodaci = [{id: 0,text: ""},{ id: "rezija", text: "rezija" },{ id: "montaza", text: "montaza" },{ id: "kamera", text: "kamera" },
        { id: "zvuk", text: "zvuk"},{ id: "produkcija", text: "produkcija"}];
    var godina_studija = [{id: 0,text: ""},{ id: 1 , text: "1" },{ id: 2 , text: "2"},{ id: 3 , text: "3"},{id: 4,text: "4"},
        {id:5 ,text: "master"},{id:6 ,text:"doktorske"}];

    $(".js-example-data-array.naziv_katedre").select2({
        data: katedrePodaci,
        tags: false
    });

    $(".js-example-data-array.god_studija_katedra").select2({
        data: godina_studija,
        tags: false
    });

    $.get(pathWithToken("profesorPodaci"), function(data){

        podaciProfesor = data.data;

        var nizProfesor = [];

        nizProfesor.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i].id_profesora;
            a.text=data.data[i].ime_prezime;

            nizProfesor.push(a);
        }

        $(".js-example-data-array.profesor_katedre").select2({
            data: nizProfesor,
            tags:false
        });

    });


    $.get(pathWithToken("katedraPodaci"), function(data){
            podaci = data.data;

           $("#exampleGrid").simplePagingGrid({
               columnNames: colNames,
               columnKeys: ["godina_studija", "skolska_godina", "naziv", "ime_prezime"],
               columnWidths: ["30%", "30%", "30%", "30%"],
               data: podaci
           });

    });


    $("#praviKatedreCSV").click(function(){
        var csvRows = [];
        var csvRowCol = [];
        csvRowCol.push(colNames.toString());
        csvRows.push(csvRowCol);


        for (var i = 0; i < podaci.length; i++) {
            var rowCSV = podaci[i];

            var a = [];
            a.push(rowCSV.godina_studija);
            a.push(rowCSV.skolska_godina);
            a.push(rowCSV.naziv);
            a.push(rowCSV.Profesor_id_profesora);

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
        $("#forma_katedre").validate({
            errorClass: "my-error-class",

            rules: {
                naziv_katedre: {required: true,
                    regex1: /[^0].*/
                },
                god_studija_katedra: {required: true,
                    regex1: /[^0].*/},
                profesor_katedre: {required: true,
                    regex1: /[^0].*/}
            },
            messages: {
                naziv_katedre: {
                    regex1: "Morate da odaberete katedru"
                },
                god_studija_katedra: {
                    required: "Morate da odaberete godinu studija",
                    regex1: "Morate da odaberete godinu studija"
                },
                profesor_katedre: {
                    required: "Morate da odaberete profesora",
                    regex1: "Morate da odaberete  profesora"
                }

            }
        });




});
});
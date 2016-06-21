/**
 * Created by Ljubica on 5.6.2016.
 */

$(document).ready(function() {

    $($('#navbar-lista').children()[1]).addClass('active');

    var colNames = ["Godina studija", "Skolska godina", "Naziv", "Profesora"];
    var podaci;
    var podaciProfesor;


    $.get(pathWithToken("profesorPodaci"), function(data){

        podaciProfesor = data.data;

    });


    $.get(pathWithToken("katedraPodaci"), function(data){
            podaci = data.data;

           $("#exampleGrid").simplePagingGrid({
               columnNames: colNames,
               columnKeys: ["godina_studija", "skolska_godina", "naziv", "ime_prezime"],
               columnWidths: ["30%", "20%", "40%", "10"],
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




});

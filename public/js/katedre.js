/**
 * Created by Ljubica on 5.6.2016.
 */

$(document).ready(function() {

        var colNames = ["Godina studija", "Skolska godina", "Naziv", "ID Profesora"];
        var request = new XMLHttpRequest();

        request.open('GET', pathWithToken('katedraPodaci'));

        request.onload = function() {

            if (request.status == 200) {
                $("#exampleGrid").simplePagingGrid({
                    columnNames: colNames,
                    columnKeys: ["godina_studija", "skolska_godina", "naziv", "Profesor_id_profesora"],
                    columnWidths: ["30%", "20%", "40%","10"],
                    data: JSON.parse(request.response).data
                });
            } else
            {
                console.log(Error(request.statusText));
            }
        };

        request.onerror = function() {
            console.log(Error('Problem prilikom slanja zahteva'));
        };

        request.send();


    $("#praviCSV").click(function(){

        var colNamesCSV= colNames.toString();
        console.log(colNamesCSV);

        var txtFile = "katedre.csv";
        var file = new File(txtFile,"w");
        file.open("w");
        file.writeln(colNamesCSV);


        for (var i = 0; i < JSON.parse(request.response).data.length; i++) {
            var rowCSV = JSON.parse(request.response).data[i];

            var a = [];
            a.push(rowCSV.godina_studija);
            a.push(rowCSV.skolska_godina);
            a.push(rowCSV.naziv);
            a.push(rowCSV.Profesor_id_profesora);

            var aCSV = a.toString();
        }


        file.close();


    });




});

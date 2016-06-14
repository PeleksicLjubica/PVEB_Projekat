$(document).ready(function(){

    var colNames = ["ID vežbe", "Naziv", "Opis", "Tip", "ID predmeta"];
    var podaci = [];

    $($('#navbar-lista').children()[2]).addClass('active');


    $("#unos_vezbe").click(function(){
        $("#vezbe_forma").slideToggle("slow");
    });

    $.get(pathWithToken("vezbePodaci"), function(data){
        $("#exampleGrid").simplePagingGrid({
            columnNames: colNames,
            columnKeys: ["id_vezbe", "naziv", "opis", "tip", "Predmet_id_predmeta"],
            columnWidths: ["10%", "30%", "30%","20", "10"],
            data: data.data
        });

        podaci = data.data;

    });

    $.get(pathWithToken("katedraPodaci"), function(data){

        var katedre = [];

        katedre.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = i;
            a.text=data.data[i].naziv + " , godina studija: " + data.data[i].godina_studija;

            katedre.push(a);
        }

        $(".js-example-data-array.katedre").select2({
            data: katedre,
            tags:true,
            multiple:true
        });

    });

    $.get(pathWithToken("predmetPodaci"), function(data){

        var predmeti = [];

        predmeti.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i].id_predmeta;
            a.text=data.data[i].naziv;

            predmeti.push(a);
        }

        $(".js-example-data-array.predmet").select2({
            data: predmeti,
            tags:true
        });

    });

    var dataTIP = [{ id: 0, text: '' }, { id: 'individualna', text: 'individualna' }, { id: 'zajednicka', text: 'zajednicka' }];
    $(".js-example-data-array.tip").select2({
        data: dataTIP,
        tags:true
    });

    $("#praviVezbeCSV").click(function(){
        var csvRows = [];
        var csvRowCol = [];
        csvRowCol.push(colNames.toString());
        csvRows.push(csvRowCol);


        for (var i = 0; i < podaci.length; i++) {
            var rowCSV = podaci[i];

            var a = [];
            a.push(rowCSV.id_predmeta);
            a.push(rowCSV.naziv);
            a.push(rowCSV.opis);
            a.push(rowCSV.tip);
            a.push(rowCSV.Predmet_id_predmeta);

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
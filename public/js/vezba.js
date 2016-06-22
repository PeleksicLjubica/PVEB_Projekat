$(document).ready(function(){

    var colNames = ["ID vežbe", "Naziv", "Opis", "Tip", "Naziv predmeta"];
    var podaci = [];

    $($('#navbar-lista').children()[2]).addClass('active');


    $("#unos_vezbe").click(function(){
        $("#vezbe_forma").slideToggle("slow");
    });

    $.get(pathWithToken("vezbePodaci"), function(data){
        $("#exampleGrid").simplePagingGrid({
            columnNames: colNames,
            columnKeys: ["id_vezbe", "naziv_vezbe", "opis", "tip", "predmet_naziv"],
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
            a.id = data.data[i].id_katedre;
            a.text=data.data[i].naziv + " , godina studija: " + data.data[i].godina_studija;

            katedre.push(a);
        }

        $(".js-example-data-array.katedre").select2({
            data: katedre,
            tags:true
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
        tags:false
    });



    $('.js-example-data-array.tip').on('select2:select', function (evt) {
        if($('.js-example-data-array.tip').val() === 'individualna') {

            $(".js-example-data-array.katedre").select2({
                multiple: false
            });
        }

        else  if($('.js-example-data-array.tip').val() === 'zajednicka') {

            $(".js-example-data-array.katedre").select2({
                multiple: true
            });
        }

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


    $.validator.addMethod(
        "regex1",
        function(value, element, regexp) {
            var check = false;
            return this.optional(element) || regexp.test(value);
        }
    );


    $(function() {
        $("#forma_vezbe").validate({
            errorClass: "my-error-class",

            rules: {
                tip: {required: true,
                    regex1: /[^0].*/
                     },
                opis: {required: true},
                naziv: {required: true},
                predmet:{required: true,
                         regex1: /[^0].*/
                },
                "katedre[]": {required: true,
                            regex1: /[^0].*/
                         }
            },
            messages: {
                tip: {
                   regex1: "Morate da odaberete tip vežbe"
                },
                opis: {
                    required: "Morate da upišete opis vežbe"
                },
                naziv: {
                    required: "Morate da upišete naziv vežbe"
                },
                predmet:{
                    regex1: "Morate da odaberete predmet"
                },
                "katedre[]": {
                    required: "Morate da odaberete katedre",
                    regex1: "Morate da odaberete katedre"
                }

            }
        });


    });


    $("#salji_forma_vezba").on('click', function() {
        $("#forma_vezbe").submit();
    });

});
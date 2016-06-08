$(document).ready(function(){
    $("#unos_studenta").click(function(){
        $("#studenti_forma").slideToggle("slow");
    });
    $("#inkrement_godine").click(function(){
        $("#studenti_forma1").slideToggle("slow");
    });
    $.get(pathWithToken("studentiPodaci"), function(data){
        $("#exampleGrid").simplePagingGrid({
            columnNames: ["ID studenta", "Indeks", "Ime", "Prezime", "Email", "Godina studija", "Naziv katedre"],
            columnKeys: ["id_studenta", "indeks", "ime", "prezime", "e-mail","godina_studija","Katedra_naziv"],
            columnWidths: ["10%", "15%", "15%","15", "20", "10", "15"],
            data: data.data
        });

        console.log(data.data[0]);

    });

    $.get(pathWithToken("katedraPodaci"), function(data){

        var katedre = [];

        katedre.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = i;
            a.text=data.data[i].naziv ;

            katedre.push(a);
        }

        $(".js-example-data-array.katedra").select2({
            data: katedre,
            tags:true,
            multiple:true
        });

    });

    var dataGodSt = [{ id: 0, text: '1' }, { id: 1, text: '2' }, { id: 2, text: '3' },
        { id: 3, text: '4' }, { id: 4, text: '5' }, { id: 5, text: '6' }];
    $(".js-example-data-array.godina_studija").select2({
        data: dataGodSt,
        tags:true
    });
});
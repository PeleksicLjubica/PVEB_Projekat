function idiNaKarton(){
    location.href='karton';
}

//ovo se odnosi na formu
$(document).ready(function(){

    $("#pretrazi1").click(function(){
        console.log("USAO U JS-OKIDAM ZAHTEV");

        var str = $("#pretragaForma").serialize();
        console.log(str);

        $.post("filmPretraga", str,
            function(data, status){
                console.log(data);
                $("#exampleGrid").simplePagingGrid({
                    columnNames: ["Naziv filma", "Trajanje", "Godina proizvodnje", "Detalji"],
                    columnKeys: ["naziv_filma", "trajanje", "godina_proizvodnje", "detalji"],
                    columnWidths: ["30%", "20%", "30%", "20%"],
                    cellTemplates: [null, null, null,
                        '<a class="btn btn-default"  onclick="goToPageWithToken(\'film_{{id_filma}}\')">Idi na detalje o filmu</a>'],
                    data: data
                });
            });

    });

    $("#pretrazi").click(function(){
        console.log("USAO U JS-OKIDAM ZAHTEV");

        var str = $("#pretragaForma").serialize();
        console.log(str);

        $.post("filmPretraga", str,
            function(data, status){
                console.log(data);
                $("#exampleGrid").simplePagingGrid({
                    columnNames: ["Naziv filma", "Trajanje", "Godina proizvodnje", "Detalji"],
                    columnKeys: ["naziv_filma", "trajanje", "godina_proizvodnje", "detalji"],
                    columnWidths: ["30%", "20%", "30%", "20%"],
                    cellTemplates: [null, null, null,
                        '<a class="btn btn-default"  onclick="goToPageWithToken(\'film_{{id_filma}}\')">Idi na detalje o filmu</a>'],
                    data: data
                });
            });

    });


    var film = [];
    var godina_studija=[];
    var trajanje = [];
    var katedra = [];
    var godina_proizvodnje = [];
    var predmeti = [];
    var vezbe = [];
    var profesori = [];
    var producenti = [];
    var producenti = [];
    var scenaristi = [];
    var snimatelji = [];
    var reziseri = [];
    var montazeri = [];
    var glumci = [];
    var kompozitori = [];
    var dizajner_zvuka = [];
    var snimatelj_zvuka = [];
    var scenograf = [];
    var kostimograf=[];
    var animacija = [];
    var sminker = [];
    var spec_efekti = [];

    var dataOF = [{ id: 0, text: '' }, { id: 'VIDEO', text: 'VIDEO' }, { id: 'FILM', text: 'FILM' }];
    var dataFF = [{ id: 0, text: '' }, { id: '8 mm', text: '8mm' }, { id: '16 mm', text: '16mm' },{ id: '35 mm', text: '35mm' }];
    var dataVIF = [{ id: 0, text: '' }, { id: 'SD', text: 'SD' }, { id: 'HD', text: 'HD' },{ id: '2K', text: '2K' }
        ,{ id: '4K', text: '4K' }];
    var dataTS = [{ id: 0, text: '' }, { id: 'PAL', text: 'PAL' }, { id: 'NTSC', text: 'NTSC' }];
    var dataAS = [{ id: 0, text: '' }, { id: 'Sa proredom / Interlace', text: 'Sa proredom / Interlace' },
        { id: 'Progresivna / Progressive', text: 'Progresivna / Progressive' }];
    var dataFS = [{ id: 0, text: '' }, { id: '4:3', text: '4:3' }, { id: '4:3L', text: '4:3 Letterbox' },
        { id: '16:9', text: '16:9'}, { id: '16:9 Letterbox', text: '16:9 Letterbox'}, { id: '1:1,66', text: '1:1,66'},
        { id: '1:1,85', text: '1:1,58'}, { id: 'Scope', text: 'Scope'}];
    var dataSS = [{ id: 0, text: '' }, { id: '18', text: '18' }, { id: '23,976', text: '23,976' },
        { id: '24', text: '24' }, { id: '25', text: '25' }, { id: '29,97', text: '29,97' },
        { id: '30', text: '30' }];
    var dataVN = [{ id: 0, text: '' }, { id: 'Blu-ray', text: 'Blu-ray' }, { id: 'DVD', text: 'DVD' },
        { id: 'Fajl / File', text: 'Fajl / File' }];
    var dataVF = [{ id: 0, text: '' }, { id: 'mp4 H.264', text: 'mp4 H.264' },
        { id: 'Quick Time DV / ProRes / DNxHD', text: 'Quick Time DV / ProRes / DNxHD' },
        { id: 'AVI - DV', text: 'AVI - DV' }];
    var dataVZ = [{ id: 0, text: '' }, { id: 'Zvucni / With sound', text: 'Zvucni / With sound' },
        { id: 'Nemi / Silent', text: 'Nemi / Silent' }];
    var dataBK = [{ id: 0, text: '' }, { id: 'Mono', text: 'Mono' }, { id: 'Stereo', text: 'Stereo' },
        { id: '5.1', text: '5.1' }];
    var dataRS = [{ id: 0, text: '' }, { id: 'Bez / None', text: 'Bez / None' }, { id: 'Dolby', text: 'Dolby' }];
    var nagrade = [{ id: 0, text: ''}];



    $.when(

        $.ajax({
            url : "filmPodaci",
            type : "get",
            async: false,
            success : function(data){

                film.push({ id: 0, text: '' });


                for (var i = 0; i < data.data.length; i++) {
                    var a = {}; //naziv filma


                    a.id = data.data[i].id_filma;
                    a.text = data.data[i].naziv_filma;

                    film.push(a);

                }
            }
        }),



        $.ajax({
            url : "filmPodaciTrajanje",
            type : "get",
            async: false,
            success : function(data){

                trajanje.push({ id: 0, text: '' });


                for (var i = 0; i < data.data.length; i++) {
                    var c = {};

                    c.id = data.data[i].trajanje;
                    c.text = data.data[i].trajanje;

                    trajanje.push(c);
                }
            }
        }),


        $.ajax({
            url : "filmPodaciGodina",
            type : "get",
            async: false,
            success : function(data){

                godina_proizvodnje.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {}; //naziv filma

                    a.id = data.data[i].godina_proizvodnje;
                    a.text = data.data[i].godina_proizvodnje;

                    godina_proizvodnje.push(a);
                }
            }
        }),


        $.ajax({

            url : "katedraPodaciNazivGodina",
            type : "get",
            async: false,
            success : function(data){

                katedra.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {}; //naziv katedre

                    a.id = data.data[i].naziv;
                    a.text = data.data[i].naziv;

                    katedra.push(a);
                }
            }
        }),

        $.ajax({
            url : "katedraPodaciGodina",
            type : "get",
            async: false,
            success : function(data){

                //katedra.push({ id: 0, text: '' });
                godina_studija.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {

                    var b = {};

                    b.id = data.data[i].godina_studija;
                    b.text = data.data[i].godina_studija;

                    godina_studija.push(b);
                }

            }
        }),

        $.ajax({
            url : "predmetPodaci",
            type : "get",
            async: false,
            success :  function(data){

                predmeti.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {};
                    a.id = data.data[i].id_predmeta;
                    a.text=data.data[i].naziv;

                    predmeti.push(a);
                }

            }
        }),

        $.ajax({
            url : "vezbePodaciRazlicito",
            type : "get",
            async: false,
            success :  function(data){

                vezbe.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {}; //naziv vezbe

                    a.id = data.data[i].naziv_vezbe;
                    a.text = data.data[i].naziv_vezbe;

                    vezbe.push(a);
                }
            }
        }),

        $.ajax({
            url : "profesorPodaci",
            type : "get",
            async: false,
            success :  function(data){

                profesori.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {}; //ime prof

                    a.id = data.data[i].id_profesora;
                    a.text = data.data[i].ime_prezime;

                    profesori.push(a);
                }

            }
        }),


        $.ajax({
            url : "producentPodaci",
            type : "get",
            async: false,
            success :  function(data){

                producenti.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {};
                    a.id = data.data[i].id_studenta;
                    a.text=data.data[i].ime_prezime;

                    producenti.push(a);
                }

            }
        }),

        $.ajax({
            url : "scenaristaPodaci",
            type : "get",
            async: false,
            success :  function(data){

                scenaristi.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {};
                    a.id = data.data[i].id_studenta;
                    a.text=data.data[i].ime_prezime;

                    scenaristi.push(a);
                }
            }
        }),

        $.ajax({
            url : "snimateljPodaci",
            type : "get",
            async: false,
            success :  function(data){

                snimatelji.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {};
                    a.id = data.data[i].id_studenta;
                    a.text=data.data[i].ime_prezime;

                    snimatelji.push(a);
                }
            }
        }),


        $.ajax({
            url : "reziserPodaci",
            type : "get",
            async: false,
            success :  function(data){

                reziseri.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {};
                    a.id = data.data[i].id_studenta;
                    a.text=data.data[i].ime_prezime;

                    reziseri.push(a);
                }
            }
        }),

        $.ajax({
            url : "montazerPodaci",
            type : "get",
            async: false,
            success :  function(data){

                montazeri.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {};
                    a.id = data.data[i].id_studenta;
                    a.text=data.data[i].ime_prezime;
                    montazeri.push(a);
                }

            }
        }),

        $.ajax({
            url : "glumacPodaci",
            type : "get",
            async: false,
            success :  function(data){

                glumci.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {};
                    a.id = data.data[i].ime_prezime;
                    a.text=data.data[i].ime_prezime;
                    glumci.push(a);
                }
            }
        }),


        $.ajax({
            url : "podrskaPodaci",
            type : "get",
            async: false,
            success :  function(data){

                kompozitori.push({ id: 0, text: '' });
                dizajner_zvuka.push({ id: 0, text: '' });
                snimatelj_zvuka.push({ id: 0, text: '' });
                scenograf.push({ id: 0, text: '' });
                kostimograf.push({ id: 0, text: '' });
                animacija.push({ id: 0, text: '' });
                sminker.push({ id: 0, text: '' });
                spec_efekti.push({ id: 0, text: '' });


                for (var i = 0; i < data.data.length; i++) {
                    var a = {};
                    var b=  {};
                    var c = {};
                    var d = {};
                    var e = {};
                    var f = {};
                    var g = {};
                    var h = {};

                    if(data.data[i].tip_podrske == "kompozitor") {
                        a.id = data.data[i].ime_prezime;
                        a.text = data.data[i].ime_prezime;
                        kompozitori.push(a);
                    }
                    else if(data.data[i].tip_podrske == "dizajner zvuka") {
                        b.id = data.data[i].ime_prezime;
                        b.text = data.data[i].ime_prezime;
                        dizajner_zvuka.push(b);
                    }

                    else if(data.data[i].tip_podrske == "snimatelj zvuka") {
                        c.id = data.data[i].ime_prezime;
                        c.text = data.data[i].ime_prezime;
                        snimatelj_zvuka.push(c);
                    }

                    else if(data.data[i].tip_podrske == "scenograf") {
                        d.id = data.data[i].ime_prezime;
                        d.text = data.data[i].ime_prezime;
                        scenograf.push(d);
                    }

                    else if(data.data[i].tip_podrske == "kostimograf") {
                        e.id = data.data[i].ime_prezime;
                        e.text = data.data[i].ime_prezime;
                        kostimograf.push(e);
                    }

                    else if(data.data[i].tip_podrske == "animacija") {
                        f.id = data.data[i].ime_prezime;
                        f.text = data.data[i].ime_prezime;
                        animacija.push(f);
                    }

                    else if(data.data[i].tip_podrske == "sminker") {
                        g.id = data.data[i].ime_prezime;
                        g.text = data.data[i].ime_prezime;
                        sminker.push(g);
                    }

                    else {
                        h.id = data.data[i].ime_prezime;
                        h.text = data.data[i].ime_prezime;
                        spec_efekti.push(h);
                    }
                }

            }
        })


    ).done( function() {

        $(".js-example-data-array.naziv_filma").select2({
            data: film
        });

        $(".js-example-data-array.godina_proizvodnje").select2({
            data: godina_proizvodnje
        });


        $(".js-example-data-array.trajanje").select2({
            data: trajanje
        });

        $(".js-example-data-array.katedra").select2({
            data: katedra
        });

        $(".js-example-data-array.godina_studija").select2({
            data: godina_studija
        });

        $(".js-example-data-array.predmet").select2({
            data: predmeti
        });

        $(".js-example-data-array.vezbe").select2({
            data: vezbe
        });

        $(".js-example-data-array.profesor").select2({
            data: profesori
        });

        $(".js-example-data-array.producenti").select2({
            data: producenti
        });

        $(".js-example-data-array.reziser").select2({
            data: reziseri
        });

        $(".js-example-data-array.montazer").select2({
            data: montazeri
        });

        $(".js-example-data-array.kompozitori").select2({
            data: kompozitori
        });


        $(".js-example-data-array.scenograf").select2({
            data: scenograf
        });


        $(".js-example-data-array.kostimograf").select2({
            data: kostimograf
        });

        $(".js-example-data-array.dizajner_zvuka").select2({
            data: dizajner_zvuka
        });


        $(".js-example-data-array.snimatelj_zvuka").select2({
            data: snimatelj_zvuka
        });


        $(".js-example-data-array.animacija").select2({
            data: animacija
        });


        $(".js-example-data-array.spec_efekti").select2({
            data: spec_efekti
        });


        $(".js-example-data-array.sminker").select2({
            data: sminker
        });

        $(".js-example-data-array.scenaristi").select2({
            data: scenaristi
        });

        $(".js-example-data-array.snimatelj").select2({
            data: snimatelji
        });


        $(".js-example-data-array.glumci").select2({
            data: glumci
        });


        $(".js-example-data-array.osnovni_format").select2({
            data: dataOF

        });
        $(".js-example-data-array.filmski_format").select2({
            data: dataFF

        });
        $(".js-example-data-array.video_format").select2({
            data: dataVIF

        });
        $(".js-example-data-array.tel_standard").select2({
            data: dataTS

        });
        $(".js-example-data-array.analiza_slike").select2({
            data: dataAS

        });
        $(".js-example-data-array.format_slike").select2({
            data: dataFS

        });
        $(".js-example-data-array.slicice_sekund").select2({
            data: dataSS

        });
        $(".js-example-data-array.video_nosac").select2({
            data: dataVN

        });
        $(".js-example-data-array.vrsta_fajla").select2({
            data: dataVF
        });
        $(".js-example-data-array.broj_kanala").select2({
            data: dataBK

        });
        $(".js-example-data-array.vrsta_zvuka").select2({
            data: dataVZ

        });
        $(".js-example-data-array.redukcija_suma").select2({
            data: dataRS
        });
        $(".js-example-data-array.nagrade").select2({
            data: nagrade
        });

    }).fail(function() {

        alert("Pokusajte ponovo sa ušitavanjem stranice");
    });



    $($('#navbar-lista').children()[0]).addClass('active');
    $("#napredna_pretraga").click(function(){
        $("#sekcija1").slideToggle("slow");
    });

    $("#pretragaForma").attr("action", pathWithToken('filmPretraga'));

    });



function idiNaKarton(){
    location.href='karton';
}

//ovo se odnosi na formu
$(document).ready(function(){



    var film = [];
    var godina=[];
    var trajanje = [];
    var katedra = [];
    var godina = [];
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
                godina.push({ id: 0, text: '' });
                trajanje.push({ id: 0, text: '' });


                for (var i = 0; i < data.data.length; i++) {
                    var a = {}; //naziv filma
                    var b = {}; //godina
                    var c = {};

                    a.id = data.data[i].id_filma;
                    a.text = data.data[i].naziv_filma;

                    b.id = data.data[i].godina_proizvodnje;
                    b.text = data.data[i].godina_proizvodnje;

                    c.id = data.data[i].trajanje;
                    c.text = data.data[i].trajanje;

                    film.push(a);
                    godina.push(b);
                    trajanje.push(c);

                }
            }
        }),


        $.ajax({
            url : "katedraPodaci",
            type : "get",
            async: false,
            success : function(data){

                katedra.push({ id: 0, text: '' });
                godina.push({ id: 0, text: '' });


                for (var i = 0; i < data.data.length; i++) {
                    var a = {}; //naziv katedre
                    var b = {};

                    a.id = data.data[i].naziv;
                    a.text = data.data[i].naziv;

                    b.id = data.data[i].godina_studija;
                    b.text = data.data[i].godina_studija;

                    katedra.push(a);
                    godina.push(b);
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
            url : "vezbePodaci",
            type : "get",
            async: false,
            success :  function(data){

                vezbe.push({ id: 0, text: '' });

                for (var i = 0; i < data.data.length; i++) {
                    var a = {}; //naziv vezbe

                    a.id = data.data[i].id_vezbe;
                    a.text = data.data[i].naziv;

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
                    a.id = data.data[i];
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
                        a.id = data.data[i];
                        a.text = data.data[i].ime_prezime;
                        kompozitori.push(a);
                    }
                    else if(data.data[i].tip_podrske == "dizajner zvuka") {
                        b.id = data.data[i];
                        b.text = data.data[i].ime_prezime;
                        dizajner_zvuka.push(b);
                    }

                    else if(data.data[i].tip_podrske == "snimatelj zvuka") {
                        c.id = data.data[i];
                        c.text = data.data[i].ime_prezime;
                        snimatelj_zvuka.push(c);
                    }

                    else if(data.data[i].tip_podrske == "scenograf") {
                        d.id = data.data[i];
                        d.text = data.data[i].ime_prezime;
                        scenograf.push(d);
                    }

                    else if(data.data[i].tip_podrske == "kostimograf") {
                        e.id = data.data[i];
                        e.text = data.data[i].ime_prezime;
                        kostimograf.push(e);
                    }

                    else if(data.data[i].tip_podrske == "animacija") {
                        f.id = data.data[i];
                        f.text = data.data[i].ime_prezime;
                        animacija.push(f);
                    }

                    else if(data.data[i].tip_podrske == "sminker") {
                        g.id = data.data[i];
                        g.text = data.data[i].ime_prezime;
                        sminker.push(g);
                    }

                    else {
                        h.id = data.data[i];
                        h.text = data.data[i].ime_prezime;
                        spec_efekti.push(h);
                    }
                }

            }
        })


    ).done( function() {

        $(".js-example-data-array.naziv_filma").select2({
            data: film,
            theme: 'classic'
        });

        $(".js-example-data-array.godina_proizvodnje").select2({
            data: godina,
            theme: 'classic'
        });


        $(".js-example-data-array.trajanje").select2({
            data: trajanje,
            theme: 'classic'
        });

        $(".js-example-data-array.katedra").select2({
            data: katedra,
            theme: 'classic'
        });

        $(".js-example-data-array.godina_studija").select2({
            data: godina,
            theme: 'classic'
        });

        $(".js-example-data-array.predmet").select2({
            data: predmeti,
            theme: 'classic',
            tags: true
        });

        $(".js-example-data-array.vezbe").select2({
            data: vezbe,
            theme: 'classic'
        });

        $(".js-example-data-array.profesor").select2({
            data: profesori,
            theme: 'classic',
            theme: 'classic'
        });

        $(".js-example-data-array.producenti").select2({
            data: producenti,
            theme: 'classic',
            tags: true
        });

        $(".js-example-data-array.reziser").select2({
            data: reziseri,
            theme: 'classic',
            tags: true
        });

        $(".js-example-data-array.montazer").select2({
            data: montazeri,
            theme: 'classic',
            tags: true
        });

        $(".js-example-data-array.kompozitori").select2({
            data: kompozitori,
            theme: 'classic',
            tags: true
        });


        $(".js-example-data-array.scenograf").select2({
            data: scenograf,
            theme: 'classic',
            tags: true
        });


        $(".js-example-data-array.kostimograf").select2({
            data: kostimograf,
            theme: 'classic',
            tags: true
        });

        $(".js-example-data-array.dizajner_zvuka").select2({
            data: dizajner_zvuka,
            theme: 'classic',
            tags: true
        });


        $(".js-example-data-array.snimatelj_zvuka").select2({
            data: snimatelj_zvuka,
            theme: 'classic',
            tags: true
        });


        $(".js-example-data-array.animacija").select2({
            data: animacija,
            theme: 'classic',
            tags: true
        });


        $(".js-example-data-array.spec_efekti").select2({
            data: spec_efekti,
            theme: 'classic',
            tags: true
        });


        $(".js-example-data-array.sminker").select2({
            data: sminker,
            theme: 'classic',
            tags: true
        });

        $(".js-example-data-array.scenaristi").select2({
            data: scenaristi,
            theme: 'classic',
            tags: true
        });

        $(".js-example-data-array.snimatelj").select2({
            data: snimatelji,
            theme: 'classic',
            tags: true
        });


        $(".js-example-data-array.glumci").select2({
            data: glumci,
            theme: 'classic',
            tags: true
        });


        $(".js-example-data-array.osnovni_format").select2({
            data: dataOF,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.filmski_format").select2({
            data: dataFF,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.video_format").select2({
            data: dataVIF,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.tel_standard").select2({
            data: dataTS,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.analiza_slike").select2({
            data: dataAS,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.format_slike").select2({
            data: dataFS,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.slicice_sekund").select2({
            data: dataSS,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.video_nosac").select2({
            data: dataVN,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.vrsta_fajla").select2({
            data: dataVF,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.broj_kanala").select2({
            data: dataBK,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.vrsta_zvuka").select2({
            data: dataVZ,
            tags:true,
            theme: 'classic'

        });
        $(".js-example-data-array.redukcija_suma").select2({
            data: dataRS,
            tags:true,
            theme: 'classic'
        });
        $(".js-example-data-array.nagrade").select2({
            data: nagrade,
            tags:true,
            multiple:true
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

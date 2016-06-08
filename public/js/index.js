function idiNaKarton(){
    location.href='karton';
}

//ovo se odnosi na formu
$(document).ready(function(){
    $($('#navbar-lista').children()[0]).addClass('active');
    $("#napredna_pretraga").click(function(){
        $("#sekcija1").slideToggle("slow");
    });

    $("#pretragaForma").attr("action", pathWithToken('filmPretraga'));

    $.get(pathWithToken("filmPodaci"), function(data){

        var film = [];
        var godina=[];
        var trajanje = [];

        film.push({ id: 0, text: '' });
        godina.push({ id: 0, text: '' });
        trajanje.push({ id: 0, text: '' });


        for (var i = 0; i < data.data.length; i++) {
            var a = {}; //naziv filma
            var b = {}; //godina
            var c = {};

            a.id = data.data[i].id_filma;
            a.text = data.data[i].naziv_filma;

            b.id = data.data[i].id_filma;
            b.text = data.data[i].godina_proizvodnje;

            c.id = data.data[i].id_filma;
            c.text = data.data[i].trajanje;

            film.push(a);
            godina.push(b);
            trajanje.push(c);

        }


        $(".js-example-data-array.naziv_filma").select2({
            data: film,
            theme:'classic'
        });

        $(".js-example-data-array.godina_proizvodnje").select2({
            data: godina,
            theme:'classic'
        });


        $(".js-example-data-array.trajanje").select2({
            data: trajanje,
            theme:'classic'
        });
    });



    $.get(pathWithToken("katedraPodaci"), function(data){

        var katedra = [];
        var godina = [];

        katedra.push({ id: 0, text: '' });
        godina.push({ id: 0, text: '' });


        for (var i = 0; i < data.data.length; i++) {
            var a = {}; //naziv katedre
            var b = {};

            a.id = data.data[i].naziv;
            a.text = data.data[i].naziv;

            b.id = data.data[i].naziv;
            b.text = data.data[i].godina_studija;

            katedra.push(a);
            godina.push(b);
        }
        $(".js-example-data-array.katedra").select2({
            data: katedra,
            theme:'classic'
        });

        $(".js-example-data-array.godina_studija").select2({
            data: godina,
            theme:'classic'
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
            theme:'classic',
            tags:true
        });

    });



    $.get(pathWithToken("vezbePodaci"), function(data){
        var vezbe = [];

        vezbe.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {}; //naziv vezbe


            a.id = data.data[i].id_vezbe;
            a.text = data.data[i].naziv;


            vezbe.push(a);
        }
        $(".js-example-data-array.vezbe").select2({
            data: vezbe,
            theme:'classic'
        });
    });


    $.get(pathWithToken("profesorPodaci"), function(data){
        var profesori = [];

        profesori.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {}; //ime prof

            a.id = data.data[i].id_profesora;
            a.text = data.data[i].ime_prezime;

            profesori.push(a);
        }

        $(".js-example-data-array.profesor").select2({
            data: profesori,
            theme: 'classic',
            theme:'classic'
        });

    });



    $.get(pathWithToken("producentPodaci"), function(data){

        var producenti = [];

        producenti.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i];
            a.text=data.data[i].ime_prezime;

            producenti.push(a);
        }

        $(".js-example-data-array.producenti").select2({
            data: producenti,
            theme:'classic',
            tags:true
        });

    });

    $.get(pathWithToken("scenaristaPodaci"), function(data){

        var scenaristi = [];

        scenaristi.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i];
            a.text=data.data[i].ime_prezime;

            scenaristi.push(a);
        }

        $(".js-example-data-array.scenaristi").select2({
            data: scenaristi,
            theme:'classic',
            tags:true
        });

    });

    $.get(pathWithToken("snimateljPodaci"), function(data){

        var snimatelji = [];

        snimatelji.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i];
            a.text=data.data[i].ime_prezime;

            snimatelji.push(a);
        }

        $(".js-example-data-array.snimatelj").select2({
            data: snimatelji,
            theme:'classic',
            tags:true
        });

    });


    $.get(pathWithToken("reziserPodaci"), function(data){

        var reziseri = [];

        reziseri.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i];
            a.text=data.data[i].ime_prezime;

            reziseri.push(a);
        }

        $(".js-example-data-array.reziser").select2({
            data: reziseri,
            theme:'classic',
            tags:true
        });

    });

    $.get(pathWithToken("montazerPodaci"), function(data){

        var montazeri = [];

        montazeri.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i];
            a.text=data.data[i].ime_prezime;
            montazeri.push(a);
        }

        $(".js-example-data-array.montazer").select2({
            data: montazeri,
            theme:'classic',
            tags:true
        });

    });

    $.get(pathWithToken("glumacPodaci"), function(data){

        var glumci = [];

        glumci.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i];
            a.text=data.data[i].ime_prezime;
            glumci.push(a);
        }

        $(".js-example-data-array.glumci").select2({
            data: glumci,
            theme:'classic',
            tags:true
        });

    });


    $.get(pathWithToken("podrskaPodaci"), function(data){

        var kompozitori = [];
        var dizajner_zvuka = [];
        var snimatelj_zvuka = [];
        var scenograf = [];
        var kostimograf=[];
        var animacija = [];
        var sminker = [];
        var spec_efekti = [];


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

            else if(data.data[i].tip_podrske == "šminker") {
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

        $(".js-example-data-array.kompozitori").select2({
            data: kompozitori,
            theme:'classic',
            tags:true
        });


        $(".js-example-data-array.scenograf").select2({
            data: scenograf,
            theme:'classic',
            tags:true
        });


        $(".js-example-data-array.kostimograf").select2({
            data: kostimograf,
            theme:'classic',
            tags:true
        });

        $(".js-example-data-array.dizajner_zvuka").select2({
            data: dizajner_zvuka,
            theme:'classic',
            tags:true
        });


        $(".js-example-data-array.snimatelj_zvuka").select2({
            data: snimatelj_zvuka,
            theme:'classic',
            tags:true
        });


        $(".js-example-data-array.animacija").select2({
            data: animacija,
            theme:'classic',
            tags:true
        });


        $(".js-example-data-array.spec_efekti").select2({
            data: spec_efekti,
            theme:'classic',
            tags:true
        });


        $(".js-example-data-array.sminker").select2({
            data: sminker,
            theme:'classic',
            tags:true
        });


    });



    //OVO JE PRIMER KOJI TRAZIMO MICI
    $(".js-example-basic-hide-search").select2({
        minimumResultsForSearch: 0,
        theme: 'classic'
    });

    $("#pasusi1").click(function(){
        $("#osnovno").slideToggle("slow");
    });


    $("#pasusi2").click(function(){
        $("#tehnicka").slideToggle("slow");
    });
});





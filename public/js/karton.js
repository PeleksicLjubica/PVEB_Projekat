
/**
 * Created by Ljubica on 14.5.2016.
 */

$(document).ready(function(){


    $('#dodatno1').click(function() {
        if( $(this).is(':checked')) {
            $("#fileToUpload1").show();
        } else {
            $("#fileToUpload1").hide();
        }
    });

    $('#dodatno2').click(function() {
        if( $(this).is(':checked')) {
            $("#fileToUpload2").show();
        } else {
            $("#fileToUpload2").hide();
        }
    });

    $('#dodatno3').click(function() {
        if( $(this).is(':checked')) {
            $("#fileToUpload3").show();
        } else {
            $("#fileToUpload3").hide();
        }
    });

    $('#dodatno4').click(function() {
        if( $(this).is(':checked')) {
            $("#fileToUpload4").show();
        } else {
            $("#fileToUpload4").hide();
        }
    });

    $('#dodatno5').click(function() {
        if( $(this).is(':checked')) {
            $("#fileToUpload5").show();
        } else {
            $("#fileToUpload5").hide();
        }
    });

    $('#dodatno6').click(function() {
        if( $(this).is(':checked')) {
            $("#fileToUpload6").show();
        } else {
            $("#fileToUpload6").hide();
        }
    });

    $('#dodatno7').click(function() {
        if( $(this).is(':checked')) {
            $("#fileToUpload7").show();
        } else {
            $("#fileToUpload7").hide();
        }
    });

    $('#dodatno8').click(function() {
        if( $(this).is(':checked')) {
            $("#fileToUpload8").show();
        } else {
            $("#fileToUpload8").hide();
        }
    });

    $($('#navbar-lista').children()[3]).addClass('active');

    $.get(pathWithToken("studentiPodaci"), function(data){
        var studenti = [];

        studenti.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i].indeks;
            a.text = data.data[i].ime_prezime + " , indeks: " + data.data[i].indeks;

            studenti.push(a);
        }

        //SELECT2 za selectove koji su sigurno studenti
        $(".js-example-basic-hide-search.studenti").select2({
            minimumResultsForSearch: 0,
            multiple:true,
            data: studenti
        });

        //SELECT 2 za selectove koji nisu nuzno studenti
        $(".js-example-data-array.studenti").select2({
            minimumResultsForSearch: 0,
            multiple:true,
            data: studenti,
            tags: true
        });

    });


    $.get(pathWithToken("vezbePodaci"), function(data){
        var vezbe = [];

        vezbe.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i].id_vezbe;
            a.text = data.data[i].naziv;

            vezbe.push(a);
        }

        $(".js-example-basic-hide-search.naziv_vezbe").select2({
            minimumResultsForSearch: 0,
            data: vezbe
        });

    });


    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var check = false;
            return this.optional(element) || regexp.test(value);
        },
        "Ispravan format je brojsati:brojminuta:brojsekundi"
    );

    $.validator.addMethod(
        "regex2",
        function(value, element, regexp) {
            var check = false;
            return this.optional(element) || regexp.test(value);
        },
        "Upišite naziv vežbe"
    );



    $(function() {
        $("#karton_filma").validate({
            errorClass: "my-error-class",

            rules: {
                godina: {required: true, number: true},
                naziv_filma: {required: true},
                naziv_vezbe: {
                    required: true,
                    regex2: /[1-9][0-9]*/
                },
                trajanje:{
                    required: true,
                    regex: /([0-1]?\d|2[0-3]):([0-5]?\d):([0-5]?\d)/,
                    minlength: 5
                }
            },
            messages: {
                godina: {
                    required: "Upišite godinu proizvodnje",
                    number: "Upišete broj"
                },
                naziv_filma: {
                    required: "Upišite naziv filma"
                },
                naziv_vezbe: {
                    required: "Upišite naziv vežbe"
                },
                trajanje:{
                    required: "Upišete trajanje filma"
                }

            }
        });


    });


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


    $(".js-example-data-array.osnovni_format").select2({
        data: dataOF,
        tags:true
    });
    $(".js-example-data-array.filmski_format").select2({
        data: dataFF,
        tags:true
    });
    $(".js-example-data-array.video_format").select2({
        data: dataVIF,
        tags:true
    });
    $(".js-example-data-array.tel_standard").select2({
        data: dataTS,
        tags:true
    });
    $(".js-example-data-array.analiza_slike").select2({
        data: dataAS,
        tags:true
    });
    $(".js-example-data-array.format_slike").select2({
        data: dataFS,
        tags:true
    });
    $(".js-example-data-array.slicice_sekund").select2({
        data: dataSS,
        tags:true
    });
    $(".js-example-data-array.video_nosac").select2({
        data: dataVN,
        tags:true
    });
    $(".js-example-data-array.vrsta_fajla").select2({
        data: dataVF,
        tags:true
    });
    $(".js-example-data-array.broj_kanala").select2({
        data: dataBK,
        tags:true
    });
    $(".js-example-data-array.vrsta_zvuka").select2({
        data: dataVZ,
        tags:true
    });
    $(".js-example-data-array.redukcija_suma").select2({
        data: dataRS,
        tags:true
    });
    $(".js-example-data-array.nagrade").select2({
        data: nagrade,
        tags:true,
        multiple:true
    });


});





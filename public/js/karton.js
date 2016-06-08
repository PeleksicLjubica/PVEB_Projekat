/**
 * Created by milica on 5/29/2016.
 */

/**
 * Created by Ljubica on 14.5.2016.
 */

$(document).ready(function(){



    $.get(pathWithToken("studenti"), function(data){
        var studenti = [];

        studenti.push({ id: 0, text: '' });

        for (var i = 0; i < data.data.length; i++) {
            var a = {};
            a.id = data.data[i].indeks;
            a.text = data.data[i].ime + " " +  data.data[i].prezime + " , indeks: " + data.data[i].indeks;

            studenti.push(a);
        }

<<<<<<< .mine
        $(".js-example-data-array.studenti").select2({
            data: studenti,
            tags:true,
            multiple:true
        });
=======





>>>>>>> .theirs


    });


 /*uzela sam neke druge podatke za studente, definitivno je greska u rutama, jer ovako radi */
    var dataS = [{ id: 0, text: '' }, { id: 'VIDEO', text: 'VIDEO' }, { id: 'FILM', text: 'FILM' }];
    $(".js-example-data-array.studenti").select2({
        data: dataS,
        theme: 'classic'
    });


    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var check = false;
            return this.optional(element) || regexp.test(value);
        },
        "Ispravan format je brojsati:brojminuta:brojsekundi"
    );



    $(function() {
        $("#karton_filma").validate({
            errorClass: "my-error-class",

            rules: {
                godina: {required: true, number: true},
                naziv_filma: {required: true},
                naziv_vezbe: {required: true},
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


    $(".js-example-data-array.osnovni_format").select2({
        data: dataOF,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.filmski_format").select2({
        data: dataFF,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.video_format").select2({
        data: dataVIF,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.tel_standard").select2({
        data: dataTS,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.analiza_slike").select2({
        data: dataAS,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.format_slike").select2({
        data: dataFS,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.slicice_sekund").select2({
        data: dataSS,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.video_nosac").select2({
        data: dataVN,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.vrsta_fajla").select2({
        data: dataVF,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.broj_kanala").select2({
        data: dataBK,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.vrsta_zvuka").select2({
        data: dataVZ,
        tags:true,
        theme: "classic"
    });
    $(".js-example-data-array.redukcija_suma").select2({
        data: dataRS,
        tags:true,
        theme: "classic"
    });


});




